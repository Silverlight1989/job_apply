<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта</title>
</head>
<body bgcolor="green" link="#ffcc00" vlink="#00ff00">
<style> li:list-style:none</style>
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt ="Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>***</h4>
<p>Неба в моей стране хватит на всех</p>
<p>Воздух прозрачный в больших цветных облаках,</p>
<p>Видеть грядущий день в открытых глазах</p>
<p>Или читать свои творенья для всех…</p>
<br>      
<p>Можно ходить, а можно учиться летать,</p>
<p>Можно успеть и сделать всё что хотел,</p>
<p>Прежде чем начать уходить за предел</p>
<p>Ну, а потом вернуться опять…</p>
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
<input type="hidden" name="page_id" value="11"/>
<input type="submit" value="Отправить"/>	
</p>
</form>
<?php
  $page_id = 11;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-identifier="item_1" data-counter_clickable="true" data-counter_frmt="space"></span>
<script>
(function(d,e,s)
{if(d.getElementById("likebtn_wjs"))
return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];
a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})
(document,"script","//w.likebtn.com/js/w/widget.js");
</script>
<!-- LikeBtn.com END -->
<ul class="menu"><li><button><a class="menu_a" href="index.php">Главная</a></button></li></ul>	
<ul class="menu"><li><button><a class="menu_a" href="index3.html">О радости</a></button></li></ul><!--Добавляем ссылку на другую страницу-->
<ul class="menu"><li><button><a class="menu_a" href="page1.html">Белая ночь</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index2.html">Путешествие за звездой</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index4.html">Песня ветра</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index5.html">Звёздное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index6.html">Выбор дороги</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index7.html">Весна</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page8.html">Она и он (полусказка) </a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page9.html">Типичное Питерское</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page10.html">Для тех, кто</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="Page11.html">Небо на всех</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page12.html">Рисунок Солнцем</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page13.html">Стихи на закате</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page14.html">Не ждущий</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page15.html">Облачное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page16.html">Освети снега</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page17.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page18.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page19.html">Сотворить чудо</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="O_tishine.php">О тишине</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page20.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page21.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page22.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page23.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page24.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page25.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page26.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page27.html">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page28.html">Мечта</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page29.html">Осветить Мир</a></button></li></ul>	
<ul class="menu"><li><button><a class="menu_a" href="page31.html">К человеку пишущему</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page32.html">Экспромт по картине</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page33.html">Море. Формула счастья.</a></button></li></ul>	