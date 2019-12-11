<?php

namespace EntradaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessToken
 *
 * @ORM\Table(name="access_token")
 * @ORM\Entity(repositoryClass="EntradaBundle\Repository\AccessTokenRepository")
 */
class AccessToken
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
     * @var int
     *
     * @ORM\Column(name="client_�id", type="integer")
     * @ORM\ManyToOne(targetEntity="Client",inversedBy="id")
     */
    private $client�id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToOne(targetEntity="LoginBundle\Entity\User",inversedBy="id")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255)
     */
    private $scope;

    /**
     * @var int
     *
     * @ORM\Column(name="expires_at", type="integer")
     */
    private $expiresAt;


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
     * Set client�id.
     *
     * @param int $client�id
     *
     * @return AccessToken
     */
    public function setClient�id($client�id)
    {
        $this->client�id = $client�id;

        return $this;
    }

    /**
     * Get client�id.
     *
     * @return int
     */
    public function getClient�id()
    {
        return $this->client�id;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return AccessToken
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set token.
     *
     * @param string $token
     *
     * @return AccessToken
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set alcance.
     *
     * @param string $scope
     *
     * @return AccessToken
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set expiresAt.
     *
     * @param int $expiresAt
     *
     * @return AccessToken
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Get expiresAt.
     *
     * @return int
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }
}
