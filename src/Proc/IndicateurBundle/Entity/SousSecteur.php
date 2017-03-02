<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousSecteur
 *
 * @ORM\Table(name="sous_secteur")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\SousSecteurRepository")
 */
class SousSecteur
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
     * @ORM\Column(name="libelleSousSecteur", type="string", length=64, unique=true)
     */
    private $libelleSousSecteur;


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
     * Set libelleSousSecteur
     *
     * @param string $libelleSousSecteur
     * @return SousSecteur
     */
    public function setLibelleSousSecteur($libelleSousSecteur)
    {
        $this->libelleSousSecteur = $libelleSousSecteur;

        return $this;
    }

    /**
     * Get libelleSousSecteur
     *
     * @return string 
     */
    public function getLibelleSousSecteur()
    {
        return $this->libelleSousSecteur;
    }
}
