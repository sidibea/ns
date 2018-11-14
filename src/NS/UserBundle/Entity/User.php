<?php

namespace NS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="NS\UserBundle\Repository\UserRepository")
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
     * @ORM\Column(name="firstname", nullable=true, type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", nullable=true, length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="biographie", type="string", nullable=true, length=255)
     */
    private $biographie;

    /**
     * One Storyline has Many scenes.
     * @ORM\OneToMany(targetEntity="NS\ScenesBundle\Entity\Storyline", mappedBy="contributors", cascade={"remove"})
     */
    private $storylines;



    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", nullable=true, length=255)
     */
    private $profile;

    /**
     * @Vich\UploadableField(mapping="profile_picture", fileNameProperty="profile")
     * @var File
     */
    private $profileFile;

    /**
     * @Recaptcha\IsTrue
     */
    public $recaptcha;

    /**
     * @var date
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", nullable=true, type="datetime")
     */
    private $updatedAt;





    public function __construct()
    {
        parent::__construct();
        $this->created_at = new \Datetime;

    }


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
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setProfileFile(File $image = null)
    {
        $this->profileFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getProfileFile()
    {
        return $this->profileFile;
    }

    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * @param string $biographie
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * @return string
     */
    public function getRecaptcha()
    {
        return $this->recaptcha;
    }

    /**
     * @param string $recaptcha
     */
    public function setRecaptcha($recaptcha)
    {
        $this->recaptcha = $recaptcha;
    }

    /**
     * @return mixed
     */
    public function getStorylines()
    {
        return $this->storylines;
    }

    /**
     * @param mixed $storylines
     */
    public function setStorylines($storylines)
    {
        $this->storylines = $storylines;
    }











}
