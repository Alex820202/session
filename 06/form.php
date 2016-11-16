<?php
session_start();

?>
<!DOCTYPE html>
<html>
 <head>
   <title>Задача 5</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<form action="index.php" method="post">
 	<p><label>Введите Ваше имя</label></p>
 	<p><input type="text" name="name"/></p>
 	<p><label>Введите Ваш возраст</label></p>
 	<p><input type="text" name="age" value="<?php echo $_SESSION['age'];?>"/></p>
 	<p><label>Введите Ваш город</label></p>
 	<p><input type="text" name="city" value="<?php echo $_SESSION['city'];?>"/></p>
 	<p><input type="submit" value="Отправить"/></p>
 	</form>
 	<p><a href="logout.php">Очистить форму</a></p>
 	</body>
 </html>