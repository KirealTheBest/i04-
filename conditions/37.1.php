<?php
//37.1
	$day = 10; 
	
	if ($day > 0 and $day <= 10) {
		echo 'Первая декада';
	}
	
	elseif ($day > 10 and $day < 20) {
		echo 'Вторая декада';
	}
	
	else 
		echo 'Третья декада';
    echo '<br>'
?>