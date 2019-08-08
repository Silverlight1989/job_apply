<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title><!--создаём заголовок в браузере-->
</head>
<body bgcolor="green" link="#ffcc00" vlink="#00ff00">
<h3>Поэзия от НеПоэта.Автор: Андрей Вилявдо</h3>
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>Она и он (полусказка)</h4>
<p>Она когда-то и сама</p> 
<p>Дворцы имела и дома</p> 
<p>И выходить любила в свет</p>
<p>Вся в белом;</p>
<p>В домах имела сотню слуг,</p> 
<p>Игру на скрипке на досуг</p>
<p>И Принца своего найти</p> 
<p>Хотела…</p>
<p>А что ему? – всё нипочём</p> 
<p>Он был дворцовым скрипачом,</p>
<p>Играл мелодии без нот,</p>
<p>На память;</p>
<p>И не встречались никогда,</p>
<p>Ведь он огонь, она ж вода,</p>
<p>Но потушить ей не дано</p>  
<p>Пламя.</p> 
<p>Доныне так живут они,</p>
<p>Когда в домах горят огни,</p>
<p>Или когда течёт река</p>  
<p>Без края.</p>
<p>И нет конца, и нет начал,</p>
<p>Ведь их никто не обещал…</p> 
<p>И так история грядёт</p>
<p>Другая.</p> 
<p>Он иногда стихи писал,</p>
<p>Никто о нём ещё не знал,</p>
<p>Не знал и он, что будет с ним</p>
<p>Дальше,</p>
<p>О ней  мечтал и день, и ночь;</p>
<p>Мечтал умчаться с ней он прочь,</p>
<p>Туда, где можно просто жить,</p>
<p>Без фальши.</p>
<p>Вот, наконец, они сошлись,</p>
<p>Влюбился он, огни зажглись,</p>
<p>И реки потекли за ней</p>
<p>Быстрее.</p> 
<p>Живут они уж сотню лет,</p>
<p>Разлада между ними нет,</p>
<p>И тот союз на свете всех</p> 
<p>Прочнее.</p>
<iframe src="https://www.youtube.com/watch?v=z7Emf_ilamU" frameborder="0" allowfullscreen></iframe>
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
    <input type="hidden" name="page_id" value="8" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 8;// Уникальный идентификатор страницы (статьи или поста)
   $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
<ul class="menu"><li><button><a class="menu_a" href="Index.php">Главная</a></button></li></ul>	
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
</body>
</html>