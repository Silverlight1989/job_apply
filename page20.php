<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title>
</head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>Сотворить чудо</h4>
<p>Попробуй чудо сотворить,</p>
<p>Ты знаешь, на что способен.</p>
<p>К примеру, свет небес затми</p>
<p>Единственной звездой.</p>
<br>
<p>Ты- свет и звук, а потому</p>
<p>Другим ты неудобен,</p>
<p>К тому же, здесь среди других</p>
<p>Ты самый молодой.</p>
<br>
<p>Друзей попробуй удивить,</p>
<p>Пускай они всё знают,</p>
<p>И пусть увидят, что всесилен ты,</p>
<p>А чтоб их в этом убедить,</p>
<p>Скажи им: пусть мечтают,</p>
<p>Ты ж их попробуй угадать мечты!</p>
<br>
<p>Твори и пробуй, всякий раз-</p>
<p>И станет получаться,</p>
<p>Ты сам увидишь, как же ты силён...</p>
<p>Умеешь что-то делать ты-</p>
<p>Тебе нельзя стесняться,</p>
<p>Ведь на тебя глядят со всех сторон!</p>
<iframe src="https://vk.com/videos-117859630?z=video-117859630_456239027%2Fclub117859630%2Fpl_-117859630_-2"></iframe>
<ul><li><button><a href="Index.php">Главная</a></button></li></ul>
<ul><li><button><a href="index3.html">О радости</a></button></li></ul><!--Добавляем ссылку на другую страницу-->
<ul><li><button><a href="index1.php">Белая ночь</a></button></li></ul>
<ul><li><button><a href="index2.html">Путешествие за звездой</a></button></li></ul>
<ul><li><button><a href="index4.html">Песня ветра</a></button></li></ul>
<ul><li><button><a href="index5.html">Звёздное</a></button></li></ul>
<ul><li><button><a href="index6.html">Выбор дороги</a></button></li></ul>
<ul><li><button><a href="index7.html">Весна</a></button></li></ul>
<ul><li><button><a href="page8.html">Она и он (полусказка) </a></button></li></ul>
<ul><li><button><a href="page9.html">Типичное Питерское</a></button></li></ul>
<ul><li><button><a href="page10.html">Для тех, кто</a></button></li></ul>
<ul><li><button><a href="Page11.html">Небо на всех</a></button></li></ul>
<ul><li><button><a href="page12.html">Рисунок Солнцем</a></button></li></ul>
<ul><li><button><a href="page13.html">Стихи на закате</a></button></li></ul>
<ul><li><button><a href="page14.html">Не ждущий</a></button></li></ul>
<ul><li><button><a href="page15.html">***</a></button></li></ul>
<ul><li><button><a href="page16.html">Освети снега</a></button></li></ul>
<ul><li><button><a href="page17.html">***</a></button></li></ul>
<ul><li><button><a href="page18.html">***</a></button></li></ul>
<ul><li><button><a href="page20.html">***</a></button></li></ul>
<ul><li><button><a href="page21.html">***</a></button></li></ul>
<ul><li><button><a href="page22.html">***</a></button></li></ul>
<ul><li><button><a href="page23.html">***</a></button></li></ul>
<ul><li><button><a href="page24.html">***</a></button></li></ul>
<ul><li><button><a href="page25.html">***</a></button></li></ul>
<ul><li><button><a href="page26.html">***</a></button></li></ul>
<ul><li><button><a href="page27.html">Разводить мосты</a></button></li></ul>

<form name="comment" action="comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br>
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="19" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 20;// Уникальный идентификатор страницы (статьи или поста)
    $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>    
</body>
</html>