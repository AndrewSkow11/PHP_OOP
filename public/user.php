<?php 

require_once '../vendor/autoload.php';

use App\User; 

$user2 = new User("user1", "123456@mail.ru", "password");
echo "<pre>";
print_r($user2);
echo "</pre>";

$user2->setUsername("");
$user2->setEmail("invalid_email");
$user2->setPassword("123");

$user2->setUsername("user2");
$user2->setEmail("user2@mail.ru");
$user2->setPassword("password123");

echo "<br>";


echo $user2->getUsername();
echo "<br>";
echo $user2->getEmail();
echo "<br>";
echo $user2->getPassword();
echo "<br>";