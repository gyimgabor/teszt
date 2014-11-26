<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity
 */
class Data
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_a", type="datetime")
     */
    private $date_a;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_b", type="datetime")
     */
    private $date_b;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Data
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Data
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set date_a
     *
     * @param \DateTime $dateA
     * @return Data
     */
    public function setDateA($dateA)
    {
        $this->date_a = $dateA;

        return $this;
    }

    /**
     * Get date_a
     *
     * @return \DateTime 
     */
    public function getDateA()
    {
        return $this->date_a;
    }

    /**
     * Set date_b
     *
     * @param \DateTime $dateB
     * @return Data
     */
    public function setDateB($dateB)
    {
        $this->date_b = $dateB;

        return $this;
    }

    /**
     * Get date_b
     *
     * @return \DateTime 
     */
    public function getDateB()
    {
        return $this->date_b;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
