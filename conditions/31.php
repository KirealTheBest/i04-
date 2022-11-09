<?php
//31.1
	$num1 = 2;
	$num2 = 3;
	
	if ($num1 > 0 and $num1 < 5) {
		echo '+';
	} else {
		echo '-';
	}

echo '<br>';

//31.2
	$num1 = 9;
	$num2 = 3;
	
	if ($num1 >= 10 and $num1 <= 20) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.3
	$num1 = 9;
	$num2 = 3;
	
	if ($num1 <= 1 and $num2 >= 3) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.4 выведется -, т.к обе переменные меньше 0
	$num1 = -10;
	$num2 = -10;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.5 выведется +
	$num1 = 0;
	$num2 = 0;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.6 выведется +
	$num1 = 0;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+';
	} else {
		echo '-';
	}

     echo '<br>';

//31.7 выведется +
	$num1 = 5;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.8 выведется +
	$num1 = -5;
	$num2 = 15;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.9 выведется +, т.к соответствует второму условию
	$num = 1;
	
	if ($num == 0 or $num == 1) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.10 выведется -
	$num = 2;
	
	if ($num == 0 or $num == 1) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.11 выведется +
	$num = 2;
	
	if ($num == 0 or $num == 1 or $num == 2) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.12 выведется -
	$num = 3;
		
	if (($num > 5 and $num < 10) or ($num == 20)) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.13 выведется -
	$num = 3;
		
	if (($num > 5) or ($num > 0 and $num < 3)) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//31.14 выведется -
	$num = 3;
		
	if (($num == 9) or ($num > 10 and $num 
		< 20) or ($num > 20 and $num < 30)) { 
		echo '+';
	} else {
		echo '-';
	}
?>