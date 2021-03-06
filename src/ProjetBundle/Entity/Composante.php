<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composante
 *
 * @ORM\Table(name="composante")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\ComposanteRepository")
 */
class Composante
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_composante", type="string", length=100)
     */
    private $libelleComposante;

    /**
     * @var int
     *
     * @ORM\Column(name="projet_id", type="integer")
     */
    private $projetId;

    /**
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="composantes")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet;

    /**
     * @ORM\OneToMany(targetEntity="ActiviteComposante", mappedBy="composante", cascade={"persist","remove"} )
     */
    private $activites;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleComposante
     *
     * @param string $libelleComposante
     * @return Composante
     */
    public function setLibelleComposante($libelleComposante)
    {
        $this->libelleComposante = $libelleComposante;
    
        return $this;
    }

    /**
     * Get libelleComposante
     *
     * @return string 
     */
    public function getLibelleComposante()
    {
        return $this->libelleComposante;
    }

    /**
     * Set projetId
     *
     * @param integer $projetId
     * @return Composante
     */
    public function setProjetId($projetId)
    {
        $this->projetId = $projetId;
    
        return $this;
    }

    /**
     * Get projetId
     *
     * @return integer 
     */
    public function getProjetId()
    {
        return $this->projetId;
    }

    /**
     * Set projet
     *
     * @param \ProjetBundle\Entity\Projet $projet
     * @return Composante
     */
    public function setProjet(\ProjetBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;
    
        return $this;
    }

    /**
     * Get projet
     *
     * @return \ProjetBundle\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activites
     *
     * @param \ProjetBundle\Entity\ActiviteComposante $activites
     * @return Composante
     */
    public function addActivite(\ProjetBundle\Entity\ActiviteComposante $activites)
    {
        $this->activites[] = $activites;
    
        return $this;
    }

    /**
     * Remove activites
     *
     * @param \ProjetBundle\Entity\ActiviteComposante $activites
     */
    public function removeActivite(\ProjetBundle\Entity\ActiviteComposante $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
}
