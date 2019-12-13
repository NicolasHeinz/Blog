<?php

namespace LoginBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * users
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="LoginBundle\Repository\usersRepository")
 *
 */
class User implements UserInterface
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Assert\Valid
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="EntradaBundle\Entity\Entrada",mappedBy="user_id")
     */
    private $entradas;

    public function __construct()
    {
        $this->entradas = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     *
     * @Assert\NotBlank
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     *
     * @Assert\NotBlank
     *
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     *
     * @Assert\NotBlank
     *
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     *
     * @Assert\NotBlank
     *
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="date")
     *
     * @Assert\NotBlank
     */
    private $createdDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=255, options={"default":"Usuario"})
     */
    private $rol=["Usuario","Administrador"];


    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", nullable=true)
     *
     */
    private $notes;

    /**
     * @ORM\Column(name="user_account_id", type="string", length=255)
     *
     * @Assert\NotBlank
     */
    private $userAccountId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return User
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return User
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Add entrada.
     *
     * @param \EntradaBundle\Entity\Entrada $entrada
     *
     * @return User
     */
    public function addEntrada(\EntradaBundle\Entity\Entrada $entrada)
    {
        $this->entradas[] = $entrada;

        return $this;
    }

    /**
     * Remove entrada.
     *
     * @param \EntradaBundle\Entity\Entrada $entrada
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEntrada(\EntradaBundle\Entity\Entrada $entrada)
    {
        return $this->entradas->removeElement($entrada);
    }

    /**
     * Get entradas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntradas()
    {
        return $this->entradas;
    }

    /**
     * Set notes.
     *
     * @param string|null $notes
     *
     * @return User
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set userAccountId.
     *
     * @param string $userAccountId
     *
     * @return User
     */
    public function setUserAccountId($userAccountId)
    {
        $this->userAccountId = $userAccountId;

        return $this;
    }

    /**
     * Get userAccountId.
     *
     * @return string
     */
    public function getUserAccountId()
    {
        return $this->userAccountId;
    }
}
