<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 23/02/2017
 * Time: 16:28
 */

namespace ZoneBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZoneBundle\Entity\Region;
use ZoneBundle\Form\RegionType;

class RegionController extends Controller
{
    public function ajouterAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $r = new Region();
        $form = $this->createForm(new RegionType(), $r);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
        }

        return $this->render('ZoneBundle:Region:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function listerAction(){
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('ZoneBundle:Region')->findAll();
        return $this->render('ZoneBundle:Region:lister.html.twig', array('regions'=> $regions));
    }

    private function findRegionById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Region");
        $region = $repository->findOneBy(['id' => $id]);
        return $region;
    }

    public function supprimerAction($id){
        $request = $this->getRequest();
        $region = $this->findRegionById($id);

        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($region);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la region effectuée"
            );
            /*$response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'successMessage' => "Deleted"));*/
        }
        return $this->render('ZoneBundle:Region:supprimer.html.twig', array('id' => $id, 'region' => $region));
    }

    public function modifierAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $r = $this->findRegionById($id);
        $form = $this->createForm(new RegionType(), $r);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
        }

        return $this->render('ZoneBundle:Region:modifier.html.twig', array('id' => $id, 'form' => $form->createView()));
    }
}