<?php
//37.3

	$day = 33; 
	
	if ($day > 0 and $day <= 10) {
		echo 'Первая декада';
	}
	
	elseif ($day > 10 and $day < 20) {
		echo 'Вторая декада';
	}
	
	elseif ($day > 20 and $day <= 31){
		echo 'Третья декада';
    }
    else
		echo 'Увы столько дней не бывает!';
?>