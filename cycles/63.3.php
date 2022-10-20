<?php
	$arr = [1 => 6, 2 => 7, 3 => 8, 
		4 => 9, 5 => 10]; 
    $x=0;
    $y=0;

    foreach ($arr as $key => $elem) {
        $x += $key;
        $y += $elem;
    }
echo $x / $y
?>