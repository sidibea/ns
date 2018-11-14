<?php

namespace NS\ScenesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

/**
 * Scene
 *
 * @ORM\Table(name="scene")
 * @ORM\Entity(repositoryClass="NS\ScenesBundle\Repository\SceneRepository")
 */
class Scene
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
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Storyline", inversedBy="scenes")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    private $storyline;

    /**
     * @Recaptcha\IsTrue
     */
    public $recaptcha;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;



    /**
     * One Storyline has Many scenes.
     * @ORM\OneToMany(targetEntity="ProposedScene", mappedBy="scene", cascade={"remove"})
     */
    private $proposedScenes;

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

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Set storyline.
     *
     * @param string $storyline
     *
     * @return Scene
     */
    public function setStoryline($storyline)
    {
        $this->storyline = $storyline;

        return $this;
    }

    /**
     * Get storyline.
     *
     * @return string
     */
    public function getStoryline()
    {
        return $this->storyline;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Scene
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Scene
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Scene
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set isEnabled.
     *
     * @param bool $isEnabled
     *
     * @return Scene
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled.
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @return mixed
     */
    public function getProposedScenes()
    {
        return $this->proposedScenes;
    }

    /**
     * @param mixed $proposedScenes
     */
    public function setProposedScenes($proposedScenes)
    {
        $this->proposedScenes = $proposedScenes;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }




}
