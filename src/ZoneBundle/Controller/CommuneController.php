<?php
/**
 * Created by PhpStorm.
 * User: aro
 * Date: 26/02/2017
 * Time: 00:30
 */

namespace ZoneBundle\Controller;


use ZoneBundle\Entity\District;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZoneBundle\Entity\Commune;
use ZoneBundle\Form\CommuneType;

class CommuneController extends Controller
{
    public function listerAction($district_id){
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Commune");
        $communes = $repository->findBy(['districtId' => $district_id]);
        return $this->render('ZoneBundle:Commune:lister.html.twig', array('district_id'=> $district_id, 'communes'=> $communes));
    }
    private function findDistrictById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:District");
        $district = $repository->findOneBy(['id' => $id]);
        return $district;
    }

    private function findCommuneById($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("ZoneBundle:Commune");
        $commune = $repository->findOneBy(['id' => $id]);
        return $commune;
    }

    public function ajouterAction($district_id){
        $em = $this->getDoctrine()->getEntityManager();
        $c = new Commune();
        $c->setDistrict($this->findDistrictById($district_id));
        $form = $this->createForm(new CommuneType(), $c);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $dist = $form->getData();
            $em->persist($dist);
            $em->flush();
        }
        return $this->render('ZoneBundle:Commune:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function supprimerAction($id){
        $request = $this->getRequest();
        $commune = $this->findCommuneById($id);

        if( $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($commune);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                "Suppression de la commune effectuée"
            );
        }
        return $this->render('ZoneBundle:Commune:supprimer.html.twig', array('id' => $id, 'commune' => $commune));
    }

    public function modifierAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $d = $this->findCommuneById($id);
        $form = $this->createForm(new CommuneType(), $d);

        $request = $this->getRequest();
        if($request->isMethod('post')){
            $form->bind($request);
            $rgn = $form->getData();
            $em->persist($rgn);
            $em->flush();
        }
        return $this->render('ZoneBundle:Commune:modifier.html.twig', array('id' => $id, 'form' => $form->createView()));
    }
}