<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Поэзия От НеПоэта</title>
</head>
<body bgcolor="green">
<h4>Освети снега</h4>
<p>Освети ярким солнцем снега, </p>
<p>Что на Землю упали с небес.</p> 
<p>Разгони над собой облака,</p> 
<p>Чтоб увидеть свет, что недавно исчез,</p>
 <br>
<p>Разогрей жарким ветром дожди,</p> 
<p>Чтобы в каплях узнать не воду, а цвет.</p> 
<p>Новой встречи с солёным морем дождись -</p> 
<p>Пусть она будет первой за много лет...</p>
<br>
<p>А ещё озари звездой темноту, </p>
<p>Что спускается с неба на землю в ночи,</p> 
<p>И цветными снами раскрась пустоту,</p> 
<p>И мелодией света ты зазвучи!</p>
<iframe src="https://vk.com/videos-117859630?z=video-117859630_456239039%2Fpl_-117859630_-2"></iframe>
<button><a href=https://ridero.ru/books/stikhi_beloi_nochi/>Моя книга стихов</a></button>
<ol><li><button><a href="Index.php">О радости</a></button></li>
<li><button><a href="index3.html">О радости</a></button></li>
<li><button><a href="page1.html">Белая ночь</a></button></li>
<li><button><a href="index2.html">Путешествие за звездой</a></button></li>
<li><button><a href="index4.html">Песня ветра</a></button></li>
<li><button><a href="index5.html">Звёздное</a></button></li>
<li><button><a href="index6.html">Выбор дороги</a></button></li>
<li><button><a href="index7.html">Весна</a></button></li>
<li><button><a href="page8.html">Она и он (полусказка) </a></button></li>
<li><button><a href="page9.html">Типичное Питерское</a></button></li>
<li><button><a href="page10.html">Для тех, кто</a></button></li>
<li><button><a href="Page11.html">Небо на всех</a></button></li>
<li><button><a href="page12.html">Рисунок Солнцем</a></button></li>
<li><button><a href="page13.html">Стихи на закате</a></button></li>
<li><button><a href="page14.html">Не ждущий</a></button></li>
<li><button><a href="page15.html">Облачное</a></button></li>
<li><button><a href="page16.html">Освети снега</a></button></li>
<li><button><a href="page17.html">***</a></button></li>
<li><button><a href="page18.html">***</a></button></li>
<li><button><a href="page19.html">Сотворить чудо</a></button></li>
<li><button><a href="page20.html">***</a></button></li>
<li><button><a href="page21.html">***</a></button></li>
<li><button><a href="page22.html">***</a></button></li>
<li><button><a href="page23.html">***</a></button></li>
<li><button><a href="page24.html">***</a></button></li>
<li><button><a href="page25.html">***</a></button></li>
<li><button><a href="page26.html">***</a></button></li>
<li><button><a href="page27.html">Разводить мосты</a></button></li></ol>
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
<input type="hidden" name="page_id" value="16"/>
<input type="submit" value="Отправить"/>	
</p>
</form>
</html>
<?php
  $page_id = 2;// Уникальный идентификатор страницы (статьи или поста)
     $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }

<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-identifier="item_1" data-counter_clickable="true" data-counter_frmt="space"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END --></body>