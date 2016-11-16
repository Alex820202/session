<?php
session_start();
if(!isset($_SESSION['count'])){
	$message = 'Вы еще не обновляли страницу сайта!';
	$_SESSION['count'] = 0;
}else{
	$_SESSION['count']++;
	$message  = 'Вы обновили страницу '.$_SESSION['count'].' раз.';
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Счетчик</title>
   <meta charset="utf-8">
 </head>
 	<body>
 	<p><?php echo $message; ?></p>
 	</body>
 </html>
