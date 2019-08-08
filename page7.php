<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href= "style.css">
	<title>Поэзия от НеПоэта</title>
</head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg">
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<H3>Поэзия от НеПоэта</H3>
<H4>Автор: Андрей Вилявдо</H4>
<H5>Весна</H5>						
<p>Весна разбудит первые стихи,</p>
<p>Отступят отголоски сна зимы,</p>
<p>Я оживу, и станут дни тихи,</p>
<p>И о заботах позабудем мы…</p>
<br>
<p>Весной у белой ночи нет конца,</p>
<p>Как нет и срока годности мечты,</p>
<p>На слово отзываются сердца,</p>
<p>И всюду распускаются цветы</p>
<form name="comment" action="comment.php" method="post">
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
    <input type="hidden" name="page_id" value="7" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 7;// Уникальный идентификатор страницы (статьи или поста)
   $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>                  
<ul class="menu"><li><button><a class="menu_a" href="index.php">Главная</a></button></li></ul>	
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