<?php
	$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3, 'd' => 4, 'e' => 5]; 

    $x=[];
    $y=[];

    foreach ($arr as $key => $elem) {
        $x[]=$key;
        $y[]=$elem;

    }
    var_dump($x);
    echo '<br>';
    var_dump($y);
?>