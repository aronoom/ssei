<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mode_calcul
 *
 * @ORM\Table(name="mode_calcul")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\Mode_calculRepository")
 */
class Mode_calcul
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
     * @ORM\Column(name="libelle_Mode_calcul", type="string", length=88, unique=true)
     */
    private $libelleModeCalcul;


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
     * Set libelleModeCalcul
     *
     * @param string $libelleModeCalcul
     * @return Mode_calcul
     */
    public function setLibelleModeCalcul($libelleModeCalcul)
    {
        $this->libelleModeCalcul = $libelleModeCalcul;

        return $this;
    }

    /**
     * Get libelleModeCalcul
     *
     * @return string 
     */
    public function getLibelleModeCalcul()
    {
        return $this->libelleModeCalcul;
    }
}
