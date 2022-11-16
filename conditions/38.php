<?php
//38.1
	$min = 41;
	
	if ($min >= 0 and $min <= 19) {
		echo '1 треть';
	}
	
	if ($min >= 20 and $min <= 39) {
		echo '2 треть';
	}
	
	if ($min >= 40 and $min <= 59) {
		echo '3 треть';
	}
    echo '<br>';
?>
<?php
//38.2
	$arr = '12';
	
	if (strlen($arr) <= 3) {
		echo '!';
	}
    echo '<br>';
?>
<?php
//38.3
	$a = 122;
    if ($a % 2 === 0) {
        echo 'Число четное';
    } else {
        echo 'число нечетное';
    }
    echo '<br>';
?>
<?php
//38.4
	$a = 66;
    if ($a % 3 === 0) {
        echo 'Число делится на 3';
    } else {
        echo 'число не делится на 3';
    }

?>