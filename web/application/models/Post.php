<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post extends Model
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
   */
    public $id;
    /**
     * @ORM\Column(type="string")
     */
    public $header;
    /**
     * @ORM\Column(type="string")
     */
    public $body;
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function getUser() {
        return $this->user;
    }
}
