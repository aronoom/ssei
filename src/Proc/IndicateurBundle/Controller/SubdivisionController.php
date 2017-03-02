<?php

namespace Proc\IndicateurBundle\Controller;

use Proc\IndicateurBundle\Entity\Subdivision;
use Proc\IndicateurBundle\Form\SubdivisionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SubdivisionController extends Controller
{
    public function listeAction()
    {
        return $this->render('IndicateurBundle:Subdivision:liste.html.twig', array(
            // ...
        ));
    }

    public function listeAjaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $subdivison = $em->getRepository('IndicateurBundle:Subdivision')->findAll();
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($subdivison, 'json');
        $response->setContent($jsonContent);
        return $response;
    }

    public function ajouterAction()
    {
        $ss = new Subdivision();
        $ssForm = $this->createForm(new SubdivisionType(),$ss);

        $request = $this->getRequest();
        $ssForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($ssForm->isValid())
            {
                $ss = $ssForm->getData();
                //eto zao
                if ($this->findByLibelle($ss->getLibelleSubdivision()) != null)
                {
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Libelle subdivision déja existant'
                    );
                    $response = new JsonResponse();
                    $response->setStatusCode(412);
                    $response->setData(array(
                        'form' => $this->renderView('IndicateurBundle:Subdivision:ajouter.html.twig',
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
                    'Subdivision ajoutée avec succes'
                );
                $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                return $response;
            }
            else
            {//error
                $response = new JsonResponse();
                $response->setStatusCode(412);
                $response->setData(array(
                    'formErrors' => $this->renderView('IndicateurBundle:Subdivision:ajouter.html.twig',
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
                'form' => $this->renderView('IndicateurBundle:Subdivision:ajouter.html.twig', [
                    'form' => $ssForm->createView()])
            ));
            return $response;
        }
    }

    public function findByLibelle($libelle)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("IndicateurBundle:Subdivision");
        $obj = $repository->findOneBy(['libelleSubdivision' => $libelle]);
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

    public function modifierAction(Subdivision $ss,Request $request)
    {
        $actForm = $this->createForm(new SubdivisionType(), $ss);
        $actForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($actForm->isValid()) {
                $act2 = $actForm->getData();
                $response = new JsonResponse();
                if($this->findByLibelle($act2->getLibelleSubdivision()) == null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Modification de la subdivision enregistrée"
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
                    'formErrors' => $this->renderView('IndicateurBundle:Subdivision:modifier.html.twig',
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
                'form' => $this->renderView('IndicateurBundle:Subdivision:modifier.html.twig',
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
            $indicateur = $em->getRepository('IndicateurBundle:Subdivision')->find($no);
            $em->remove($indicateur);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la subdivision effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));
            return $response;
        }
    }
}
