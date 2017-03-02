<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Activite;
use Proc\IndicateurBundle\Form\ActiviteType;
use Proc\IndicateurBundle\Tests\Controller\ActiviteControllerTest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



class ActiviteController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:Activite:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('IndicateurBundle:Activite')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($activites, 'json');
        $response->setContent($jsonContent);
        return $response;
    }
    
    public function ajouterAction()
    {
        $activite = new Activite();
        $activiteForm = $this->createForm(new ActiviteType(),$activite);

        $request = $this->getRequest();
        $activiteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($activiteForm->isValid())
            {
                $activite = $activiteForm->getData();
                //eto zao
                if ($this->findByLibelle($activite->getLibelleActivite()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle activité déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:Activite:ajouter.html.twig',
                            array('form' => $activiteForm->createView()))
                    ));
                    return $response;
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($activite);
                $em->flush();
                $response = new JsonResponse();
                $response->setStatusCode(200);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Activité ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:Activite:ajouter.html.twig',
                        array('form' => $activiteForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($activiteForm)
                ));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:Activite:ajouter.html.twig', [
                    'form' => $activiteForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Activite");
        $obj = $repository->findOneBy(['libelleActivite' => $libelle]);
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

    public function modifierAction(Activite $activite,Request $request)
    {
        $actForm = $this->createForm(new ActiviteType(), $activite);
        $actForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($actForm->isValid()) {
                $act2 = $actForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($act2->getLibelleActivite()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de l'activité enregistrée"
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
                    'formErrors' => $this->renderView('IndicateurBundle:Activite:modifier.html.twig',
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
                'form' => $this->renderView('IndicateurBundle:Activite:modifier.html.twig',
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
            $indicateur = $em->getRepository('IndicateurBundle:Activite')->find($no);
            $em->remove($indicateur);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l'activité effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
