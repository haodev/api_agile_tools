<?php

namespace StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation as Jms;
use CommonBundle\Entity\Timestampable;
use CommonBundle\Entity\Author;

/**
 * Story
 *
 * @ORM\Table(name="story")
 * @ORM\Entity(repositoryClass="StoryBundle\Repository\StoryRepository")
 *
 */
class Story
{

    use Timestampable;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Jms\Groups({"story-get"})
     * @Jms\Accessor(getter="getSlug", setter="setSlug")
     * @Jms\Type("string")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     *
     * @Jms\Groups({"story-get"})
     * @Jms\Type("string")
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="complexity", type="integer")
     *
     * @Jms\Groups({"story-get"})
     * @Jms\Type("int")
     */
    private $complexity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     *
     * @Jms\Groups({"story-get"})
     * @Jms\Type("string")
     */
    private $description;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="CommonBundle\Entity\Author", inversedBy="stories")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     *
     * @Jms\Groups({"story-get"})
     */
    private $author;


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

    /**
     * Get authors
     *
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set Author
     *
     * @param Author $author
     *
     * @return Story
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;

        return $this;
    }
}
