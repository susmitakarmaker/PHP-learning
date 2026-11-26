<?php

/*A function is a block of code designed to perform a particular task . 
Functions are used to 
1. Increase the readability of program . 
2. To perform a task in repetitive manner . 
*/

// ***************** Call a Function ***************
function myMessage(){
    echo "Hello world .<br>";
}
myMessage();

// ********** Function Parameters ***********

function familyname($name) {
    echo "$name Karmaker .<br>";
}
familyname("Swapan");
familyname("Rita");
familyname("Hema");
familyname("Susmita");

// ******************* Default Parameter Value ****************

function setHeight($height = 50) {
  echo "The height is : $height.<br>";
}

setHeight(350);
setHeight();     // will take the default value of 50

// ************* Functions with Returning values *******************

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";

// ************** Functions with arguments ***************

function add($num1,$num2) { 
    echo $num1+$num2 . "<br>"; 
}
add(20,30); 
add(100,200); 



?>