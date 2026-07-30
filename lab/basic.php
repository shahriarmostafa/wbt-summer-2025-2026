<?php
 //task 1
$length = 10;
$width  = 5;
$area      = $length * $width;
$perimeter = 2 * ($length + $width);
 
echo $area;
echo $perimeter;
 
 
//task 2
 
$amount = 2000;
$vat    = $amount * 15 / 100;   // 15% VAT
$total  = $amount + $vat;
 

echo $total;
 
 
//task 3
 
$number = 27;
 
if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
 
//task4

 
$a = 25;
$b = 47;
$c = 33;
 
 
if ($a >= $b && $a >= $c) {
    echo $a;
} else if ($b >= $a && $b >= $c) {
    echo $b;
} else {
    echo $c;
}
 
 
//task5
 
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i;
        echo "<br>";
    }
}
 
 
//task 6
 
$numbers = array(12, 45, 8, 33, 27, 60, 19);
$search  = 33;
$found   = false;
$index   = -1;
 

 
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        $index = $i;
        break;
    }
}
 
if ($found) {
    echo "Found";
} else {
    echo "Not Found";
}
 
 
//task 7
 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
 
 

 
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
 
 
 
$alpha = 'A';                 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ($alpha) . " ";
        $alpha++;          
    }
    echo "<br>";
}
?>