<?php
//30.1 выведется +
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 == $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.2 выведется +
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 === $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.3 выведется +, т.к знак сравнивает только значения
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 == $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.4 выведется -, т.к тип данных не совпадает
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 === $test2) {
		echo '+';
	} else {
		echo '-';
	}

    echo  '<br>';

//30.5 выведется +
	$test1 = 3;
	$test2 = 3;
		
	if ($test1 === $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.6 выведется -
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 != $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.7 выведется -, т.к числа и их тип данных одинаковы
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 !== $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.8 выведется -, т.к оператор сравнивает только значения, а они равны
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 != $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.9 выведется +, т.к оператор сравнивает еще тип данных, а он разный
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 !== $test2) {
		echo '+';
	} else {
		echo '-';
	}

echo  '<br>';

//30.10 выведется +, значения имеют одинаковый тип данных, они не равны
	$test1 = 3;
	$test2 = 2;
		
	if ($test1 !== $test2) {
		echo '+';
	} else {
		echo '-';
	}
?>