<?php

require_once "User.php";
require_once "Comment.php";
require_once "Task.php";
require_once "TaskService.php";
 
// include "User.php";
// include "Comment.php";
// include "Task.php";
// include "TaskService.php";

$user = new User('Пользователь1', 'user1@mail.ru');
$task = new Task($user, 'Задача №1', 6);

//$task->setComment(new Comment($user, $task, 'Сделать поскорее'));

TaskService::addComment($user, $task, 'Сделать поскорее');
TaskService::addComment($user, $task, 'Второй коммент');

echo "Комментарии" . PHP_EOL;

foreach ($task->getComments() as $comment) {
    echo $comment->getText() . ", ";
    echo "имя задачи " . $comment->getTask()->getDescription() . PHP_EOL;
}
var_dump($task);