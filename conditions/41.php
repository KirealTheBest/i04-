<?php
//41.1
	$num = 3;
	var_dump( $result = $num >= 0 ? 1: -1 );
?>

<?php
//42.1
echo '<br>';
	$user = ['name' => 'john', 'age' => 0]; 
	var_dump(isset($user['name'])) ? $test['name']: 'unknown';
?>
<?php
//42.2
echo '<br>';
		$result = $user['name'] ?? $user['surname']	?? ''; 
?>
<?php
//43.1
	$a = 2 * (3 - 1);
	$b = 6 - 2;
	var_dump($a == $b);
?>
<?php
//43.2
echo '<br>';
	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
	var_dump($a > $b);
?>
<?php
//43.3
echo '<br>';
	$a = 2 ** 4;
	$b = 4 ** 2;
	var_dump($a != $b);
?>
