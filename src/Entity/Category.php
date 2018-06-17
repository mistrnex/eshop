<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
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
  
  private $description;
  

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
  
  
      public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $text
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
 
  
}