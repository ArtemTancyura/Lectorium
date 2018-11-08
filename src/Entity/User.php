<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @UniqueEntity("email")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     * @Assert\Email()
     */
    protected $email;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="5", maxMessage="Too much", minMessage="Not enough")
     * @ORM\Column(type="string", length=190)
     */
    protected $pass;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="3", maxMessage="Too much", minMessage="Not enough")
     * @ORM\Column(type="string", length=190)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="3", maxMessage="Too much", minMessage="Not enough")
     * @ORM\Column(type="string", length=190)
     */
    protected $lastName;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }


    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }


    /**
     * @param mixed $pass
     */
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
}