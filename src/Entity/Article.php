<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class Article
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false, length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true, length=1000)
     */
  
  private $text;
  
  /**
     * @var \Datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
  
  private $createdOn;
  
  /**
     * @var \Datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
  
  private $updatedOn;
  /**
     * @return mixed
     */

  
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
  
  
      public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
  
  
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param mixed $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

    }
  
      public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param mixed $createdOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }
  
}