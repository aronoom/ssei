<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodicite
 *
 * @ORM\Table(name="periodicite")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\PeriodiciteRepository")
 */
class Periodicite
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
     * @ORM\Column(name="libellePeriodicite", type="string", length=64, unique=true)
     */
    private $libellePeriodicite;


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
     * Set libellePeriodicite
     *
     * @param string $libellePeriodicite
     * @return Periodicite
     */
    public function setLibellePeriodicite($libellePeriodicite)
    {
        $this->libellePeriodicite = $libellePeriodicite;

        return $this;
    }

    /**
     * Get libellePeriodicite
     *
     * @return string 
     */
    public function getLibellePeriodicite()
    {
        return $this->libellePeriodicite;
    }
}
