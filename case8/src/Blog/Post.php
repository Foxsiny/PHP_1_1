<?php

namespace GeekBrains\LevelTwo\Blog;


class Post
{
    private int $id;
    private User $user;
    private string $text;
    
 
    public function __construct(
        int $id,
        User $user,
        string $text)
    {
        $this->id = $id;
        $this->text = $text;
        $this->user = $user;
    }
 
    public function __toString(): string
     {
         return $this->user . ' пишет: ' . $this->text . PHP_EOL;
     }  

    /**
     * Get the value of id
     */ 
    public function id(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of text
     */ 
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText(string $text): Post
    {
        $this->text = $text;

        return $this;
    }

    // public function __toString()
    // {
    //     return $this->autor . 'пишет: ' . $this . PHP_EOL;
    // }
}