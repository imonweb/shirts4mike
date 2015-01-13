<?php
#multi dimentional array
// $food = array(
// 	'Dairy' => 'Cheese',
// 	'Fruit' => 'Apple',
// 	'Bread',
// 	'Yogurt',
// 	'Fish' => array (
// 		'Salmon',
// 		'Pike',
// 		'Bass'
// 		)
// 	);
// foreach($food as $key => $value)
// {
// 	if (is_array($value)){
// 		foreach($value as $k => $a)
// 		{
// 			echo $k . ' ' $a . '<br />';
// 		}
// 	}
// }

# quiz no.1
$numbers = array(1,2,3,4);
$total = count($numbers);
$sum = 0;
$output = " ";
$i = 0;
foreach($numbers as $key => $number){
	echo $key . $number . "<br />";
	$i = $i + 1;
	if ($i < $total) {
		$sum = $sum + $number;
	}
}
echo $sum

// answer:
?>