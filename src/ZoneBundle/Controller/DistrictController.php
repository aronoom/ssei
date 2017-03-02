<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 26/02/2017
 * Time: 00:30
 */

namespace ZoneBundle\Controller;


use ZoneBundle\Entity\Region;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZoneBundle\Entity\District;
use ZoneBundle\Form\DistrictType;

class  DistrictController extends Controller
{
    public function listerAction($region_id){
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $dricts = $repository->findBy(['regionId' => $region_id]);
        return $this->render('ZoneBundle:District:lister.html.twig', array('region_id'=> $region_id, 'districts'=> $dricts));
    }
    
    private function findRegionById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Region");
        $region = $repository->findOneBy(['id' => $id]);
        return $region;
    }

    private function findDistrictById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $district = $repository->findOneBy(['id' => $id]);
        return $district;
    }

    public function ajouterAction($region_id){
        $em = $this->getDoctrine()->getEntityManager();
        $d = new District();
        $d->setRegion($this->findRegionById($region_id));
        $form = $this->createForm(new DistrictType(), $d);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $dist = $form->getData();
            $em->persist($dist);
            $em->flush();
        }

        return $this->render('ZoneBundle:District:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function supprimerAction($id){
        $request = $this->getRequest();
        $district = $this->findDistrictById($id);

        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($district);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la commune effectuée"
            );
        }
        return $this->render('ZoneBundle:District:supprimer.html.twig', array('id' => $id, 'district' => $district));
    }

    public function modifierAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $d = $this->findDistrictById($id);
        $form = $this->createForm(new DistrictType(), $d);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
        }

        return $this->render('ZoneBundle:District:modifier.html.twig', array('id' => $id, 'form' => $form->createView()));
    }
}