<?php

require __DIR__ . '/autoload.php';

//$db = new \App\Db();
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//$data = $db->query('SELECT * FROM users', 'App\Models\User');
//$user = new \App\Models\User();

// путь нужен обязательно app\models\
$users = \App\Models\User::findAll();
var_dump($users);