<?php
namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Jms;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="CommonBundle\Repository\AuthorRepository")
 *
 * @package CommonBundle\Entity
 */
class Author
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Jms\Groups({"author"})
     * @Jms\Type("int")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="text", nullable=false)
     *
     * @Jms\Groups({"author"})
     * @Jms\Type("string")
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="text", nullable=false)
     *
     * @Jms\Groups({"author"})
     * @Jms\Type("string")
     */
    private $firstname;

    /**
     * @var <Author>
     *
     * @ORM\OneToMany(targetEntity="StoryBundle\Entity\Story", mappedBy="author")
     */
    private $stories;


    function __construct()
    {
        $this->authors = new ArrayCollection();
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
}
