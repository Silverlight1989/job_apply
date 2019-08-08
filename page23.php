<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Поэзия От НеПоэта</title>
</head>
<body bgcolor="green">
<h3>Поэзия От НеПоэта</h3>
<H4>***</H4>
<p>Дорога над пропастью уже, чем нитка,</p> 
<p>Но я той дорогой обязан пройти,</p>
<p>На этой дороге любая ошибка</p>
<p>Равна непременно финалу пути.</p>
<br>
<p>Дорогой той узкой пройти очень сложно,</p>
<p>Но я с нею справлюсь,</p>
<p>(Ведь я обещал),</p>
<p>Пусть будет мне трудно, но я постараюсь,</p>
<p>Дойти и найти там начало начал.</p>
<br>
<p>Под этой дорогой- воды по колено,</p>
<p>Широк  там поток и вода холодна,</p>
<p>Но я ту дорогу пройду непременно.</p>
<p>Я верю, что мне покорится она</p>
<iframe src=""></iframe>
<ol><li><button><a href="index.php">Гланая</a></button></li>
<li><button><a href="page3.php">О радости</a></button></li><!--Добавляем ссылку на другую страницу-->
<li><button><a href="page1.php">Белая ночь</a></button></li>
<li><button><a href="page2.php">Путешествие за звездой</a></button></li>
<li><button><a href="page4.php">Песня ветра</a></button></li>
<li><button><a href="page5.php">Звёздное</a></button></li>
<li><button><a href="page6.php">Выбор дороги</a></button></li>
<li><button><a href="page7.php">Весна</a></button></li>
<li><button><a href="page8.php">Она и он (полусказка) </a></button></li>
<li><button><a href="page9.php">Типичное Питерское</a></button></li>
<li><button><a href="page10.php">Для тех, кто</a></button></li>
<li><button><a href="Page11.php">Небо на всех</a></button></li>
<li><button><a href="page12.php">Рисунок Солнцем</a></button></li>
<li><button><a href="page13.php">Стихи на закате</a></button></li>
<li><button><a href="page14.php">Не ждущий</a></button></li>
<li><button><a href="page15.php">Облачное</a></button></li>
<li><button><a href="page16.php">Освети снега</a></button></li>
<li><button><a href="page17.php">***</a></button></li>
<li><button><a href="page18.php">***</a></button></li>
<li><button><a href="page19.php">Сотворить чудо</a></button></li>
<li><button><a href="page20.php">***</a></button></li>
<li><button><a href="page21.php">***</a></button></li>
<li><button><a href="page22.php">***</a></button></li>
<li><button><a href="page24.php">***</a></button></li>
<li><button><a href="page25.php">***</a></button></li>
<li><button><a href="page26.php">***</a></button></li>
<li><button><a href="page27.php">Разводить мосты</a></button></li></ol>
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-identifier="item_1" data-counter_clickable="true" data-counter_frmt="space"></span>
<script>
    (function(d,e,s){if(d.getElementById("likebtn_wjs"))return;
    a=d.createElement(e);
    m=d.getElementsByTagName(e)[0];
    a.async=1;
    a.id="likebtn_wjs";
    a.src=s;
    m.parentNode.insertBefore(a, m)})
    (document,"script","//w.likebtn.com/js/w/widget.js");
</script>
<!-- LikeBtn.com END -->
</body>
</html>

  <?php
  $page_id = 23;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";  }?>

