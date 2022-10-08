<?php

class TaskService
{
    //public static $static = 'TaskService';
    public static function addComment(User $author, Task $task, $text)
    {
        $task->setComment(new Comment($author, $task, $text));
        
    }
}