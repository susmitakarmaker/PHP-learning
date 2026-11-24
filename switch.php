<?php
$favcolor = "pink";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!" ."<br>";
    break;
  case "pink":
    echo "Your favorite color is pink!" ."<br>";   // output
    break;
  case "green":
    echo "Your favorite color is green!" ."<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!"."<br>";
}


$color = "red";

switch ($color) {
  case "red":
    echo "Your favorite color is red!"."<br>";  // output
    
  case "blue":
    echo "Your favorite color is blue!"."<br>";    // output
    break;
  case "green":
    echo "Your favorite color is green!"."<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!"."<br>";
}

//  If you forget break, PHP continues executing the following cases. This behavior is called fall-through .

$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday"."<br>";
    break;
  case 0:
    echo "Today is Sunday"."<br>";
    break;
  default:
    echo "Looking forward to the Weekend"."<br>";  // output
}

$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!"."<br>";   // output
    break;
  case 6:
  case 0:
    echo "Weekends are best!"."<br>";
    break;
  default:
    echo "Something went wrong"."<br>";
}


?>