<?php
// src/Acme/BlogBundle/Entity/Author.php

namespace Acme\BlogBundle\Entity;

//use Symfony\Component\Validator\Constraints as Assert;

class Author
{
//     //For example, to guarantee that the $name property is not empty
//     /**
//      * @Assert\NotBlank()
//      */
    public $name;
    
    public function isPasswordLegal()
    {
        return ($this->firstName != $this->password);
    }
}