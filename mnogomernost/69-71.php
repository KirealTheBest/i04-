<?php
//69.1
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
    echo $arr[3][2]; 
	echo $arr[1][1];
    echo $arr[2][0];
    echo $arr[0][0];
?>
<?php
//69.2
	$arr = [[1, 2], [3, 4], [5, 6]];
    $sum = 0;
    $sum += $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];
    echo $sum;
?>
<?php
//69.3
    $sum = 0;
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
    $sum += $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] +  + $arr[1][1][0] +  + $arr[1][1][1];
    echo $sum;
?>
<?php
//69.4
	$arr = [
		'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
		'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	];
    echo $arr['boys'][1].'<br>';
    echo $arr['girls'][1];
?>
<?php
//69.5
	$arr = [
		'ru' => ['пн', 'вт', 'ср', 'чт', 
			'пт', 'сб', 'вс'], 
		'en' => ['mn', 'ts', 'wd', 'th', 
			'fr', 'st', 'sn'], 
	];
    echo $arr['en'][2]
?>
<?php
//69.6
    $sum = 0;
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
    $sum += $arr[0]['salary'] + $arr[2]['salary'];
    echo $sum;
?>
<?php
//69.7
    $sum = 0;
	$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
    $sum += $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
    echo $sum
?>
<?php
//70.1
    $sum = 0;
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			$sum += $elem;
		}
	}
    echo $sum;
?>
<?php
//70.2
    $sum = 0;
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
    foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				$sum += $elem;
			}
		}
	}
    echo $sum;
?>
<?php
//70.3
    $sum = 0;
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
    foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				$sum += $elem;
			}
		}
	}
    echo $sum;
?>
<?php
//70.4
$arr = [
    'group1'  => ['user11', 'user12', 
        'user13', 'user43'], 
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key1 . ' - ' . $elem . '<br>'; 
    }
}
?>
<?php
//71.1
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 5; $j++) {
			$arr[$i][$j] = $j + 1; 
		}
	}
	
	var_dump($arr);
?>
<?php
//71.2
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 4; $j++) {
			$arr[$i][$j] = 'x'; 
		}
	}
	
	var_dump($arr);
?>
<?php
//71.3
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
        $arr[$i] = [];
		for ($j = 0; $j < 2; $j++) {
            $arr[$i][$j] = []; 
			    for ($n = 0; $n < 5; $n++) {
                $arr[$i][$j][$n] = $n + 1; 
		        }
        }
	}
	
	var_dump($arr);
?>
<?php
//71.4
	$arr = [];
	
	for ($i = 0, $k = 1; $i < 4; $i++) {
		for ($j = 0; $j < 2; $j++, $k++) {
			$arr[$i][$j] = $k;
		}
	}
	
	var_dump($arr);
?>
<?php
//71.5
	$arr = [];
	
	for ($i = 0, $k = 2; $i < 4; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k;
            $k += 2;
		}
	}
	
	var_dump($arr);
?>
<?php
//71.6
	$arr = [];
    for ($i = 0, $k = 1; $i < 2; $i++) {
		$arr[$i] = [];
		for ($j = 0; $j < 2; $j++) {
			$arr[$i][$j] = [];
			for ($n = 0; $n < 2; $n++) {
			$arr[$i][$j][$n] = $k++;
			}
		}
	}
	
	var_dump($arr);
?>
<?php
//72.1
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
    foreach ($products as $product) {
        echo " продукт: ". $product['name']. ', цена: ' . $product['price']. ', количесвто: ' . $product['amount'].'<br>';
    }
?>
<?php
//72.2
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
        [
            'name' => 'конфеты',
            'price' => 1,
            'amount' => 100,
        ]
	];
    foreach ($products as $product) {
        echo " продукт: ". $product['name']. ', цена: ' . $product['price']. ', количесвто: ' . $product['amount'].'<br>';
    }
?>
<?php
//73.1
$citys = [
            [
                'country' => 'Россия',
                'city' =>    'Москва',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Минск',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Питер',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Владивосток',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Львов',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Могилев',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Киев',
            ],
        ];
$result = [];
foreach ($citys as $city) {
    $result[$city['country']][] = $city['city'];
}
print_r($result);
?>
<?php
//73.2
$citys = [
            [
                'country' => 'Россия',
                'city' =>    'Москва',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Минск',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Питер',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Владивосток',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Львов',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Могилев',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Киев',
            ],
        ];
$result = [];
foreach ($citys as $city) {
    $result[$city['country']][] = $city['city'];
}
print_r($result);
?>
<?php
//73.3
$dates = [
	'2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
	'2019-12-30'=> ['name5', 'name6', 'name7'],
	'2019-12-31'=> ['name8', 'name9'],
];
$result = [];
	
foreach ($dates as $date => $events) {
    foreach ($events as $event) { 
    $result[] = [
        'date' => $date,
        'event' => $event
    ];
}
}

var_export($result);
?>