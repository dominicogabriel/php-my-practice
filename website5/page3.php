<?php
$user = ['name' => 'Dom', 'email' => 'dom@gmail.com', 'age' => 22];

$user = serialize($user);

setcookie('user', $user, time() + (86400));

$user = unserialize($_COOKIE['user']);
print_r($user);
