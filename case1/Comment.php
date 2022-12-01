<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }


    public function getAuthor()
    {
        return $this->author;
    }
 
    public function setAuthor(User $author): self
    {
        $this->author = $author;

        return $this;
    }


    public function getTask():Task
    {
        return $this->task;
    }


    public function setTask(Task $task): self
    {
        $this->task = $task;

        return $this;
    }

   
    public function getText()
    {
        return $this->text;
    }

    
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }


}