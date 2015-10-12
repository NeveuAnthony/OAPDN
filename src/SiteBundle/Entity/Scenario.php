<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scenario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Scenario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="choice1", type="integer")
     */
    private $choice1;

    /**
     * @var integer
     *
     * @ORM\Column(name="choice2", type="integer")
     */
    private $choice2;


    /**
     * Get id
     *
     * @return integer
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
     * @return Scenario
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
     * Set content
     *
     * @param string $content
     *
     * @return Scenario
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set choice1
     *
     * @param integer $choice1
     *
     * @return Scenario
     */
    public function setChoice1($choice1)
    {
        $this->choice1 = $choice1;

        return $this;
    }

    /**
     * Get choice1
     *
     * @return integer
     */
    public function getChoice1()
    {
        return $this->choice1;
    }

    /**
     * Set choice2
     *
     * @param integer $choice2
     *
     * @return Scenario
     */
    public function setChoice2($choice2)
    {
        $this->choice2 = $choice2;

        return $this;
    }

    /**
     * Get choice2
     *
     * @return integer
     */
    public function getChoice2()
    {
        return $this->choice2;
    }
}

