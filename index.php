<?php

//declare(strict_types = 1);

require_once "User.php";

$user = new User('Ivanov Ivan','ivan@mail.ru','male', 20, );


$user
    // ->setUserName('Ivanov Ivan')
    // ->setEmail(email:'ivan@mail.ru')
    // ->setSex(sex:'male')
    //->setAge(age:20)
    ->setIsActive(isActive:true);
    
    var_dump($user);
    