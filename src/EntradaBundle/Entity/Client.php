<?php

namespace EntradaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="EntradaBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="random_id", type="string", length=255)
     */
    private $randomId;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_urls", type="string", length=255)
     */
    private $redirectUrls;

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_grant_types", type="string", length=255)
     */
    private $allowedGrantTypes;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set randomId.
     *
     * @param string $randomId
     *
     * @return Client
     */
    public function setRandomId($randomId)
    {
        $this->randomId = $randomId;

        return $this;
    }

    /**
     * Get randomId.
     *
     * @return string
     */
    public function getRandomId()
    {
        return $this->randomId;
    }

    /**
     * Set secret.
     *
     * @param string $secret
     *
     * @return Client
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret.
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set redirectUrls.
     *
     * @param string $redirectUrls
     *
     * @return Client
     */
    public function setRedirectUrls($redirectUrls)
    {
        $this->redirectUrls = $redirectUrls;

        return $this;
    }

    /**
     * Get redirectUrls.
     *
     * @return string
     */
    public function getRedirectUrls()
    {
        return $this->redirectUrls;
    }

    /**
     * Set allowedGrantTypes.
     *
     * @param string $allowedGrantTypes
     *
     * @return Client
     */
    public function setAllowedGrantTypes($allowedGrantTypes)
    {
        $this->allowedGrantTypes = $allowedGrantTypes;

        return $this;
    }

    /**
     * Get allowedGrantTypes.
     *
     * @return string
     */
    public function getAllowedGrantTypes()
    {
        return $this->allowedGrantTypes;
    }
}
