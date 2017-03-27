<?php

namespace ProjetBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ProjetBundle\Form\SituationAnnuelleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProjetBundle\Entity\ObjectifTrimestre;
use ProjetBundle\Form\ObjectifTrimestreType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ObjectifController extends Controller
{
	public function listeAction($idSituationAnnuelle)
    {
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $em->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $objectifs = $situationAnnuelle->getObjectifTrimestres();
        $descriptifParUi = $situationAnnuelle->getDescriptifParUi();
        
        return $this->render('ProjetBundle:Objectif:liste.html.twig',[
            'situationAnnuelle' => $situationAnnuelle,
            'descriptifParUi' => $descriptifParUi,
            'objectifs' => $objectifs
        ]);
    }

    public function ajouterAction($idSituationAnnuelle)
    {
    	$request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);        
        $objectif = new ObjectifTrimestre();
        $objectifForm = $this->createForm(new ObjectifTrimestreType(), $objectif);
        $objectifForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($objectifForm->isValid())
            {
                $objectif = $objectifForm->getData();
                $response = new JsonResponse();
                try {
                    $em = $this->getDoctrine()->getManager();
                    $objectif->setDate(new \Datetime());
                    $objectif->setSituationAnnuelle($situationAnnuelle);                    
                    $em->persist($objectif);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "Objectif ajoutée"
                    );
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Ajout effectué avec succes"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_liste',[
                    	'idSituationAnnuelle' => $idSituationAnnuelle
                    	]);
                } catch (UniqueConstraintViolationException $ex) {
                    $response->setStatusCode(500);
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                    $response->setData(array('errorMessage' => "Objectif déja existant"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_ajouter',[                	
                        'idSituationAnnuelle' => $idSituationAnnuelle
                	]);
                }
            }else {
                $response = new JsonResponse();
                $response->setStatusCode(500);
                $this->get('session')->getFlashBag()->add('notice_error', 'Cetobjectif existe déja');
                $response->setData(array('errorMessage' => "Objectif déja existant"));
                return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_ajouter',[                 
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
            }
        }
        return $this->render('ProjetBundle:Objectif:ajouter.html.twig', [
            'form' => $objectifForm->createView(),
            'idSituationAnnuelle'=> $idSituationAnnuelle
        ]);        
    }

    public function modifierAction($idSituationAnnuelle,$idObjectif,Request $request)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $objectif = $em->getRepository('ProjetBundle:ObjectifTrimestre')->find($idObjectif);
        $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->find($idSituationAnnuelle);
        $objectifForm = $this->createForm(new ObjectifTrimestreType(), $objectif);
        $objectifForm->handleRequest($request);
        if( $request->getMethod() == 'POST')
        {
            if ($objectifForm->isValid())
            {
                $objectif = $objectifForm->getData();
                $response = new JsonResponse();
                try{
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success', "Modification de l'objectif effectuée");
                    $response->setStatusCode(200);
                    $response->setData(array('successMessage' => "Modification réussi"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_liste',[
                    	'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }catch (UniqueConstraintViolationException $ex){
                    $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                    $response->setStatusCode(500);
                    $response->setData(array('errorMessage' => "Objectif déja existant"));
                    return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_liste',[
                        'idSituationAnnuelle' => $idSituationAnnuelle
                    ]);
                }
            } else {
                $response = new JsonResponse();
                $this->get('session')->getFlashBag()->add('notice_error', 'L\'objectif existe déja veuillez modifier');
                $response->setStatusCode(500);
                $response->setData(array('errorMessage' => "Objectif déja existant"));
            }
            return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_modifier',[
                'idSituationAnnuelle' => $idSituationAnnuelle,
                'idObjectif' => $idObjectif
            ]);
        }
        return $this->render('ProjetBundle:Objectif:modifier.html.twig',[            
            'form' => $objectifForm->createView(),
            'idSituationAnnuelle' => $idSituationAnnuelle,
        ]);
    }
    // suppression d'une situation annuelle
    public function supprimerAction($idSituationAnnuelle, Request $request)
    {
        if( $request->getMethod() == 'POST')
        {
            $id = $request->get('idObjectif');
            $em = $this->getDoctrine()->getManager();
            $situationAnnuelle = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:SituationAnnuelle')->findOneBy(['id' => $idSituationAnnuelle ]);
            $objectif = $em->getRepository('ProjetBundle:ObjectifTrimestre')->find($id);
            $situationAnnuelle->removeObjectifTrimestre($objectif);
            $em->remove($objectif);            
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de l\'objectif effectuée"
            );
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Supprimée"));
            return $this->redirectToRoute('projet_descriptif_situation_annuelle_objectif_liste',[
                    'idSituationAnnuelle' => $idSituationAnnuelle
            ]);
        }
    }
}
