<?php
session_start();
if (!empty($_POST)){
	$_SESSION['land'] = trim(strip_tags($_POST['land']));
	header('Location: test.php', TRUE, 303);
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Страна</title>
   <meta charset="utf-8">
 </head>
 <body>
 <form action="index.php" method="post">
 	<p><input type="text" placeholder="Введите страну проживания" name="land"/></p>
 	<p><input type="submit" value="Отправить"/></p>
 </form>
 </body>
 </html>