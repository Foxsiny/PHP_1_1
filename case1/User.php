<?php

class User {
    private string $userName, $email;

    public function __construct(string $userName, string $email)
    {
        $this->userName = $userName;
        $this->email = $email;
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
}
    
    