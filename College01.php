<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 style="color: <?php echo backgroundColor(); ?>">Variabelen maken en kleur aanpassen</h1><hr>
<h2>Goeie <?php echo groet(); ?></h2><hr>
<?php

require 'functions/function.php';

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
if ($isMarried = false){
    echo "single". "<br>";
} else {
    echo "Getrouwd"."<br>";
}
echo "Geboren is op: ".$dobVeranderd."<br>";
echo "Aders is: " . $postcode . " " . $city."<br>";
echo "Vaardigheden: ".$skills."<br>";
// if statement om te checken of iemand nederlands spreekt
if ($speaksDutch = true){
    echo "Spreekt Nederlands" . "<br>";
} else {
    echo "Spreekt geen Nederlands" . "<br>";
}

//Ik kwam er zelf niet uit om de kleur aan te passen afhankelijk van de tijd van de dag. Dus ik met behulp van Google en hulp van mijn broer
//Deze uitwerking gemaakt. 

date('H:i');

function backgroundColor(){
    $backgroundColor = '';
    if (strtotime(date('H:i')) >= strtotime('06:00') && strtotime(date('H:i')) <= strtotime('12:00')){
        $backgroundColor = '#B0B3D6';
    } elseif (strtotime(date('H:i')) >= strtotime('12:00') && strtotime(date('H:i')) <= strtotime('18:00')){
        $backgroundColor = '#787CB5';
    } elseif (strtotime(date('H:1')) >= strtotime('18:00') && strtotime(date('H:i')) <= strtotime('24:00')){
        $backgroundColor = '#b14fdb';
    } else {
        $backgroundColor = '#303469';
    }
    return $backgroundColor;
}

function groet(){
    $groet = '';
    if (strtotime(date('H:i')) >= strtotime('06:00') && strtotime(date('H:i')) <= strtotime('12:00')){
        $groet = 'Morgen';
    } elseif (strtotime(date('H:i')) >= strtotime('12:00') && strtotime(date('H:i')) <= strtotime('18:00')) {
        $groet = 'Middag';
    } elseif (strtotime(date('H:i')) >= strtotime('18:00') && strtotime(date('H:i')) <= strtotime('24:00')) {
        $groet = 'Avond';
    } elseif (strtotime(date('H:i')) >+ strtotime('24:00') && strtotime(date('H:i')) <= strtotime('06:00')) {
        $groet = 'Nacht';
    }
    return $groet;
}
?>
</body>
</html>
