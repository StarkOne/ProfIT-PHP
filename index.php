<?php

require __DIR__ . '/autoload.php';

function debug($data) {
	echo '<pre>' . print_r($data) . '</pre>';
}

//$db = Db::instance();
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//$data = $db->query('SELECT * FROM users', 'App\Models\User');
//$user = new \App\Models\User();

// путь нужен обязательно app\models\
//$users = \App\Models\User::findAll();
//$news = \App\Models\News::findById(2);
$news = \App\Models\News::threeNews();
//debug($news);
//var_dump($users);

foreach ($news as $key) {
	$div = "<div>Ссылка: <a href=article.php?id=".$key->id."> Стать номер $key->id</a></div><div>Автор: $key->author</div><br><div>$key->text</div><br><hr>";
	echo $div;
}