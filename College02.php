<?php
require 'functions/function.php';

echo "<h1>Array maken</h1>";
// Array maken
$jari = ['Jari', 'Knoop', 'jari.knoop@windesheim.nl','age' => 21];

echo "Naam is: " .$jari[0]."<br>";
echo "Achternaam is: " . $jari[1]."<br>";
echo "Mail is: " . $jari[2]. "<br>";
echo "Is ". $jari['age']."jaar oud";

echo "<h1>Foreach loop</h1>";
// foreach loop


$klas = ['Persoon 1','Persoon 2','Persoon 3','Persoon 4'];

foreach ($klas as $leerling){
    echo "Naam van leerling: " . $leerling . "<br>";
}

echo "<h1>For loop Array</h1>";

$key = array_keys($jari);

for ($i = 0; $i <count($klas); $i++){
    echo "<li>" . $klas[$i] . "<br>";
}

// Multidimensional array maken
$RJDA = [
    'Student 1' => ['firstname' => 'Jari', 'lastname' => 'Knoop', 'leeftijd' => 21, 'mail' => 'jari.knoop@windesheim.nl'],
    'Student 2' => ['firstname' => 'Dorian', 'lastname' => 'Baies', 'leeftijd' => 26, 'mail' => 'dorian.baies@windesheim.nl'],
    'Student 3' => ['firstname' => 'Rick', 'lastname' => 'Bakker', 'leeftijd' => 20, 'mail' => 'tim.bakker@windesheim.nl'],
    'Student 4' => ['firstname' => 'Ashraf', 'lastname' => 'Basnoe', 'leeftijd' => 21, 'mail' => 'ashraf.basnoe@windesheim.nl']
];

sort($RJDA);

echo "<h1>Foreach loop Multi Array</h1>";

//Het lukt mij niet om $key de titel van de array achter 'Deelnemer: ' te zetten als bijvoorbeeld 'Student 1'
foreach ($RJDA as $key => $value){
    echo "<b>Deelnemer: " . $key . "</b><br><hr>";
    echo "<ul><li>" . $value['firstname'] . " ";
    echo $value['lastname'] . "<br>";
    echo "<li>" . "Leeftijd: " . $value['leeftijd'] . "<br>";
    echo "<li>" . "Mailadres: " . $value['mail'] . "</ul>" ."<hr>";
}

echo "<h1>For loop Multi Array</h1>";

$studentKeys = array_keys($RJDA);

for ($i = 0; $i < count($RJDA); $i++) {
    $studentName = $studentKeys[$i];
    $studentInfo = $RJDA[$studentName];

    echo "First Name: {$studentInfo['firstname']}<br>";
    echo "Last Name: {$studentInfo['lastname']}<br>";
    echo "Age: {$studentInfo['leeftijd']}<br>";
    echo "Email: {$studentInfo['mail']}<br>";
    echo "<hr>";
}

//die(var_dump($data));

