<?php 

require_once '../vendor/autoload.php';

use App\User; 

$user1 = new User("user1", "123456@mail.ru", "password");
echo "<pre>";
print_r($user1);
echo "</pre>";