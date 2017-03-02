<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nature
 *
 * @ORM\Table(name="nature")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\NatureRepository")
 */
class Nature
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
     * @ORM\Column(name="libelleNature", type="string", length=22, unique=true)
     */
    private $libelleNature;


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
     * Set libelleNature
     *
     * @param string $libelleNature
     * @return Nature
     */
    public function setLibelleNature($libelleNature)
    {
        $this->libelleNature = $libelleNature;

        return $this;
    }

    /**
     * Get libelleNature
     *
     * @return string 
     */
    public function getLibelleNature()
    {
        return $this->libelleNature;
    }
}
