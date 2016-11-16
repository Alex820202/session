<?php
session_start();
$answer = array(1=>'h1','img','a');
?>
<!DOCTYPE html>

<html>
 <head>
   <title>ОТВЕТЫ</title>
   <link rel="stylesheet" href="01.css">
   <meta charset="utf-8">
 </head>
 	<body>
 	<p>Ответы:</p>
 	<?php for($i=1;$i<=3;$i++){
		if($_SESSION['answer-0'.$i]==$answer[$i]){
			$now = '';
			$class = 'active';
		}else{
			$now='не';
			$class = 'passive';
		}
		echo '<p class='.$class.'>На '.$i.'-й вопрос Вы ответили '.$now.' правильно.</p>';
	}
 	?>
 	</body>
 </html>