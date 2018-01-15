<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_first_name", type="string", length=255)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_last_name", type="string", length=255)
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mail_address", type="string", length=255)
     */
    protected $mailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_phone_number", type="string", length=16)
     */
    protected $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_type", type="string", length=25)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_password", type="string", length=255)
     */
    protected $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="usr_is_business", type="boolean")
     */
    protected $isBusiness;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_siren_number", type="string", length=9, unique=true)
     */
    protected $sirenNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_siret_number", type="string", length=5, unique=true)
     */
    protected $siretNumber;


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
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set mailAddress.
     *
     * @param string $mailAddress
     *
     * @return User
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

    /**
     * Get mailAddress.
     *
     * @return string
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * Set phoneNumber.
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set password.
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
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isBusiness.
     *
     * @param bool $isBusiness
     *
     * @return User
     */
    public function setIsBusiness($isBusiness)
    {
        $this->isBusiness = $isBusiness;

        return $this;
    }

    /**
     * Get isBusiness.
     *
     * @return bool
     */
    public function getIsBusiness()
    {
        return $this->isBusiness;
    }

    /**
     * Set sirenNumber.
     *
     * @param string $sirenNumber
     *
     * @return User
     */
    public function setSirenNumber($sirenNumber)
    {
        $this->sirenNumber = $sirenNumber;

        return $this;
    }

    /**
     * Get sirenNumber.
     *
     * @return string
     */
    public function getSirenNumber()
    {
        return $this->sirenNumber;
    }

    /**
     * Set siretNumber.
     *
     * @param string $siretNumber
     *
     * @return User
     */
    public function setSiretNumber($siretNumber)
    {
        $this->siretNumber = $siretNumber;

        return $this;
    }

    /**
     * Get siretNumber.
     *
     * @return string
     */
    public function getSiretNumber()
    {
        return $this->siretNumber;
    }
}
