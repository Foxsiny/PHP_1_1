<?php

namespace GeekBrains\LevelTwo\Person;

class Name
{
   private string $firstName;
   private string $lastName;
   /**
    * @param string $firstName
    * @param string $lastName
    */

   public function __construct(string $firstName, string $lastName)
   {
       $this->firstName = $firstName;
       $this->lastName = $lastName;
   }

   public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

   /**
    * Get the value of firstName
    */ 
   public function first(): string
   {
      return $this->firstName;
   }

   /**
    * Set the value of firstName
    *
    * @return  self
    */ 
   public function setFirstName(string $firstName): self
   {
      $this->firstName = $firstName;

      return $this;
   }

   /**
    * Get the value of lastName
    */ 
   public function last(): string
   {
      return $this->lastName;
   }

   /**
    * Set the value of lastName
    *
    * @return  self
    */ 
   public function setLastName(srting $lastName): self
   {
      $this->lastName = $lastName;

      return $this;
   }
}
