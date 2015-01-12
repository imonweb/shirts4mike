<?php 

// $numbers = array(1,2,3,4);
// $total = count($numbers);
// $sum = 0;
// $output = "";
// $i = 0;
// foreach($numbers as $number){
// 	$i = $i + 1;
// 	if ($i < $total){
// 		$sum = $sum + $number;
// 	}
// }

// echo $sum;

// $x = 1;
// function sum_two_numbers($x,$y) {
// 	$z = $x + $y;
// 	return $z;
// }
// $y = sum_two_numbers(2,3);
// echo $y;
$numbers = array(1,2,3,4);
$total = count($numbers);
$sum = 0;
$output = "";
$i = 0;
foreach($numbers as $number){
	$i = $i + 1;
	if ($i < $total){
		$output = $number .$output;
	}
}
echo $output;

 
// function mimic_array_sum($array){
//   $sum = 0;
//   foreach($array as $number){
//      $sum = $sum + $number;
//   } return $sum;
// }
 
// $palindromic_primes = array(11, 757, 16361);
// $sum = array_sum($palindromic_primes);
// echo $sum;
?>