<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!--Так можно задать кодировку страницы-->
  <link rel="stylesheet" type="text/css" href="style.css">
<title>Поэзия от НеПоэта.Автор: Андрей Вилявдо</title>	
</head>
<body bgcolor="2E8B57" link="#ffcc00" vlink="#00ff00">
<a href="https://vk.com/silverlight89">
<img src=Avtor.jpg width="20%" height="40%" alt= "я"></a>
<a href="https://vk.com/ot_nepoeta">
<img src=group.jpg width="20%" height="40%" alt= "группа"></a>
<a href="https://www.youtube.com/channel/UCH2YHdBObNbSaGMGN21NDvg">
<img src=Channel.jpg width="20%" height="40%" alt= "канал"></a>
<H4>Поэзия от НеПоэта.Автор: Андрей Вилявдо</H4>
<H5>Песня ветра</H5>

<p>Ветер принес издалека</p>
<p>Странный мотив городских дворов;</p>
<p>Хочется петь, вот только пока</p>
<p>Нет у меня ни нот, ни слов…</p>
<p>В этой тиши и темноте</p>
<p>Лишь приглядись – и увидишь ты:</p>
<p>Именно здесь, на этой черте</p>
<p>Сбудутся все мечты,</p>
<p>Те, что расскажешь, а может, и нет;</p>
<p>Те, что ведут ко мне,</p>
<p>И будет литься солнечный свет</p>
<p>По золотой души струне!</p>
<ul><li><a href="https://ridero.ru/books/stikhi_beloi_nochi"> Моя книга со стихами</a></li></ul>
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
    <input type="hidden" name="page_id" value="5" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php
  $page_id = 5;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
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
<ul class="menu"><li><button><a class="menu_a" href="page5.php">Звёздное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page6.php">Выбор дороги</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="index7.php">Весна</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page8.php">Она и он (полусказка) </a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page9.php">Типичное Питерское</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page10.php">Для тех, кто</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="Page11.php">Небо на всех</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page12.php">Рисунок Солнцем</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page13.php">Стихи на закате</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page14.php">Не ждущий</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page15.php">Облачное</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page16.php">Освети снега</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page17.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page18.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page19.php">Сотворить чудо</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="O_tishine.php">О тишине</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page20.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page21.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page22.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page23.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page24.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page25.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page26.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page27.php">***</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page28.php">Мечта</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page29.php">Осветить Мир</a></button></li></ul>	
<ul class="menu"><li><button><a class="menu_a" href="page31.php">К человеку пишущему</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page32.php">Экспромт по картине</a></button></li></ul>
<ul class="menu"><li><button><a class="menu_a" href="page33.php">Море. Формула счастья.</a></button></li></ul>	
</body>
</html>