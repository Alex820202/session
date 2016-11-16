<?php
session_start();
if(!empty($_POST)){
	$name = trim(strip_tags($_POST['name']));
	$surname = trim(strip_tags($_POST['surname']));
	$password = trim(strip_tags($_POST['password']));
	
}else{
	$name = '';
	$surname = '';
	$password = '';
	
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Персональные данные</title>
   <meta charset="utf-8">
 </head>
 <body>
 <form action="form.php" method="post">
 	<p><label>Введите Ваше имя</label></p>
 	<p><input type="text" placeholder="Имя" value="<?php echo $name; ?>" name="name"/></p>
 	<p><label>Введите Вашу фамилию</label></p>
 	<p><input type="text" placeholder="Фамилия" value="<?php echo $surname; ?>" name="surname"/></p>
 	<p><label>Введите Ваш пароль</label></p>
 	<p><input type="password" placeholder="пароль" value="<?php echo $password; ?>" name="password"/></p>
 	<p><label>Введите Ваш e-mail</label></p>
 	<p><input type="email"  value="<?php echo $_SESSION['mail']; ?>" name="mail" disabled/></p>
 	<p><input type="submit" value="Отправить"/></p>
 </form>
 </body>
 </html>
