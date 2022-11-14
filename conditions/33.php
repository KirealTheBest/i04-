<?php
//33.1
	$test = true;
	
	if ($test === true) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.2
	$test = true;
	
	if ($test === false) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.3 выведется +
	$test = 1;
		
	if ($test == true) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.4 выведется -
	$test = 0;
		
	if ($test == true) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.5 выведется -
	$test = 1;
		
	if ($test == false) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.6 выведется -
	$test = 1;
		
	if ($test != true) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.7 выведется +
	$test = '';
		
	if ($test == false) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.8 ничего не выведется, нет заданного значения
//      test;
		
//      if (test == true) {
//	    echo '+';
//	    } else {
//		echo '-';
//	    }

//33.9 
	$test = true;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.10 выведется -
	$test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.11 выведется -
	$test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.12 выведется +
	$test = true;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.13 выведется +
	$test = 3;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.14 выведется +
	$test = 'abc';
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.15 выведется -
	$test = '';
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.16 ничего не выведется т.к  число умножается на строку
//	$test = 3 * 'abc';
//	
//	if ($test) {
//		echo '+';
//	} else {
//		echo '-';
//	}
//
//  echo '<br>';

//33.17 выведется -
$test = null;
	
if ($test) {
    echo '+';
} else {
    echo '-';
}

    echo '<br>';

//33.18 выведется -
	$test = false;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.19 выведется -, т.к нет заданной переменной, т.е $test = 0
	$test;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.20 выведется -
	$test = 0;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.21 выведется -
	$test = '0';
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

    echo '<br>';

//33.22 выведется +
	$test = -1;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}
?>