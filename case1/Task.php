<?php

class Task{
    private string $description;
    private DateTime $dateCreated, $dateUpdated, $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private Array $comments = [];

    public function __construct(User $user, string $description, int $priority = 1)
    {
        $this->user=$user;
        $this->description=$description;
        $this->priority=$priority;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone():self
    {
        $this->setDateUpdate(new DateTime);
        $this->setDateDone(new Dataeime);
        $this->setIsDone();

        return $this;
    }

    
    public function getDescription():string
    {
        return $this->description;
    }

    
    public function setDescription($description):self
    {
        $this->setDateUpdated(new DateTime);
        $this->description = $description;

        return $this;
    }

    
    public function getDateCreated():DateTime
    {
        return $this->dateCreated;
    }

    
    public function setDateCreated($dateCreated):self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

     
    public function getDateUpdated():DateTime
    {
        return $this->dateUpdated;
    }

    
    public function setDateUpdated($dateUpdated):self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    
    public function getDateDone():DateTime
    {
        return $this->dateDone;
    }

     
    public function setDateDone($dateDone):self
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    
    public function getPriority():int
    {
        return $this->priority;
    }

    
    public function setPriority($priority):int
    {
        $this->priority = $priority;

        return $this;
    }

     
    public function getIsDone():bool
    {
        return $this->isDone;
    }

    
    private function setIsDone($isDone):self
    {
        $this->isDone = true;

        return $this;
    }

     
    public function getUser():User
    {
        return $this->user;
    }

    
    public function setUser(User $user):self
    {
        $this->user = $user;

        return $this;
    }

    
    public function getComments(): array
    {
        return $this->comments;
    }

    
    public function setComment(Comment $comment):self
    {
        $this->comments[] = $comment;

        return $this;
    }
}