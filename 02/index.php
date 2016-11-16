<?php
session_start();

if(!isset($_SESSION['start'])){
	$_SESSION['start'] = time();
}
$result = time() - $_SESSION['start'];
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Страна</title>
   <meta charset="utf-8">
 </head>
 <body>
 <p>Вы находитесь на сайте <b><?php echo $result; ?></b> секунд.</p>
 </body>
 </html>
