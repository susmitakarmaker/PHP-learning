<?php

//if Statement

$t = 14;
if ($t > 3) {
  echo "Have a good day!" . "<br>";
}

$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote." . "<br>";  // output
} else {
    echo "You are not eligible to vote." . "<br>";
}

$age = 16;

if ($age >= 18) {
    echo "Adult";
} else {
    if ($age >= 13) {
        echo "Teenager" . "<br>";  // output = Teenager
    } else {
        echo "Child" . "<br>";
    }
}

$marks = 75;

if ($marks >= 80) {
    echo "A+". "<br>";
} elseif ($marks >= 70) {
    echo "A". "<br>";
} elseif ($marks >= 60) {
    echo "B". "<br>";
} else {
    echo "Fail". "<br>";
}

$a = 9;

$b = $a < 10 ? "Hello" : "Good Bye";  // Condition ? True : False

echo $b;

?>