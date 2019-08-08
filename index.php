<html><!--объявляем язык документа-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>button {
    background:linear-gradient(left, teal,white); /* Цвет фона */
    padding: 7px 30px; /* Поля вокруг текста */
    font-size: 13px; /* Размер шрифта */ 
    font-weight: bold; /* Насыщенность шрифта */
    color:gold; /* Цвет шрифта */
    text-align: center; /* Надпись на кнопке по центру */
	text-decoration:none;
    border: 1px solid  #73C8F0; /* Параметры рамки кнопки */
	border-radius: 25px;
 cursor: hand; /* Изменение вида курсора при наведении*/}
li{list-style: none;}
</style>
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title><!--создаём заголовок в браузере-->
</head>
<body bgcolor="#7FFFD4" link="#ffcc00" alink="#ebc2af" vlink="#00ff00">
<h3>Поэзия от НеПоэта.Автор: Андрей Вилявдо</h3><!--Добавляем заголовок на страницу-->
<h4>Приветствую всех на моём сайте.</h4><!--Добавляем текст-->
<a href="https://vk.com/silverlight89"><img src=Avtor.jpg width="20%" height="40%" alt "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" ><img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<a href="https://beta.ridero.ru/#!/book/58862b065644530700c1c963/view">Сайт моей книги</a>	
<iframe width="854" height="480" src="https://www.youtube.com/embed/daeXP3BofB8" frameborder="0" allowfullscreen></iframe><!--Вставляем видеоролик-->
<p><b>Я- поэт-любитель, и здесь собраны мои авторские стихи.Они есть ещё на нескольких сайтах, но на этом сайте будут все стихи, которые я написал.</b></p>
<p>Также, именно этот сайт я планирую развивать в дальнейшем.</p>
<marquee>Сверхважная информация: <em>С <b>6 октября 2017 года</b><a href="http://vk.com/silverlight89"> я</a> открою продажу своего сборника стихов. Предзаказ открыт в <a href="vk.com/ot_nepoeta">моей группе.</a></em></marquee> <!--Бегущая строка на странице-->   
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
<input type="hidden" name="page_id" value="1"/>
<input type="submit" value="Отправить"/>	
</p>
</form>
<?php
  $page_id = 1;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
<p>А пока что он будет таким:</p>
<ul class="menu"><li><button><a class="menu_a" href="page3.php">О радости</a></button></li></ul><!--Добавляем ссылку на другую страницу-->
<ul class="menu"><li><button><a class="menu_a" href="page1.php">Белая ночь</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page2.php">Путешествие за звездой</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page4.php">Песня ветра</a></button></li></ul>
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
<ul class="menu"><li><button><a class="menu_a" href="page30.html">Это</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page31.html">К человеку пишущему.</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page32.html">Экспромт по картине.</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page33.html">Море. Формула счастья.</a></button></li></ul>	
<ul><li><a href="https://ridero.ru/books/stikhi_beloi_nochi"> Моя книга со стихами</a></li></ul>
