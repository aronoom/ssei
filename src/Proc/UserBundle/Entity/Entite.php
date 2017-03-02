<?php

namespace Proc\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entite
 *
 * @ORM\Table(name="entite")
 * @ORM\Entity(repositoryClass="Proc\UserBundle\Repository\EntiteRepository")
 */
class Entite
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
     * @ORM\Column(name="codeEntite", type="string", length=32, unique=true)
     */
    private $codeEntite;

    

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
     * Set codeEntite
     *
     * @param string $codeEntite
     * @return Entite
     */
    public function setCodeEntite($codeEntite)
    {
        $this->codeEntite = $codeEntite;

        return $this;
    }

    /**
     * Get codeEntite
     *
     * @return string 
     */
    public function getCodeEntite()
    {
        return $this->codeEntite;
    }
}
