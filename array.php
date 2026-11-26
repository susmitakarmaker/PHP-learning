<?php

// ********** Indexed Arrays ************
$cars = array("Volvo", "BMW", "Toyota" ); 
var_dump($cars);
echo "<br>";

echo $cars[0] . "<br>";
echo $cars[1]. "<br>";
echo $cars[2]. "<br>";

$cars[1] = "Ford";

// foreach → Array-এর সব item একটার পর একটা দেখাতে।

foreach ($cars as $car) {
    echo $car . "<br>";
}

// ***************** Associative Arrays ***************

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"]. "<br>";     // output = Mustang

$car["year"] = 2024;

foreach ($car as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

// ****************** Delete Array Items ****************

/* array_splice() - removes a portion of the array starting from a start position and length
unset() - removes the element associated with a specific key
array_diff() - remove items from an associative array
array_pop() - removes the last array item
array_shift() - removes the first array item
*/

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);        // Index 1 থেকে শুরু করে ১টি item সরিয়ে দেবে। ---- Index নতুন করে সাজিয়ে দেয়
var_dump($cars);
echo "<br>";

unset($cars[0]);   // Item Delete করে, কিন্তু বাকি Index আগের মতো রাখে
var_dump($cars);
echo "<br>";

// *************** Sorting Arrays *********************

/*
sort() - sorts an indexed array in ascending order
rsort() - sorts an indexed array in descending order
asort() - sorts an associative array in ascending order, according to the value
ksort() - sorts an associative array in ascending order, according to the key
arsort() - sorts an associative array in descending order, according to the value
krsort() - sorts an associative array in descending order, according to the key
*/

$carss = array("Volvo", "BMW", "Toyota");
sort($carss);
print_r($carss);
echo "<br>";

rsort($carss);
print_r($carss);


?>