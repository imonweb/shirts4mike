<?php

function mimic_count($array){
	
	$count = 0;
	foreach($array as $element){
		$count = $count + 1;
	}
	return $count;
}

$flavors = array("Vanilla","Chololate","Strawberry","Cookie Dough");
$count = mimic_count($flavors);
echo $count;




// $numbers = array(1,5,8);

// $sum = array_sum($numbers);
// foreach($numbers as $number) {
//     $sum = $sum + $number;
// }

// echo $sum;



?>