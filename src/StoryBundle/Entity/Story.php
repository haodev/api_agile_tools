<?php

namespace StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation as Jms;

/**
 * Story
 *
 * @ORM\Table(name="story")
 * @ORM\Entity(repositoryClass="StoryBundle\Repository\StoryRepository")
 *
 * @Jms\ExclusionPolicy("none")
 */
class Story
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Jms\Type("int")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="complexity", type="integer")
     */
    private $complexity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createAt;

    /**
     * @var string
     * 
     * @ORM\Column(name="slug", type="text")
     * @Gedmo\Slug(fields={"id"}, prefix="story-")
     */
    private $slug;


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
     * Set title
     *
     * @param string $title
     *
     * @return Story
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Story
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Story
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }
 
    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Get complexity
     *
     * @return int
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * Set complexity
     *
     * @param int $complexity
     *
     * @return Story
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Story
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }
}
