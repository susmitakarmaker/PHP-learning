<?php
echo(pi() . "<br>");

echo(min(0, 150, -8, -200) . "<br>");
echo(max(0, 150, -8, -200) . "<br>");

echo(abs(-6.7) . "<br>");   // returns the absolute (positive) value
echo(sqrt(64) . "<br>");   //  returns the square root

echo(round(3.60) . "<br>");   // rounds a floating-point number to its nearest integer
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60) . "<br>");

echo(rand(1, 10) . "<br>");   // random number

$a = rand(1, 10);
$b = rand(20, 30);

echo $a + $b ."<br>";  // Minimum + Minimum, Maximum + Maximum = Sum

$a = rand(10, 20);
$b = rand(5, 10);

echo $a - $b . "<br>";  // Minimum - Maximum, Maximum - Minimum = Sub

$a = rand(2, 5);
$b = rand(3, 8);

echo $a * $b. "<br>";  // 4 ti Combination check kore dekhte hobe

$a = rand(10, 20);
$b = rand(2, 5);

echo $a / $b. "<br>";   // 4 ti Combination check kore dekhte hobe


?>