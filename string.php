<?php

    echo strlen("Hello Kitty");  // length 11 ; space soho count
    echo "<br>";

    echo str_word_count("Hello Kitty");  // 2 word
    echo "<br>";

    $text = "I really love php";
    var_dump(str_contains($text, "love"));     // the string contains a specific word (true)
    echo "<br>";
    var_dump(str_contains($text, "Kitty"));    // false
    echo "<br>";

    echo strpos("Hello Kitty", "Kitty");    // word er position 6
    echo "<br>";

    $txt = "Never Give Up";
    var_dump(str_starts_with($txt, "Never"));   // word ti first a ace ki na = true
    echo "<br>";
    var_dump(str_starts_with($txt, "Give"));   // word ti last a ace ki na = false
    echo "<br>";

    echo strtoupper($txt);
    echo "<br>";

    echo strtolower($txt);
    echo "<br>";

    $x = "Hello Kitty";
    echo str_replace("Kitty","world",$x);
    echo "<br>";

    echo strrev($x);    //  reverses a string
    echo "<br>";

    $p = "Hello";
    $q = "World";
    $r = $p . $q;    // String Concatenation
    echo $r;
    echo "<br>";

    $s = 'We are the so-called \'Vikings\' from the north.';
    echo $s; 
    echo "<br>";

    $t = "We are the so-called \"Vikings\" from the north.";
    echo $t; 
    echo "<br>";

?>