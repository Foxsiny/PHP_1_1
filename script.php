<?php




// $name = readline("Здравствуйте, как вас зовут?\n");
// $age = readline("Сколько вам лет?\n");
// echo("Вас зовут $name, вам $age лет\n");



// $task1 = readline("Какая задача стоит перед вами сегодня?\n");
// $timeTask1 = readline("Сколько примерно времени эта задача займет?\n");
// $task2 = readline("Какая задача стоит перед вами сегодня?\n");
// $timeTask2 = readline("Сколько примерно времени эта задача займет?\n");
// $task3 = readline("Какая задача стоит перед вами сегодня?\n");
// $timeTask3 = readline("Сколько примерно времени эта задача займет?\n");
// $sum = $timeTask1 + $timeTask2 + $timeTask3;
// echo("$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n-$task1 ($timeTask1 ч)\n-$task2 ($timeTask2 ч)\n-$task3 ($timeTask3 ч)\nПримерное время выполнения плана = $sum ч\n");




// $time = (int)readline("В каком году был основан Санкт-Петербург?\n1307 году\n1037 году\n1703 году\n");
// if ($time != 1307 && $time != 1037 && $time != 1703){
//     $time = (int)readline("В каком году был основан Санкт-Петербург?\n1307 году\n1037 году\n1703 году\n");
// } elseif ($time == 1307 || $time == 1037) {
//     echo("Ответ неверный\n");
// } else {
//     echo("Ответ верный. Поздравляем!\n");
// }


// $time = (int)readline("В каком году был основан Санкт-Петербург?\n1307 году\n1037 году\n1703 году\n");
// switch (true) {
//     case $time == 1703:
//         echo("Ответ верный. Поздравляем!\n");
//         break;
//     case $time == 1307 || $time == 1037:
//         echo("Ответ неверный\n");
//         break;
//     default:
//         $time = (int)readline("В каком году был основан Санкт-Петербург?\n1307 году\n1037 году\n1703 году\n");
// }




// $name = readline("Здравствуйте, как вас зовут?\n");
// $age = readline("Сколько вам лет?\n");
// echo("Вас зовут $name, вам $age лет\n");

// $amountTasks = (int)readline("Сколько задач вы запланировали на сегодня?\n");
// echo("$name, сегодня у вас запланировано $amountTasks приоритетных задачи на день:\n");
// $amountTime = 0;
// $taskList = '';
// for ($counter = 0; $counter < $amountTasks; $counter++){
//     $task[$counter] = readline("Какая задача стоит перед вами сегодня?\n");
//     $timeTask[$counter] = (int)readline("Сколько примерно времени эта задача займет?\n");
    
//     $amountTime += $timeTask[$counter];
//     $taskList .= "$task[$counter] " . "$timeTask[$counter]ч\n";
// }
// echo("$name, сегодня у вас запланировано $amountTasks приоритетных задачи на день:\n$taskList\n");
// echo("Выполнение задачь потребует\t$amountTime ч\n");


// $number = readline("Введите число и узнайте на какой палец оно выпадет по счету\n");
// switch (true) {
//         case $number % 8 == 1 || $number == 1:
//             echo("$number по счету выпадает на большой палец\n");
//             break;
//         case $number % 8 == 2 || $number % 8 == 0 || $number == 2:
//             echo("$number по счету выпадает на указательный палец\n");
//             break;
//         case $number % 8 == 3 || $number % 8 == 7 || $number == 3 || $number == 7:
//             echo("$number по счету выпадает на средний палец\n");
//             break;
//         case $number % 8 == 4 || $number % 8 == 6 || $number == 4 || $number == 6:
//             echo("$number по счету выпадает на безимянный палец\n");
//             break;
//         case $number % 8 == 5 || $number == 5:
//             echo("$number по счету выпадает на мизинец\n");
//             break;
//         default:
//         $number = readline("Введите число и узнайте на какой палец оно выпадет по счету\n");
//     }


// $directCountArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $reversCountArray = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
// for ($index=0; $index<count($directCountArray); $index++){
//     $resultArray[] = $directCountArray[$index] * $reversCountArray[$index];
// }
// print_r($resultArray);

// $person = (string)readline("Кого бы вы хотели поздравить с днем рождения? Введите имя\n");
// echo("$person, поздравляю с днем рождения!\n");


// $wishesArray = ["счастья", "здоровья", "вдохновения"];
// $epithetsArray = ["неземного", "всеобъемлющего", "вечного"];
// $completeWishesArrey = [];
// while (count($wishesArray) > 0||count($wishesArray) > 0){
//     $currentWisheIndex = array_rand($wishesArray);
//     $currentEpithetIndex = array_rand($epithetsArray);
//     $completeWishe = $epithetsArray[$currentEpithetIndex] . " " . $wishesArray[$currentWisheIndex];
//     $completeWishesArrey [] = $completeWishe;
//     unset($wishesArray[$currentWisheIndex]);
//     unset($epithetsArray[$currentEpithetIndex]);
// }
// $stringCompleteWishes = implode(', ', $completeWishesArrey);
// echo"Дорогой(ая) $person, поздравляю с днем рождения! Желаю $stringCompleteWishes!";



