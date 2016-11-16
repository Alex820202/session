<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Страна</title>
   <meta charset="utf-8">
 </head>
 <body>
 <p>Ваша страна <b><?php echo $_SESSION['land']; ?></b></p>
 </body>
 </html>