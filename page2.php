<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title>
</head>
<body bgcolor=#2E8B57 link="green">
<h1>Поэзия от НеПоэта</h1>
<h2>Автор: Андрей Вилявдо</h2>
<p><a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andyvi">
<img src="For_link.jpg" width="20%" height="40%" alt= "Автора!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src="Channel.jpg" width="20%" height="40%" alt= "канал"></a>
<!--изображение, как ссылка--><h3>Отправляясь в путь за упавшей звездой…</h3>
<p>Отправляясь в путь за упавшей звездой,</p>
<p>Не забудь с собою взять своих друзей;</p>
<p>Оттолкнись от всех чужих тебе идей</p>
<p>И пусти к себе в душу забытый покой,</p>
<p>Тот, что ты потерял вместе с первой листвой…</p>
<p>То, что ищешь ты, вскоре найдешь без труда</p>
<p>И поймешь, что старался не зря,</p>
<p>Ведь эта упавшая с неба звезда –</p>
<p>Это утренняя заря!</p>
<iframe src=""></iframe>
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
    <input type="hidden" name="page_id" value="3" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 3;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "u0154084_1989", "P4Hra34E2qkQhea", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
 }
?>

<ul class="menu"><li><button><a class="menu_a" href="index.php">Главная</a></button></li></ul>	
<ul class="menu"><li><button><a class="menu_a" href="page3.html">О радости</a></button></li></ul><!--Добавляем ссылку на другую страницу-->
<ul class="menu"><li><button><a class="menu_a" href="page1.html">Белая ночь</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page2.html">Путешествие за звездой</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page4.html">Песня ветра</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page5.html">Звёздное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page6.html">Выбор дороги</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page7.html">Весна</a></button></li></ul>
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