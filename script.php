<?php

$name = readline("Здравствуйте, как вас зовут?\n");
$age = readline("Сколько вам лет?\n");
echo("Вас зовут $name, вам $age лет\n");

$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask1 = readline("Сколько примерно времени эта задача займет?\n");
$task2 = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask2 = readline("Сколько примерно времени эта задача займет?\n");
$task3 = readline("Какая задача стоит перед вами сегодня?\n");
$timeTask3 = readline("Сколько примерно времени эта задача займет?\n");
$sum = $timeTask1 + $timeTask2 + $timeTask3;
echo("$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n-$task1 ($timeTask1 ч)\n-$task2 ($timeTask2 ч)\n-$task3 ($timeTask3 ч)\nПримерное время выполнения плана = $sum ч\n");