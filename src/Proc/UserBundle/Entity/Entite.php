<?php

namespace Proc\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\UniqueConstraint;
/**
 * Entite
 *
 * @ORM\Table(name="entite",uniqueConstraints={@ORM\UniqueConstraint(name="ID_ENTIE_GROUP", columns={"codeEntite","groupe_id"})})
 * @ORM\Entity(repositoryClass="Proc\UserBundle\Repository\EntiteRepository")
 * @UniqueEntity(fields={"codeEntite","groupe"})
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
     * @ORM\Column(name="codeEntite", type="string", length=32, unique=false)
     */
    private $codeEntite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\UserBundle\Entity\GroupUser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupe;

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
     * Set groupe
     *
     * @param \Proc\UserBundle\Entity\GroupUser $groupe
     * @return Entite
     */
    public function setGroupe(\Proc\UserBundle\Entity\GroupUser $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Proc\UserBundle\Entity\GroupUser 
     */
    public function getGroupe()
    {
        return $this->groupe;
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
