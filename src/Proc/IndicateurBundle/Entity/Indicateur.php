<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indicateur
 *
 * @ORM\Table(name="indicateur")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\IndicateurRepository")
 */
class Indicateur
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
     * @ORM\Column(name="libelleIndicateur", type="string", length=92, unique=true)
     */
    private $libelleIndicateur;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionIndicateur", type="text", length=255, unique=false, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\IndicateurBundle\Entity\Type",cascade={"persist"})
     */
    private $types;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Activite",cascade={"persist","remove"})
     */
    private $activite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Unite",cascade={"persist"})
     */
    private $unite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Nature",cascade={"persist"},cascade={"persist"})
     */
    private $nature;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Mode_calcul",cascade={"persist"})
     */
    private $modeCalcul;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Subdivision",cascade={"persist"})
     */
    private $subdivision;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Periodicite",cascade={"persist"})
     */
    private $periodicite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\SousSecteur",cascade={"persist"})
     */
    private $sousSecteur;

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
     * Set libelleIndicateur
     *
     * @param string $libelleIndicateur
     * @return Indicateur
     */
    public function setLibelleIndicateur($libelleIndicateur)
    {
        $this->libelleIndicateur = $libelleIndicateur;

        return $this;
    }

    /**
     * Get libelleIndicateur
     *
     * @return string 
     */
    public function getLibelleIndicateur()
    {
        return $this->libelleIndicateur;
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return Indicateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

        /**
     * Set unite
     *
     * @param \Proc\IndicateurBundle\Entity\Unite $unite
     * @return Indicateur
     */
    public function setUnite(\Proc\IndicateurBundle\Entity\Unite $unite = null)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return \Proc\IndicateurBundle\Entity\Unite 
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set nature
     *
     * @param \Proc\IndicateurBundle\Entity\Nature $nature
     * @return Indicateur
     */
    public function setNature(\Proc\IndicateurBundle\Entity\Nature $nature = null)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return \Proc\IndicateurBundle\Entity\Nature 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set modeCalcul
     *
     * @param \Proc\IndicateurBundle\Entity\Mode_calcul $modeCalcul
     * @return Indicateur
     */
    public function setModeCalcul(\Proc\IndicateurBundle\Entity\Mode_calcul $modeCalcul = null)
    {
        $this->modeCalcul = $modeCalcul;

        return $this;
    }

    /**
     * Get modeCalcul
     *
     * @return \Proc\IndicateurBundle\Entity\Mode_calcul 
     */
    public function getModeCalcul()
    {
        return $this->modeCalcul;
    }

    /**
     * Set subdivision
     *
     * @param \Proc\IndicateurBundle\Entity\Subdivision $subdivision
     * @return Indicateur
     */
    public function setSubdivision(\Proc\IndicateurBundle\Entity\Subdivision $subdivision = null)
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * Get subdivision
     *
     * @return \Proc\IndicateurBundle\Entity\Subdivision 
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * Set periodicite
     *
     * @param \Proc\IndicateurBundle\Entity\Periodicite $periodicite
     * @return Indicateur
     */
    public function setPeriodicite(\Proc\IndicateurBundle\Entity\Periodicite $periodicite = null)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return \Proc\IndicateurBundle\Entity\Periodicite 
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }

    /**
     * Set sousSecteur
     *
     * @param \Proc\IndicateurBundle\Entity\SousSecteur $sousSecteur
     * @return Indicateur
     */
    public function setSousSecteur(\Proc\IndicateurBundle\Entity\SousSecteur $sousSecteur = null)
    {
        $this->sousSecteur = $sousSecteur;

        return $this;
    }

    /**
     * Get sousSecteur
     *
     * @return \Proc\IndicateurBundle\Entity\SousSecteur 
     */
    public function getSousSecteur()
    {
        return $this->sousSecteur;
    }

    /**
     * Set activite
     *
     * @param \Proc\IndicateurBundle\Entity\Activite $activite
     * @return Indicateur
     */
    public function setActivite(\Proc\IndicateurBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Proc\IndicateurBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->types = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add types
     *
     * @param \Proc\IndicateurBundle\Entity\Type $types
     * @return Indicateur
     */
    public function addType(\Proc\IndicateurBundle\Entity\Type $types)
    {
        $this->types[] = $types;

        return $this;
    }

    /**
     * Remove types
     *
     * @param \Proc\IndicateurBundle\Entity\Type $types
     */
    public function removeType(\Proc\IndicateurBundle\Entity\Type $types)
    {
        $this->types->removeElement($types);
    }

    /**
     * Get types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }
}
