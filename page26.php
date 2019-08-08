<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта. Автор: Андрей Вилявдо.</title></head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89"><img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg"><img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>Из нитей серебряных облаков...</h4>
<br>
<p>Из нитей серебряных облаков</p> 
<p>Сплетён неба узор.</p>
<p>Из тёмных ночей и безбрежных снов,</p>
<p>Невиданных до сих пор...</p>
<br>
<p>Из краткого лета и длинных дней,</p>
<p>Когда за окном облака,</p>
<p>Слагается долгий парад дождей,</p> 
<p>Идущий во все века</p>
<br>
<p>Так за темнотой наступает рассвет,</p>
<p>Заметный с любой стороны</p>
<p>И видно, что родом тот нежный свет</p>
<p>Конечно же, из Весны.</p>
<br>
<iframe src=""></iframe>
<form name="comment" action="comment.php" method="post">
<p>
<label>Имя:</label>	
<input type="text" name="name" />
</p>
<p><label>Ваш комментарий:</label>
<br />
<textarea name="text_comment" cols="50" rows="30"></textarea>
</p>
<p>
<input type="hidden" name="page_id" value="26"/>
<input type="submit" action="scripts/comment.php" value="Отправить"/>	
</p>
</form>
  <?php
  $page_id = 26;
  $mysqli = new mysqli("localhost", "root", "", "db");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); 
  while ($row = $result_set->fetch_assoc()) 
  { print_r($row); echo "<br />";  }?>
<ol><li><button><a onmouseover href="index.php">Главная</a></button></li></ul>
<li><button><a href="index3.html">О радости</a></button></li></ul>
<li><button><a href="index1.php">Белая ночь</a></button></li></ul>
<ul><li><button><a href="index2.html">Путешествие за звездой</a></button></li></ul>
<ul><li><button><a href="page4.html">Песня ветра</a></button></li></ul>
<ul><li><button><a href="index5.html">Звёздное</a></button></li></ul>
<ul><li><button><a href="index6.html">Выбор дороги</a></button></li></ul>
<ul><li><button><a href="index7.html">Весна</a></button></li></ul>
<ul><li><button><a href="page8.html">Она и он (полусказка)</a></button></li></ul>
<ul><li><button><a href="page9.html">Типичное Питерское</a></button></li></ul>
<ul><li><button><a href="page10.html">Для тех, кто</a></button></li></ul>
<ul><li><button><a href="Page11.html">Небо на всех</a></button></li></ul>
<ul><li><button><a href="page12.html">Рисунок Солнцем</a></button></li></ul>
<ul><li><button><a href="page13.html">Стихи на закате</a></button></li></ul>
<ul><li><button><a href="page14.html">Не ждущий</a></button></li></ul>
<ul><li><button><a href="page15.html">Облачное</a></button></li></ul>
<ul><li><button><a href="page16.html">Освети снега</a></button></li></ul>
<ul><li><button><a href="page17.html">***</a></button></li></ul>
<ul><li><button><a href="page18.html">***</a></button></li></ul>
<ul><li><button><a href="page19.html">Сотворить чудо</a></button></li></ul>
<ul><li><button><a href="page20.html">***</a></button></li></ul>
<ul><li><button><a href="page21.html">***</a></button></li></ul>
<ul><li><button><a href="page22.html">***</a></button></li></ul>
<ul><li><button><a href="page23.html">Дорога над пропастью</a></button></li></ul>
<ul><li><button><a href="page24.html">Цельнометаллическое</a></button></li></ul>
<ul><li><button><a href="page25.html">Тот же день</a></button></li></ul>
<ul><li><button><a href="page27.html">Разводить мосты</a></button></li></ul>
</body>
</html>