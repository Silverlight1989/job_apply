<!DOCTYPE html5>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href=style.css>
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title>
</head>
<body bgcolor="aqua">    
<p>Он не хотел молчать и ждать перемен</p>
<p>Он всё искал над городами что-то,</p>
<p>Он сам себе не отдавал отчёта,</p>
<p>Не отражаясь от придуманных стен.</p>
<br>
<p>Он не хотел ни капли вслух рассуждать</p>
<p>Он выражал себя пером на бумаге</p>
<p>И так, что даже всемогущие маги</p>
<p>До этих пор не могут всё угадать…</p>
<br>
<p>Меж тем вся мысль его прозрачнее льда:</p>
<p>Не делай плохо - и тебе будет легче</p>
<p>И будут просто улыбаться при встрече</p>
<p>Едва знакомые с тобою всегда…</p>
<video width="400" height="300" controls="controls" poster="1.png">
   <source src="Wildlife.ogv" type='video/ogg; codecs="theora, vorbis"'>
   <source src="Wildlife.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
   <source src="Wildlife.webm" type='video/webm; codecs="vp8, vorbis"'>
  </video>

<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-identifier="item_1" data-counter_clickable="true" data-counter_frmt="space"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;
a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;
a.id="likebtn_wjs";
a.src=s;
m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");
</script>
<!-- LikeBtn.com END -->
<div class="comment-block">
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
    <input type="hidden" name="page_id" value="14" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 14;// Уникальный идентификатор страницы (статьи или поста)
    $mysqli = new mysqli("localhost", "u0154084_1989", "D/4OLQSY", "u0154084_1989");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
</div>
  <form name="upload" action="upload.php" method="post">
  <form action=upload.php method=post enctype=multipart/form-data>
<input type=file name=uploadfile>
<input type=submit value=Загрузить></form>
<ol><li><button><a href="index.php">Главная</a></button></li>
<li><a href="index3.php">О радости</a></li><!--Добавляем ссылку на другую страницу-->
<li><a href="index1.php">Белая ночь</a></li>
<li><a href="index2.php">Путешествие за звездой</a></li>
<li><a href="index4.html">Песня ветра</a></li>
<li><a href="index5.html">Звёздное</a></li>
<li><a href="index6.html">Выбор дороги</a></li>
<li><a href="index7.html">Весна</a></li>
<li><a href="page8.html">Она и он (полусказка)</a></li>
<li><a href="page9.html">Типичное Питерское</a></li>
<li><a href="page10.html">Для тех, кто</a></li>
<li><a href="Page11.html">Небо на всех</a></li>
<li><a href="page12.html">Рисунок Солнцем</a></li>
<li><a href="page13.html">Стихи на закате</a></li>
<li><a href="page15.html">Облачное</a></li>
<li><a href="page16.html">Oсвети снeга</a></li>
<li><a href="page17.html">***</a></li>
<li><a href="page19.html">Сотворить чудо</a></li></ol>
</body>
</html>