<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Поэзия от НеПоэта</title>
</head>
<body>
<h1>Поэзия от НеПоэта</h1>
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo">
<img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%=" alt= "канал"></a>
<hr>
<h2>***</h2>
<p>Просто нарисуй солнечным лучом сны,</p>
<p>О которых сам недавно только мечтал;</p>
<p>Частью их возможно ты уже стал</p>
<p>В ожидании такой далёкой весны…</p>
<br>
<p>Просто нарисуй в радужных цветах даль</p>
<p>И с утра отправься туда сам</p>
<p>Просто нарисуй всё то, что пожелаешь там…</p>
<p>И, вернувшись из мечты, скажи себе «да»!</p>
<hr>
<iframe src=""></iframe>
<form name="comment" action="scripts/comment.php" method="post">
<p>
<label>Имя:</label>	
<input type="text" name="name" />
</p>
<p><label>Ваш комментарий:</label>
<br />
<textarea name="text_comment" cols="50" rows="30"></textarea>
</p>
<p>
<input type="hidden" name="page_id" value="12"/>
<input type="submit" value="Отправить"/>	
</p>
</form>
<?php
  $page_id = 12;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
<ul class="menu"><li><button><a class="menu_a" href="Index.php">Главная</a></button></li></ul>	
<ul class="menu"><li><button><a class="menu_a" href="page3.php">О радости</a></button></li></ul><!--Добавляем ссылку на другую страницу-->
<ul class="menu"><li><button><a class="menu_a" href="page1.php">Белая ночь</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page2.php">Путешествие за звездой</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page4.php">Песня ветра</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page5.php">Звёздное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page6.php">Выбор дороги</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page7.php">Весна</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page8.php">Она и он (полусказка) </a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page9.php">Типичное Питерское</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page10.php">Для тех, кто</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="Page11.php">Небо на всех</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page12.php">Рисунок Солнцем</a></button></li></ul>
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
</body>
</html>