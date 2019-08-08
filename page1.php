<!DOCTYPE html ><!--С этого тэга начинается страница-->
<head><!--После этого тэга прописывается слжебная информация о странице-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!--Так можно задать кодировку страницы-->
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title><!--Так задаётся заголовок страницы--></head><!--это-тэг,закрывающий раздел служебной информации о странице-->
<body bgcolor=#2E8B57 link="green"><!--Тэг"body" открывает часть страницы,которую видит пользователь, атрибут "bgcolor" служит для задания цвета фона страницы-->
<a href="https://vk.com/silverlight89"><img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="http://www.stihi.ru/avtor/andreyvilyavdo">
<img src="https://vk.com/silverlight89?z=photo92883219_424764923%2Fphotos92883219" width="25%" height="40%" alt="Автора!"></a>
<a href="http://www.stihi.ru/avtor/andyvi"><img src="AXReYo7wbA4.jpg" width="20%" height="40%" alt= "На Бис!"></a>
<a href="https://vk.com/ot_nepoeta"><img src=group.jpg width="20%" height="40%" alt="группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg"><img src=Channel.jpg width="20%" height="40%" alt="канал"></a>
<!--изображение, как ссылка-->
<h3 align="center"><!--так задётся новый абзац с выравниванием по центру страницы-->Там, где кончается белая ночь…</h3><!--это-тег,ограничивающий абзац--> 
<p align="center">Там, где кончается белая ночь,</p>
<p align="center">День прячет разные сны до рассвета.</p>
<p align="center">Так, но и он ускользает прочь,</p>
<p align="center"> Скрыв свои многие лица где-то. </p>
<br><!--так задаётся пропуск одной строки-->
<p align="center"> Спрятавшись в дебрях своих забот,</p>
<p align="center">Я и спешу, и грешу, и рискую…</p>
<p align="center">Кажется, шаг – и мечта придет,</p>
<p align="center">И, может, ее  я нашел, такую,</p>
<br>
<p align="center">С которой бы я начинал новый день,</p>
<p align="center">А прежние беды навек забывались…</p>
<p align="center">И вместе бы мы с ней мечтали о дне,</p>
<p align="center">Где лучшие сны сбывались!</p>
<iframe width="570" height="321" src="https://youtube.com/embed/zJWoXQe5IqI" allowfullscreen></iframe>
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
    <input type="hidden" name="page_id" value="2" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 2;// Уникальный идентификатор страницы (статьи или поста)
   $mysqli = new mysqli("localhost", "u0154084_1989", "P4Hra34E2qkQhea", "u0154084_1989");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }?>
<form action=upload.php method=post enctype=multipart/form-data>
<input type=file name="uploadfile">
<input type=submit value="Загрузить"></form>
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