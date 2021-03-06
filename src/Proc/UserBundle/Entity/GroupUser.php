<?php

namespace Proc\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupUser
 *
 * @ORM\Table(name="group_user")
 * @ORM\Entity(repositoryClass="Proc\UserBundle\Repository\GroupUserRepository")
 */
class GroupUser
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
     * @ORM\Column(name="codeGroupUser", type="string", length=12, unique=true)
     */
    private $codeGroupUser;

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
     * Set codeGroupUser
     *
     * @param string $codeGroupUser
     * @return GroupUser
     */
    public function setCodeGroupUser($codeGroupUser)
    {
        $this->codeGroupUser = $codeGroupUser;

        return $this;
    }

    /**
     * Get codeGroupUser
     *
     * @return string 
     */
    public function getCodeGroupUser()
    {
        return $this->codeGroupUser;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
