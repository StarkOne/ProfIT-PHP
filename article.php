<?php
require __DIR__ . '/autoload.php';

	if(isset($_GET['id'])) {
		$news = \App\Models\News::findById($_GET['id']);
		if(empty($news)) {
			echo "Статья не найдена!";
			die;
		}
		$div = "<div>Стать номер ".$news[0]->id."</a></div><div>Автор: ".$news[0]->author."</div><br><div>".$news[0]->text."</div><br><hr>";
		echo $div;
	} else {

		$newsAll = \App\Models\News::findAll();
		
		foreach ($newsAll as $key) {
			$div = "<div>Ссылка: <a href=article.php?id=".$key->id."> Стать номер $key->id</a></div><div>Автор: $key->author</div><br><div>$key->text</div><br><hr>";
			echo $div;
		}
	}