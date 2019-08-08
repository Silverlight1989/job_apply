<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта Автор: Андрей Вилявдо</title></head>
<body bgcolor="2E8B57" link="#ffcc00" vlink="#00ff00">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg">
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h1>Поэзия от НеПоэта. Автор: Андрей Вилявдо</h1>
<h2>Звёздное</h2>
<p>Представь себе пыльный осколок звезды,</p>
<p>Упавший в твою ладонь</p>
<p>Глотни родниковой, кристальной воды</p>
<p>И в путь отправляйся со мной</p>
<p>Туда, где прозрачна твоя мечта,</p>
<p>А мысли как снег чисты,</p>
<p>И светит хрустальная та звезда</p>
<p>С неведомой высоты!</p>
<br>
<form name="comment" action="scripts/comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="6" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 6;// Уникальный идентификатор страницы (статьи или поста)
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
<ul class="menu"><li><button><a class="menu_a" href="index4.php">Песня ветра</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index5.php">Звёздное</a></button></li></ul>
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
</body>
</html>