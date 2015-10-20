<?php

namespace snowballBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * grid
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="snowballBundle\Entity\gridRepository")
 */
class grid
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
     * @var integer
     *
     * @ORM\Column(name="cols", type="integer")
     */
    private $cols;

    /**
     * @var integer
     *
     * @ORM\Column(name="raws", type="integer")
     */
    private $raws;


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
     * Set cols
     *
     * @param integer $cols
     *
     * @return grid
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    
        return $this;
    }

    /**
     * Get cols
     *
     * @return integer
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * Set raws
     *
     * @param integer $raws
     *
     * @return grid
     */
    public function setRaws($raws)
    {
        $this->raws = $raws;
    
        return $this;
    }

    /**
     * Get raws
     *
     * @return integer
     */
    public function getRaws()
    {
        return $this->raws;
    }
}

