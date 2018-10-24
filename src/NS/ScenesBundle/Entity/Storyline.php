<?php

namespace NS\ScenesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use NS\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Storyline
 *
 * @ORM\Table(name="storyline")
 * @Vich\Uploadable

 * @ORM\Entity(repositoryClass="NS\ScenesBundle\Repository\StorylineRepository")
 */
class Storyline
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="NS\UserBundle\Entity\User")
     */
    private $publishedBy;

    /**
     * Many Features have One Product.
     * @ORM\ManyToMany(targetEntity="NS\UserBundle\Entity\User")
     */
    private $contributors;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="NS\ForumBundle\Entity\Forum", inversedBy="storylines")
     * @ORM\JoinColumn(name="forum_id", referencedColumnName="id")
     */
    private $forum;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="image", nullable=true, type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="book_cover", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * One Storyline has Many scenes.
     * @ORM\OneToMany(targetEntity="Scene", mappedBy="storyline")
     */
    private $scenes;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    public function __construct()
    {
        $this->contributors = new ArrayCollection();
        $this->scenes = new ArrayCollection();
    }


    public function addScene(Scene $scene)
    {
        $this->scenes[] = $scene;

        return $this;
    }

    public function removeScene(Scene $scene)
    {
        $this->scenes->removeElement($scene);

    }

    // Notez le singulier, on ajoute une seule catégorie à la fois
    public function addContributor(User $contributor)
    {
        // Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->contributors[] = $contributor;

        return $this;
    }

    public function removeContributor(User $contributor)
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->contributors->removeElement($contributor);
    }

    // Notez le pluriel, on récupère une liste de catégories ici !
    public function getContributors()
    {
        return $this->contributors;
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
     * Set title.
     *
     * @param string $title
     *
     * @return Storyline
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * @param mixed $forum
     */
    public function setForum($forum)
    {
        $this->forum = $forum;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }





    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Storyline
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Storyline
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set scenes.
     *
     * @param string $scenes
     *
     * @return Storyline
     */
    public function setScenes($scenes)
    {
        $this->scenes = $scenes;

        return $this;
    }

    /**
     * Get scenes.
     *
     * @return string
     */
    public function getScenes()
    {
        return $this->scenes;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
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
     * @return bool
     */
    public function isEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    /**
     * @return mixed
     */
    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    /**
     * @param mixed $publishedBy
     */
    public function setPublishedBy($publishedBy)
    {
        $this->publishedBy = $publishedBy;
    }






}
