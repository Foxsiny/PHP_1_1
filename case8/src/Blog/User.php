<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Name;

class User
{
   private int $id;
   private Name $userName;
   private string $login;
   /**
    * @param int $id
    * @param Name $userName
    * @param string $login
    */

   public function __construct(int $id, Name $userName, string $login)
   {
       $this->id = $id;
       $this->userName = $userName;
       $this->login = $login;
   }

    // public function __construct(    
    //     private int $id,
    //     private string $userName,
    //     private string $login
    // )
    // {

    // }

    public function __toString(): string
    {
        return "Юзер $this->id с именем $this->userName и логином $this->login" . PHP_EOL;
    }
    

   
   public function id(): int
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId(int $id): self
   {
      $this->id = $id;

      return $this;
   }

   
   public function getUserName(): string
   {
      return $this->userName;
   }

   /**
    * Set the value of userName
    *
    * @return  self
    */ 
   public function setUserName(Name $userName): self
   {
      $this->userName = $userName;

      return $this;
   }

    
    public function getLogin(): string
    {
          return $this->login;
    }

    /**
    * Set the value of login
    *
    * @return  self
    */ 
    public function setLogin(string $login): self
    {
          $this->login = $login;

          return $this;
    }
}