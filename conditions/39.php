<?php
//39.1
	$month = 12;
    if ($month == 1 or $month == 2 or $month == 12){
        echo 'Зима';
    }
    elseif ($month == 3 or $month == 4 or $month == 5){
        echo 'Весна';
    }
    elseif ($month == 6 or $month == 7 or $month == 8){
        echo 'Лето';
    }
    elseif ($month == 9 or $month == 10 or $month == 11){
        echo 'Осень';
    }
    else {
        echo 'Ошибка';
    }
    echo '<br>';
?>
<?php
//39.2
    $x = 'abcde';
    if ($x[0] == 'a') {
        echo 'Первым символом является a';
    }
    else {
        echo 'а не является первым символом';
    }
    echo '<br>';
?>
<?php
//39.3
    $x = '12345';
    if ($x[0] == 1 and $x[1] == 2 and $x[2] == 3) {
        echo '+';
    }
    echo '<br>';
?>
<?php
//39.4
    $x = '627';
    echo $x[0] + $x[1] + $x[2];
    echo '<br>';
?>
<?php
//39.5
    $z = '143143';
    $x = $z[0] + $z[1] + $z[2];
    $y = $z[3] + $z[4] + $z[5];
    if ( $x == $y){
        echo 'равны';
    }
    else {
        echo 'не равны';
    }
    echo '<br>';
?>