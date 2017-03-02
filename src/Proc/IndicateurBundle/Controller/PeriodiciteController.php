<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Periodicite;
use Proc\IndicateurBundle\Form\PeriodiciteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class PeriodiciteController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:Periodicite:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $periodicites = $em->getRepository('IndicateurBundle:Periodicite')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($periodicites, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction()
    {
        $periodicite = new Periodicite();
        $periodiciteForm = $this->createForm(new PeriodiciteType(),$periodicite);

        $request = $this->getRequest();
        $periodiciteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($periodiciteForm->isValid())
            {
                $periodicite = $periodiciteForm->getData();
                //eto zao
                if ($this->findByLibelle($periodicite->getLibellePeriodicite()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle période déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:Periodicite:ajouter.html.twig',
                            array('form' => $periodiciteForm->createView()))
                    ));
                    return $response;
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($periodicite);
                $em->flush();
                $response = new JsonResponse();
                $response->setStatusCode(200);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Périodicite ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:Periodicite:ajouter.html.twig',
                        array('form' => $periodiciteForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($periodiciteForm)
                ));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:Periodicite:ajouter.html.twig', [
                    'form' => $periodiciteForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Periodicite");
        $obj = $repository->findOneBy(['libellePeriodicite' => $libelle]);
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

    public function modifierAction(Periodicite $periodicite,Request $request)
    {
        $periodidicteForm = $this->createForm(new PeriodiciteType(), $periodicite);
        $periodidicteForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($periodidicteForm->isValid()) {
                $periodicite2 = $periodidicteForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($periodicite2->getLibellePeriodicite()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de la périodicité enregistrée"
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
                    'formErrors' => $this->renderView('IndicateurBundle:Periodicite:modifier.html.twig',
                        array('form' =>  $periodidicteForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($periodidicteForm)));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:Periodicite:modifier.html.twig',
                    array('form' => $periodidicteForm->createView())
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
            $nature = $em->getRepository('IndicateurBundle:Periodicite')->find($no);
            $em->remove($nature);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la période effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
