<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">	
	<title>Поэзия От НеПоэта</title>
</head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg">
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h3>Поэзия От НеПоэта. Автор: Андрей Вилявдо</h3>
<h4>***</h4>
<p>Затворив за собою дверь,</p>
<p>Ухожу я в своё «вчера»,</p>
<p>Где под вечер цвела сирень,</p>
<p>И с утра поплыла жара.</p>
<br>
<p>Что ищу я - не знаю сам,</p>
<p>Но одно мне известно давно:</p>
<p>Все загадки и чудеса-</p>
<p>Золотое моё руно…</p>
<br>
<p>И в конце, устав от дорог,</p>
<p>Я вернусь домой и скажу:</p>
<p>«Что искал, то найти я смог;</p>
<p>Я теперь со всеми дружу!»</p>
<br>
<iframe src="https://vk.com/videos-117859630?z=video-117859630_456239030%2Fclub117859630%2Fpl_-117859630_-2" allowfullscreen></iframe>
<ul><LI><button><a href="Index.php">Главная</a></button></LI></ul>
<ul><LI><button><a href="page3.html">О радости</a></button></LI></ul>
<ul><li><button><a href="index1.php">Белая ночь</a></button></li></ul>
<ul><li><button><a href="index2.html">Путешествие за звездой</a></button></li></ul>
<ul><li><button><a href="index4.html">Песня ветра</a></button></li></ul>
<ul><li><button><a href="index5.html">Звёздное</a></button></li></ul>
<ul><li><button><a href="index6.html">Выбор дороги</a></button></li></ul>
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
<ul><li><button><a href="page19.html">Сотворить чудо</a></button></li></ul>
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
    <input type="hidden" name="page_id" value="18" />
    <input type="submit" value="Отправить" />
  </p>
</form>

<?php
  $page_id = 18;// Уникальный идентификатор страницы (статьи или поста)
    $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>       
</html>