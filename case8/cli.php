<?php

use GeekBrains\LevelTwo\Blog\User;
use GeekBrains\LevelTwo\Person\{Name, Person};
use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Blog\Repositories\InMemoryUserRepository;
use GeekBrains\LevelTwo\Blog\Exceptions\UserNotFoundException;
use GeekBrains\LevelTwo\Blog\Comment;

include __DIR__ . "/vendor/autoload.php";

//require_once __DIR__ . '/vendor/autoload.php';
//spl_autoload_register('load');

// function load($className)
// {
//     var_dump($className);
//     $file = $className . ".php";
//     $file = str_replace("\\", "/", $file);
//     $file = str_replace("GeekBrains/LevelTwo/", "src/", $file);
//     if (file_exists($file)) {
//         include $file;
//     }
//     var_dump($file);
// }




$faker = Faker\Factory::create('ru_RU');
$name = new Name(
    $faker->firstName('female'),
    $faker->lastName('female')
);
$user = new User(
    $faker->randomDigitNotNull(),
    $name,
    $faker->sentence(1)
);


// echo $faker->name() . PHP_EOL;
// echo $faker->realText(rand(100, 200)) . PHP_EOL;
$route = $argv[1] ?? null;
switch ($argv[1]){
    case "user":
        echo $user;
        break;
    case "post":
        $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->realText(rand(50, 100))
        );
        echo $post;
        break;
    case "comment":
        $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->realText(rand(50, 100))
        );
        $comment = new Comment(
            $faker->randomDigitNotNull(),
            $user,
            $post,
            $faker->realText(rand(50, 100))
        );
        echo $comment;
        break;
    default:
        echo "error try user post comment parametr";
}



// $post = new Post(
//     1,
//     // new Person(
//     //     new Name('Иван', 'Никитин'),
//     //     new DateTimeImmutable()
//     // ),
//     $user,
//     'Всем привет!'
// );
// echo $post;




// $userRepository = new InMemoryUserRepository();

// try{
// }catch(UserNotFoundException $e){
//     echo $e->getMessage();
// }