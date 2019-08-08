<!DOCTYPE HTML><html>
<head>
<meta charset="utf-8"><link rel="stylesheet" href="style.css">
<title>Поэзия от НеПоэта. Автор Андрей Вилявдо.</title></head>
<body bgcolor="green">
<a href="https://vk.com/silverlight89"><img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg"><img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>***</h4>
<p>Разводить за собой мосты,</p>
<p>Или соединять берега,</p>
<p>Можешь делать так только ты,</p>
<p>Но об этом не знаешь пока.</p>
<br>
<p>Поднимать ранним утром рассвет.</p>
<p>В небе цвета ультрамарин;</p>
<p>Видеть золото там, где свет;</p>
<p>С Солнцем быть один на один.</p>
<br>
<p>А ещё полюбить звездопад,</p>
<p>Мир увидеть с горных вершин,</p>
<p>Чтоб однажды, вернувшись назад,</p>
<p>Стать собою в вечер один.</p>
<iframe width="570" height="321" src="https://www.youtube.com/embed/Jxmh0QfouO4" frameborder="0" allowfullscreen></iframe>
<ul><li><button><a href="index.php">Главная</a></button></li></ul>
<ul><li><button><a href="index3.html">О радости</a></button></li></ul>
<ul><li><button><a href="index1.php">Белая ночь</a></button></li></ul>
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
<ul><li><button><a href="page26.html">Из нитей серебряных облаков...</a></button></li></ul>
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
