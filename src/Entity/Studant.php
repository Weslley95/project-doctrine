<?php

namespace Project\Doctrine\Entity;

/**
 * Map class with entity
 * Must be mapped in BD (information to doctrine)
 *
 * @Entity mao class
 * 
 */
class Studant {
    
    /**
     * @var $Id type
     * @GeneratedValue map class with entity
     * @Column(type ="integer") type value
     */
    private $id;
    
    /**
     * @Column(type = "string")
     */
    private $name;
    
    
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }


}
