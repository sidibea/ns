<?php

namespace NS\ScenesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scene
 *
 * @ORM\Table(name="proposed_scene")
 * @ORM\Entity(repositoryClass="NS\ScenesBundle\Repository\ProposedSceneRepository")
 */
class ProposedScene
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
     * @ORM\ManyToOne(targetEntity="Scene", inversedBy="proposedScenes")
     * @ORM\JoinColumn(name="proposed_scene_id", referencedColumnName="id")
     */
    private $scene;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="NS\UserBundle\Entity\User")
     */
    private $publishedBy;



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
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;



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



    /**
     * @return mixed
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * @param mixed $scene
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
    }



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


    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }


    public function getIsEnabled()
    {
        return $this->isEnabled;
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
