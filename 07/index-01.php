<?php
session_start();
if(!empty($_POST)){
	$_SESSION['answer-01'] = trim(strip_tags($_POST['1']));
	header('Location: index-02.php', TRUE, 303);
}
//var_dump($_SESSION['1']);
?>
<!DOCTYPE html>

<html>
 <head>
   <title>Задача 1</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<form action="" method="post">
 		<p><b>Каким тегом обозначаются заголовки первого уровня?</b></p>
 		<p><input type="radio" name="1" value="h1"/><label>h1</label></p>
 		<p><input type="radio" name="1" value="html"/><label>html</label></p>
 		<p><input type="radio" name="1" value="img"><label>img</label></p>
 		<p><input type="submit" value="Ответить"></p>
 	</form>
 	</body>
 </html>