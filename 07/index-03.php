<?php
session_start();
if(!empty($_POST)){
	$_SESSION['answer-03'] = $_POST['3'];
	header('Location: answer.php', TRUE, 303);
}
?>
<!DOCTYPE html>

<html>
 <head>
   <title>Задача 3</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<form action="" method="post">
 		<p><b>Каким тегом обозначаются ссылки?</b></p>
 		<p><input type="radio" name="3" value="a"/><label>a</label></p>
 		<p><input type="radio" name="3" value="input"/><label>input</label></p>
 		<p><input type="radio" name="3" value="img"><label>img</label></p>
 		<p><input type="submit" value="Ответить"></p>
 	</form>
 	</body>
 </html>