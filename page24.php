<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта</title>
</head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt ="На Бис!"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg" >
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>***</h4>
<p>Запиши в голове, даже если устал,</p>
<p>Что в словах заключён благородный металл.</p>
<p>Где добро-серебро, а где слава-там медь,</p>
<p>Вместе с золотом - голос, чтоб в песнях воспеть.</p>
<br>
<p>Чтобы прочно стоять на ногах-сталь нужна,</p>
<p>И защитою тоже быть может она...</p>
<br>
<p>Только скрыт от меня самый редкий металл -</p>
<p>Тот, что мне и другим вдохновением стал...</p>
<p>Разгадать бы его, да понять в чём секрет,</p>
<p>И тогда проживу я до тысячи лет!</p>
<iframe src=""></iframe>
<ol><li><a href="index.php">Гланая</a></li>
<li><a href="index3.php">О радости</a></li><!--Добавляем ссылку на другую страницу-->
<li><a href="index1.php">Белая ночь</a></li>
<li><a href="index2.html">Путешествие за звездой</a></li>
<li><a href="index4.html">Песня ветра</a></li>
<li><a href="index5.html">Звёздное</a></li>
<li><a href="index6.html">Выбор дороги</a></li>
<li><a href="index7.html">Весна</a></li>
<li><a href="page8.html">Она и он (полусказка) </a></li>
<li><a href="page9.html">Типичное Питерское</a></li>
<li><a href="page10.html">Для тех, кто</a></li>
<li><a href="Page11.html">Небо на всех</a></li>
<li><a href="page12.html">Рисунок Солнцем</a></li>
<li><a href="page13.html">Стихи на закате</a></li>
<li><a href="page14.html">Не ждущий</a></li>
<li><a href="page15.html">Облачное</a></li>
<li><a href="page16.html">Освети снега</a></li>
<li><a href="page17.html">***</a></li>
<li><a href="page18.html">***</a></li>
<li><a href="page19.html">Сотворить чудо</a></li>
<li><a href="page20.html">***</a></li>
<li><a href="page21.html">***</a></li>
<li><a href="page22.html">***</a></li>
<li><a href="page23.html">Дорога над пропастью</a></li>
</ol>
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
    <input type="hidden" name="page_id" value="25" />
    <input type="submit" value="Отправить" />
  </p>
</form> 
<?php
  $page_id = 25;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli();// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";  }?>
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-identifier="item_1" data-counter_clickable="true" data-counter_frmt="space"></span>
<script>(function(d,e,s)
{if(d.getElementById("likebtn_wjs"))return;
a=d.createElement(e)
;m=d.getElementsByTagName(e)[0]
;a.async=1;a.id="likebtn_wjs";
a.src=s;m.parentNode.insertBefore(a, m)})
(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->/
</body>
</html>

 

