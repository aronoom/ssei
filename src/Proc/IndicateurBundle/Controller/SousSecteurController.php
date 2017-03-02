<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\SousSecteur;
use Proc\IndicateurBundle\Form\SousSecteurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class SousSecteurController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:SousSecteur:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ss = $em->getRepository('IndicateurBundle:SousSecteur')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($ss, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction()
    {
        $ss = new SousSecteur();
        $ssForm = $this->createForm(new SousSecteurType(),$ss);

        $request = $this->getRequest();
        $ssForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($ssForm->isValid())
            {
                $ss = $ssForm->getData();
                //eto zao
                if ($this->findByLibelle($ss->getLibelleSousSecteur()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle sous secteur déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:SousSecteur:ajouter.html.twig',
                            array('form' => $ssForm->createView()))
                    ));
                    return $response;
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($ss);
                $em->flush();
                $response = new JsonResponse();
                $response->setStatusCode(200);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Sous secteur ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:SousSecteur:ajouter.html.twig',
                        array('form' => $ssForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($ssForm)
                ));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:SousSecteur:ajouter.html.twig', [
                    'form' => $ssForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:SousSecteur");
        $obj = $repository->findOneBy(['libelleSousSecteur' => $libelle]);
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

    public function modifierAction(SousSecteur $ss,Request $request)
    {
        $actForm = $this->createForm(new SousSecteurType(), $ss);
        $actForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($actForm->isValid()) {
                $act2 = $actForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($act2->getLibelleSousSecteur()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification du sous secteur enregistrée"
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
                    'formErrors' => $this->renderView('IndicateurBundle:SousSecteur:modifier.html.twig',
                        array('form' =>  $actForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($actForm)));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:SousSecteur:modifier.html.twig',
                    array('form' => $actForm->createView())
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
            $indicateur = $em->getRepository('IndicateurBundle:SousSecteur')->find($no);
            $em->remove($indicateur);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du sous secteur effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
