<?php

class Task
{
    private string $description;
    private bool $isDone = false;


    public function __construct(string $description)
    {
        $this->description = $description;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription( $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function isDone(): bool
    {
        return $this->isDone;
    }


    public function setIsDone( $isDone): self
    {
        $this->isDone = $isDone;

        return $this;
    }




}