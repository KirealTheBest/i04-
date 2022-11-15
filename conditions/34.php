<?php
//34.1 выведется +
	$test = 0;
	
	if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}

	echo '<br>';

//34.2 выведется +
	$test = null;
	if (!isset($test)) {
		echo '+';
	} else {
		echo '-';
	}

	echo '<br>';

//34.3 выведется -
	$test = null;
	
	if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}

		echo '<br>';

//34.4 выведется -
	$test = null;
	
	if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}

	$arr = [1, 2, 3, 4, 5];
	
	if (isset($arr[])) {
		echo '+';
	} else {
		echo '-';
	}

//34.5 "+"
//34.6 "+"
//34.7 "+"
//34.8 "-"
?>