<?php  

//************** While loop****************

$i = 1;

while ($i < 6) {
  echo $i;         // output = 12345
  $i++;
} 
echo "<br>";

//break Statement
$j = 1;

while ($j < 6) {
  if ($j == 3) break;  
  echo $j;     // output = 1 2
  $j++;
} 
echo "<br>";

// continue Statement
$z = 0;

while ($z < 6) {
  $z++;
  if ($z == 3) continue;  
  echo $z;         // output = 1 2 4 5 6
} 
echo "<br>";


//*************** do while Loop ****************

$p = 1;

do {
  echo $p;         // output = 1 2 3 4 5
  $p++;
} while ($p < 6);
echo "<br>";

// break Statement
$q = 1;

do {
  if ($q == 3) break;
  echo $q;            // output = 1 2
  $q++;
} while ($q < 6);
echo "<br>";

// continue Statement
$r = 0;

do {
  $r++;
  if ($r == 3) continue;
  echo $r;                 // output = 1 2 4 5 6
} while ($r < 6);
echo "<br>";

// ************** for loop*****************

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
 
for ($y = 10; $y >= 0; $y--) {
  echo "The number is: $y <br>";
}

//  break Statement

for ($z = 0; $z <= 10; $z++) {
  if ($z == 3) break;
  echo "The number is: $z <br>";
}

// continue Statement

for ($t = 0; $t <= 10; $t++) {
  if ($t == 3) continue;
  echo "The number is: $t <br>";
}

// ************** foreach***************

// Indexed Arrays

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {      // $colors is the array name 
  echo "$value <br>";            //  //$value is my own variable which print output one by one
}

// Associative Arrays

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $key => $value) {
  echo "$key : $value <br>";
}

/*foreach = Array-এর প্রতিটি element-এর ওপর loop চালায়।

$members = যে array-এর ওপর loop চলবে।

$key = প্রতিবার একটি করে key গ্রহণ করবে।

=> = Key এবং Value-কে আলাদা করে।

$value = প্রতিবার একটি করে value গ্রহণ করবে।

echo = Key এবং Value দুটোই print করবে।

<br> = নতুন লাইন তৈরি করবে।

*/

// Objects

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;   // key
    $this->model = $model;    // key
  }
}

$myCar = new Car("red", "Volvo");   // value

foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}

/*
foreach = Object-এর accessible properties-এর ওপর loop চালাচ্ছে।

$myCar = যে Object-এর property পড়বে।

$x = Property-এর নাম গ্রহণ করবে।

$y = Property-এর value গ্রহণ করবে।

echo = Property এবং Value print করবে।

<br> = নতুন লাইন তৈরি করবে।
*/

/*
Class: একটি blueprint।

Object: Class থেকে তৈরি হওয়া instance।

Property: Object-এর variable।

Constructor: Object তৈরি হওয়ার সময় automatically execute হয়।

$this: বর্তমান Object-কে নির্দেশ করে।

foreach: Object-এর accessible properties একে একে বের করে।
*/


?> 