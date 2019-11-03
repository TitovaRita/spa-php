<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends Model
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
   */
    public $id;
    /**
     * @ORM\Column(type="string")
     */
    public $first_name;
    /**
     * @ORM\Column(type="string")
     */
    public $last_name;
    /**
     * @ORM\Column(type="string")
     */
    public $email;
    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
     */
    private $posts;

    public function getPosts()
    {
        return $this->posts;
    }

    public function full_info()
    {
        $first_name = $this->first_name;
        $last_name = $this->last_name;
        return "$first_name $last_name";
    }
}
