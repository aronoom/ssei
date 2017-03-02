<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\ActiviteRepository")
 */
class Activite
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
     * @ORM\Column(name="libelleActivite", type="string", length=76, unique=true)
     */
    private $libelleActivite;
    
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
     * Set libelleActivite
     *
     * @param string $libelleActivite
     * @return Activite
     */
    public function setLibelleActivite($libelleActivite)
    {
        $this->libelleActivite = $libelleActivite;

        return $this;
    }

    /**
     * Get libelleActivite
     *
     * @return string 
     */
    public function getLibelleActivite()
    {
        return $this->libelleActivite;
    }
}
