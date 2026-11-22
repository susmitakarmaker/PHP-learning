<?php

// Arithmetic Operators

$x = 10;  
$y = 6;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";
echo $x ** $y . "<br>";

// Assignment Operators

$x = 10;  
echo $x . "<br>";

$x = 20;  
$x += 100;

echo $x ."<br>";

$y = 50;
$y -= 30;

echo $y."<br>";

$z = 5;
$z *= 6;

echo $z."<br>";

$p = 10;
$p /= 5;

echo $p ."<br>";

// Comparison Operators

$a = 100;  
$b = "100";

var_dump($a == $b);   // returns true because values are equal
echo "<br>";
var_dump($a === $b);   // // returns false because types are not equal
echo "<br>";

$c = 100;
$d = 50;

var_dump($c > $d); // returns true because $c is greater than $d
echo "<br>";
var_dump($c <= $d);  // returns false because $c is not less than or equal to $d 
echo "<br>";

// Increment / Decrement Operators

$t = 10;  
echo ++$t ."<br>" ;  // increase 1 , output = 11
echo $t++ ."<br>";   // present $t = 11 , output = 11 , increase 1
echo --$t ."<br>";   // now $t = 12 , decrease 1 , output = 11
echo $t-- ."<br>";   // $t = 11 , Output = 11 , decrease 1

$v = 5;

echo $v++ . "<br>";  // 5
echo ++$v . "<br>";  // 7
echo $v-- . "<br>";  // 7
echo --$v . "<br>";  // 5

// Logical Operators

$e = 100;  
$f = 50;

if ($e == 100 && $f == 50) {
    echo "Hello world!"  . "<br>";
}

if ($e == 100 || $f == 80) {
    echo "Hello world!" . "<br>";
} 

if (!($e == 90)) {
    echo "Hello world!";
}

?>