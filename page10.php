<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title><!--создаём заголовок в браузере-->
</head>
<body bgcolor="green" link="#ffcc00" vlink="#00ff00">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo">
    <img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h3>Поэзия от НеПоэта.Автор: Андрей Вилявдо</h3>
<h4>Для тех,кто...</h4> 
 <p>Для тех, кто в море нашёл маяк,</p>
<p>Для тех, кто в жизни открыл дорогу,</p>
<p>Кому другое из Мира - пустяк,</p>
<p>Кому от всех и не нужно много</p>
<p>Чей свет не гаснет день ото дня,</p>
<p>А лишь мерцает неистребимо</p>
<p>Чьё сердце не жалеет огня,</p>
<p>А может, бьётся едва уловимо...</p>
<p>Кому нельзя не тянуться к звезде,</p>
<p>Или ловить в свои руки осколки</p>
<p>Кому неведомо зло, что витает везде,</p>
<p>И кто ведёт свою жизнь "без дальней полки"</p>
<p>Тем и доступен большой секрет,</p>
<p>Что для других за семью замками,</p>
<p>Что невозможного в жизни нет</p>
<p>И можно неба коснуться руками...</p>
<iframe src="https://vk.com/videos-117859630?z=video-117859630_456239021%2Fpl_-117859630_-2"></iframe>
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
    <input type="hidden" name="page_id" value="10" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
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