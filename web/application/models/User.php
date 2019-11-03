<?php

use Doctrine\ORM\Mapping as ORM;

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
}
