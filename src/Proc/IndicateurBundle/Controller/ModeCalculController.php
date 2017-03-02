<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Mode_calcul;
use Proc\IndicateurBundle\Form\Mode_calculType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Proc\IndicateurBundle\Tests\Controller\ActiviteControllerTest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ModeCalculController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:ModeCalcul:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $mcs = $em->getRepository('IndicateurBundle:Mode_calcul')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($mcs, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction()
    {
        $mc = new Mode_calcul();
        $mcForm = $this->createForm(new Mode_calculType(),$mc);

        $request = $this->getRequest();
        $mcForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($mcForm->isValid())
            {
                $mc = $mcForm->getData();
                //eto zao
                if ($this->findByLibelle($mc->getLibelleModeCalcul()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle mode de calcul déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:ModeCalcul:ajouter.html.twig',
                            array('form' => $mcForm->createView()))
                    ));
                    return $response;
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($mc);
                $em->flush();
                $response = new JsonResponse();
                $response->setStatusCode(200);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Mode de calcul ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:ModeCalcul:ajouter.html.twig',
                        array('form' => $mcForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($mcForm)
                ));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:ModeCalcul:ajouter.html.twig', [
                    'form' => $mcForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Mode_calcul");
        $obj = $repository->findOneBy(['libelleModeCalcul' => $libelle]);
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

    public function modifierAction(Mode_calcul $mc,Request $request)
    {
        $mcForm = $this->createForm(new Mode_calculType(), $mc);
        $mcForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($mcForm->isValid()) {
                $mc2 = $mcForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($mc2->getLibelleModeCalcul()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification du mode de calcul enregistrée"
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
                    'formErrors' => $this->renderView('IndicateurBundle:ModeCalcul:modifier.html.twig',
                        array('form' =>  $mcForm->createView())
                    ),
                    'errorsForm' => $this->getErrorsAsArray($mcForm)));
                return $response;
            }
        }
        else
        {
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'form' => $this->renderView('IndicateurBundle:ModeCalcul:modifier.html.twig',
                    array('form' => $mcForm->createView())
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
            $mc = $em->getRepository('IndicateurBundle:Mode_calcul')->find($no);
            $em->remove($mc);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression du mode de calcul effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
