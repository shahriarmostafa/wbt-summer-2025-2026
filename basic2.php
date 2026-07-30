<?php

//task 1


$principal = 10000;
$rate = 5;
$time = 3;

$simpleInterest = ($principal * $rate * $time) /100;

echo $simpleInterest;



//task2
$number =29;
$isPrime = true;

if($number < 2){
	$isPrime = false;
}
else {
	for ($i = 2; $i <= sqrt($number); $i++){
		if ($number % $i) == 0){
			$isPrime = false;
			break;
		}
	}
	
echo $isPrime;}

//task 3
$n= 6;
$factorial = 1;


for ($i = 1; $i <=n; i++){
	$factorial *= $i;
}

$echo $factorial;

//task 4
$arr = [12, 45, 7, 89, 34, 56, 3];
$sum = 0;

for ($i = 0; $i < count($arr); i++){
	$sum += $arr[$i];
}

$average = $sum / count($arr)
echo $sum;
echo $average;


//task 5

for($i = 1; $i <= 4; $i++){
	for($j = 1; $j < $i; $j++){
		echo $i;
	}
	echo "<br>"
}

?>









