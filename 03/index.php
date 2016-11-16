<?php
session_start();
if (!empty($_POST)){
	$_SESSION['mail'] = trim(strip_tags($_POST['mail']));
	header('Location: form.php', TRUE, 303);
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>E-mail</title>
   <meta charset="utf-8">
 </head>
 <body>
 <form action="index.php" method="post">
 	<p><label>Введите Ваш e-mail</label></p>
 	<p><input type="email" placeholder="e-mail" name="mail"/></p>
 	<p><input type="submit" value="Отправить"/></p>
 </form>
 </body>
 </html>
