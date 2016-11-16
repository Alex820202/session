<?php
session_start();
if(!empty($_POST)){
	$_SESSION['answer-02'] = $_POST['2'];
	header('Location: index-03.php', TRUE, 303);
}
?>
<!DOCTYPE html>

<html>
 <head>
   <title>Задача 2</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<form action="" method="post">
 		<p><b>Каким тегом обозначаются изображения?</b></p>
 		<p><input type="radio" name="2" value="H1"/><label>h1</label></p>
 		<p><input type="radio" name="2" value="html"/><label>html</label></p>
 		<p><input type="radio" name="2" value="img"><label>img</label></p>
 		<p><input type="submit" value="Ответить"></p>
 	</form>
 	</body>
 </html>