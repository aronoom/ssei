<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Nature;
use Proc\IndicateurBundle\Form\NatureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class NatureController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:Nature:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $natures = $em->getRepository('IndicateurBundle:Nature')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($natures, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction()
    {
        $nature = new Nature();
        $natureForm = $this->createForm(new NatureType(),$nature);

        $request = $this->getRequest();
        $natureForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($natureForm->isValid())
            {
                $nature = $natureForm->getData();
                //eto zao
                if ($this->findByLibelle($nature->getLibelleNature()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle nature déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:Nature:ajouter.html.twig',
                            array('form' => $natureForm->createView()))
                    ));
                    return $response;
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($nature);
                $em->flush();
                $response = new JsonResponse();
                $response->setStatusCode(200);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Nature ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:Nature:ajouter.html.twig',
                        array('form' => $natureForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($natureForm)
                ));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:Nature:ajouter.html.twig', [
                    'form' => $natureForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Nature");
        $obj = $repository->findOneBy(['libelleNature' => $libelle]);
        return $obj;
    }

    protected function getErrorsAsArray($form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error)
            $errors[] = $error->getMessage();

        foreach ($form->all() as $key => $child) {
            if ($err = $this->getErrorsAsArray($child))
                $errors[$key] = $err;
        }
        return $errors;
    }

    public function modifierAction(Nature $nature,Request $request)
    {
        $natureForm = $this->createForm(new NatureType(), $nature);
        $natureForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($natureForm->isValid()) {
                $nature2 = $natureForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($nature2->getLibelleNature()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de la nature enregistrée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                }else{
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        "Le libelle est déja attribué, veuillez modifier"
                    );
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Veuillez modifier le champ"));
                }
                return $response;
            }
            else {
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:Nature:modifier.html.twig',
                        array('form' =>  $natureForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($natureForm)));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:Nature:modifier.html.twig',
                    array('form' => $natureForm->createView())
                )));
            return $response;
        }
    }

    public function supprAction()
    {
        $request = $this->getRequest();
        $no = $request->request->get("numeroIndicateur");
        if( $request->getMethod() == 'POST')
        {
            $em = $this->getDoctrine()->getManager();
            $nature = $em->getRepository('IndicateurBundle:Nature')->find($no);
            $em->remove($nature);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la nature effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
