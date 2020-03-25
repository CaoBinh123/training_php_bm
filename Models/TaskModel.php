<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks", options={"collate"="utf8_unicode_ci"})
 */
class TaskModel
{
    /**
     * @ORM\Id
     * @ORM\Column(name ="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;
    /**
      * @ORM\Column(name="title", type="string", options={"collate"="utf8_unicode_ci"})
      */
    public $title;
    /**
     * @ORM\Column(name="description", type="string", options={"collate"="utf8_unicode_ci"})
     */
    public $description;
    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    public $created_at;
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    public $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
    
    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }
    
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
}
