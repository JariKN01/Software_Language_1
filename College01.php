<?php
require 'functions/function.php';

echo "<h3>Variable maken</h3>";
// Variable maken
$name = 'Jari';
$age = 21;
$isMarried = false;
$dob = date('2,11,2001');
$postcode = "1336KT";
$city = "Almere";
$speaksDutch = true;
$email = "jari@gmail.com";
$number = "06" . "12345678";
$skills = "webdevelopment";

// datum format veranderen naar dag-maand-jaar
$newDob = date('d-m-Y', strtotime(str_ireplace(',','-', $dob)));
$dobVeranderd = date('d, F Y', strtotime($newDob));

echo "Naam is:  ".$name."<br>";
echo "Leeftijd is: ".$age."<br>";
echo "Mailadres is; ".$email."<br>";
echo "Getrouwd: ".$isMarried;
// if statement om te checken of persoon getrouwd is
if ($isMarried == false){
    echo "single". "<br>";
} else {
    echo "Getrouwd"."<br>";
}
echo "Geboren is op: ".$dobVeranderd."<br>";
echo "Aders is: " . $postcode . " " . $city;

