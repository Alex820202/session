<?php
session_start();
if(!empty($_POST)){
	$_SESSION['age'] = trim(strip_tags($_POST['age']));
	$_SESSION['city'] = trim(strip_tags($_POST['city']));
	header('Location: form.php', TRUE, 303);
}

?>
<!DOCTYPE html>
<html>
 <head>
   <title>Задача 5</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<form action="index.php" method="post">
 	<p><label>Введите Ваш возраст</label></p>
 	<p><input type="text" name="age"/></p>
 	<p><label>Введите Ваш город</label></p>
 	<p><input type="text" name="city"/></p>
 	<p><input type="submit" value="Отправить"/></p>
 	</form>
 	</body>
 </html>