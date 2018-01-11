<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="usr_first_name", type="string", length=255)
     */
    private $usrFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_last_name", type="string", length=255)
     */
    private $usrLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mail_address", type="string", length=255)
     */
    private $usrMailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_phone_number", type="string", length=16)
     */
    private $usrPhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_type", type="string", length=25)
     */
    private $usrType;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_password", type="string", length=255)
     */
    private $usrPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="usr_is_business", type="boolean")
     */
    private $usrIsBusiness;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_siren_number", type="string", length=9, unique=true)
     */
    private $usrSirenNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_siret_number", type="string", length=5, unique=true)
     */
    private $usrSiretNumber;


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
     * Set usrFirstName.
     *
     * @param string $usrFirstName
     *
     * @return User
     */
    public function setUsrFirstName($usrFirstName)
    {
        $this->usrFirstName = $usrFirstName;

        return $this;
    }

    /**
     * Get usrFirstName.
     *
     * @return string
     */
    public function getUsrFirstName()
    {
        return $this->usrFirstName;
    }

    /**
     * Set usrLastName.
     *
     * @param string $usrLastName
     *
     * @return User
     */
    public function setUsrLastName($usrLastName)
    {
        $this->usrLastName = $usrLastName;

        return $this;
    }

    /**
     * Get usrLastName.
     *
     * @return string
     */
    public function getUsrLastName()
    {
        return $this->usrLastName;
    }

    /**
     * Set usrMailAddress.
     *
     * @param string $usrMailAddress
     *
     * @return User
     */
    public function setUsrMailAddress($usrMailAddress)
    {
        $this->usrMailAddress = $usrMailAddress;

        return $this;
    }

    /**
     * Get usrMailAddress.
     *
     * @return string
     */
    public function getUsrMailAddress()
    {
        return $this->usrMailAddress;
    }

    /**
     * Set usrPhoneNumber.
     *
     * @param string $usrPhoneNumber
     *
     * @return User
     */
    public function setUsrPhoneNumber($usrPhoneNumber)
    {
        $this->usrPhoneNumber = $usrPhoneNumber;

        return $this;
    }

    /**
     * Get usrPhoneNumber.
     *
     * @return string
     */
    public function getUsrPhoneNumber()
    {
        return $this->usrPhoneNumber;
    }

    /**
     * Set usrType.
     *
     * @param string $usrType
     *
     * @return User
     */
    public function setUsrType($usrType)
    {
        $this->usrType = $usrType;

        return $this;
    }

    /**
     * Get usrType.
     *
     * @return string
     */
    public function getUsrType()
    {
        return $this->usrType;
    }

    /**
     * Set usrPassword.
     *
     * @param string $usrPassword
     *
     * @return User
     */
    public function setUsrPassword($usrPassword)
    {
        $this->usrPassword = $usrPassword;

        return $this;
    }

    /**
     * Get usrPassword.
     *
     * @return string
     */
    public function getUsrPassword()
    {
        return $this->usrPassword;
    }

    /**
     * Set usrIsBusiness.
     *
     * @param bool $usrIsBusiness
     *
     * @return User
     */
    public function setUsrIsBusiness($usrIsBusiness)
    {
        $this->usrIsBusiness = $usrIsBusiness;

        return $this;
    }

    /**
     * Get usrIsBusiness.
     *
     * @return bool
     */
    public function getUsrIsBusiness()
    {
        return $this->usrIsBusiness;
    }

    /**
     * Set usrSirenNumber.
     *
     * @param string $usrSirenNumber
     *
     * @return User
     */
    public function setUsrSirenNumber($usrSirenNumber)
    {
        $this->usrSirenNumber = $usrSirenNumber;

        return $this;
    }

    /**
     * Get usrSirenNumber.
     *
     * @return string
     */
    public function getUsrSirenNumber()
    {
        return $this->usrSirenNumber;
    }

    /**
     * Set usrSiretNumber.
     *
     * @param string $usrSiretNumber
     *
     * @return User
     */
    public function setUsrSiretNumber($usrSiretNumber)
    {
        $this->usrSiretNumber = $usrSiretNumber;

        return $this;
    }

    /**
     * Get usrSiretNumber.
     *
     * @return string
     */
    public function getUsrSiretNumber()
    {
        return $this->usrSiretNumber;
    }
}
