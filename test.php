<?php
require 'vendor/autoload.php';
$user = new \Zhangkunran\Test\model\User();
$data = $user->getList();
print_r($data);