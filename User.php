<?php

class User {
    private string $userName, $email;
    private string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

//     function __construct(string $username, string $email)
//    {
//        $this->username = $username;
//        $this->email = $email;

//        $this->dateCreated = new DateTime(); // Текущие дата и время
//    }


    
    public function __construct(string $userName, string $email, string $sex, ?int $age = null,)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->sex = $sex;
        $this->age = $age;
        $this->dateCreated = new DateTime(); // Текущие дата и время
    }
 
    
    public function getAge():self
    {
     return $this->age;
    }
   
    public function setAge($age):self
    {
     $this->age = $age;
   
     return $this;
    }

   
    public function getUsername():self
    {
        return $this->userName;
    }

    
    public function setUsername($username):self
    {
        $this->username = $userName;

        return $this;
    }

    
    public function getEmail():self
    {
        return $this->email;
    }

    
    public function setEmail($email):self
    {
        $this->email = $email;

        return $this;
    }

    
    public function getSex():self
    {
        return $this->sex;
    }

    
    public function setSex($sex):self
    {
        $this->sex = $sex;

        return $this;
    }

    
    public function getIsActive():self
    {
        return $this->isActive;
    }

    
    
    public function setIsActive($isActive):self
    {
        $this->isActive = $isActive;

        return $this;
    }
    
    public function getDateCreated():self
    {
        return $this->dateCreated;
    }

    
    public function setDateCreated($dateCreated):self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }
}

    
    