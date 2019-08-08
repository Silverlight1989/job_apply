<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия От НеПоэта</title>
</head>
<body bgcolor="green">
<h3>Поэзия От НеПоэта</h3>
<a href="https://vk.com/silverlight89"><img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo"><img src="https://vk.com/silverlight89?z=photo92883219_456239081%2Falbum92883219_000%2Frev" width="20%" height="40%" alt= "Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg"><img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<h4>***</h4>
<p>Просто нарисуй небо,</p>
<p>А на небе облака</p>
<p>Ты ведь там ещё не был</p>
<p>Лишь видел издалека…</p>
<br>
<p>Просто подбери краски,</p>
<p>Ярче которых нет</p>
<p>И на полюсах разных</p>
<p>Изобрази рассвет</p>
<br>
<p>Просто обрети счастье,</p>
<p>Коль кому-нибудь помог</p>
<p>И выбери одну – свою</p>
<p>Из тысячи дорог…</p>	
<iframe src="https://www.youtube.com/embed?v=aS88KAJeUGw"></iframe>
<ol><li><button><a href="index.php">Главная</a></li></button><!--Добавляем ссылку на другую страницу-->
<li><button><a href="index3.php">О радости</a></li></button><!--Добавляем ссылку на другую страницу-->
<li><button><a href="index1.php">Белая ночь</a></li>
<li><button><a href="index2.html">Путешествие за звездой</a></li>
<li><button><a href="index4.html">Песня ветра</a></li>
<li><button><a href="index5.html">Звёздное</a></li>
<li><button><a href="index6.html">Выбор дороги</a></li>
<li><button><a href="index7.html">Весна</a></li></ul>
<li><button><a href="page8.html">Она и он (полусказка) </a></li>
<li><button><a href="page9.html">Типичное Питерское</a></li>
<li><button><a href="page10.html">Для тех, кто</a></li>
<li><button><a href="Page11.html">Небо на всех</a></li>
<li><button><a href="page12.html">Рисунок Солнцем</a></li>
<li><button><a href="page13.html">Стихи на закате</a></li>
<li><button><a href="page14.html">Не ждущий</a></li>
<li><button><a href="page16.html">Освети снега</a></li>
<li><button><a href="page17.html">***</a></li>
<li><button><a href="page18.html">***</a></li>
<li><button><a href="page19.html">Сотворить чудо</a></li>
<li><button><a href="page20.html">***</a></li>
<li><button><a href="page21.html">***</a></li>
<li><button><a href="page22.html">***</a></li>
<li><button><a href="page23.html">Не ждущий</a></button></li></ul>
<li><button><a href="page24.html">Цельнометаллическое</a></button></li>
<li><button><a href="page25.html">Просто нарисуй небо</a></button></li>
<li><button><a href="page26.html">Просто нарисуй небо</a></button></li></ol>
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
    <input type="hidden" name="page_id" value="15" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 2;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
</body>
</html>

 