// $students = [
//     'ИТ20' => [
//         'Иванов Иван' => 5,
//         'Кириллов Кирилл' => 3,
//         'Мирошина Любовь' => 2,
//         'Кондрашева Ксения' => 5,
//         'Красильников Юрий' => 2,
//         'Комаров Владимир' => 5,
//         'Тимофеева Татьяна' => 5

//     ],
//     'БАП20' => [
//         'Антонов Антон' => 4,
//         'Анисимова Таисия' => 5,
//         'Сидоренкова Наталия' => 2,
//         'Олетин Леонид' => 4,
//         'Калинина Анна' => 3,
//         'Поддубная Оксана' => 2,
//         'Софьянов Вячеслав' => 2
//     ]
//  ];
//     $averageMarkForGroup = [];
// foreach ($students as $group => $studentList){
//      $averageMark = array_sum($studentList)/count($studentList);
//      $averageMarkForGroup[$group] = $averageMark;
//  }
//  print_r($averageMarkForGroup);
//      $last = null;
//      $max = null;
// foreach ($averageMarkForGroup as $group => $averageMark){
//         if ($averageMark > $last){
//             $last = $averageMark;
//             $max = $group;
//         }
//     }
//  echo "$max - группа с наибольшим значением успеваемости студентов \n";

// $studentForExpulsion = [];
// $studentsForExpulsionList = [];
//  foreach ($students as $group => $studentList){
//      foreach ($studentList as $studentName => $mark){
//          if($mark < 3){
//                 $studentsForExpulsionList[] = $studentName;
//          }
//          $studentForExpulsion[$group] = $studentsForExpulsionList;
//      }
//  }
//  print_r($studentForExpulsion);







// $numbers = [4, 5, 1, 4, 7, 6, 8, 15, 6, 71, 45, 2];
// $result = array_map(function (int $number): string {
//     if($number % 2 == 0){
//         $number = "четное";
//     } else {
//         $number = "нечетное";
//     }
//     return $number;
//   }, $numbers); 
  
//   print_r($result);

//   $evenOdd = fn($n) => ($n & 1)? 'нечетное' : 'четное';
//   $arr = [4, 5, 1, 4, 7, 6, 8, 15, 6, 71, 45, 2];
//   $arr2 = array_map($evenOdd, $arr);
//   print_r($arr2);

// $numbers = [4, 5, 1, 4, 7, 6, 8, 15, 6, 71, 45, 2];
// $stringEvenOddCheck = function (int $number): string {
//     return $number & 1 ? 'нечетное' : 'четное';
// };
    
// $result = array_map($stringEvenOddCheck, $numbers);
// print_r($result);






// $arr1 = [1,2,3,4,5,6,7,8];
// $dataAnalysis = function(array $numbers): array{
//     return [
//         'max' => max($numbers),
//         'min' => min($numbers),
//         'avg' => array_sum($numbers)/count($numbers),
//     ];
// };

// print_r($dataAnalysis($arr1));




// $box = [
//     [
//         0 => 'Тетрадь',
//         1 => 'Книга',
//         2 => 'Настольная игра',
//         3 => [
//             'Настольная игра',
//             'Настольная игра',
//         ],
//         4 => [
//             [
//                 'Ноутбук',
//                 'Зарядное устройство'
//             ],
//             [
//                 'Компьютерная мышь',
//                 'Набор проводов',
//                 [
//                     'Фотография',
//                     'Картина'
//                 ]
//             ],
//             [
//                 'Инструкция',
//                 [
//                     'Ключ'
//                 ]
//             ]
//         ]
//     ],
//     [
//         0 => 'Пакет кошачьего корма',
//         1 => [
//             'Музыкальный плеер',
//             'Книга'
//         ]
//     ]
//  ];
 
// $text = (string) readline("Введите предмет:");

// function search(string $searchThing, array $searchArray):bool
// {
//     foreach($searchArray as $value){
//         if(is_array($value)){
//             if(search($searchThing, $value)){
//                 return true;
//             }
//         }else{
//             if($searchThing === $value){
//                 return true;
//             }
//         }
//     }
//     return false;
// }
// echo search($text, $box)?'true':'false';



$user = [
    'username' => 'i.ivanov',
    'email' => 'example@domain.ru',
    'sex' => 'male',
    'age' => 25,
    'is_active' => true
 ];
 
 
