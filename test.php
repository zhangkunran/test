<?php
use Foo\User;
require 'vendor/autoload.php';
$info = new \MyLib\User\info();
$data = $info->userList();
print_r($data);

$member = new \Pulg\Member\money();
$money = $member->check();
print_r($money);

$foo = new \Foo\Bar();
$bar = $foo->bar();
print_r($bar);
echo PHP_EOL;

$book = new Book();
echo $book->bookFun();
print_r($bar);
echo PHP_EOL;

$car = new Car();
echo $car->carFun();
echo PHP_EOL;

$zoon = new Zoon();
echo $zoon->zoonFun();
echo PHP_EOL;

$user = new User();
echo $user->UserFun();
echo PHP_EOL;