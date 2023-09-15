<?php


// require 'functions/function.php';

// $kites = [
//    $gin = ['size' => 8],
//    $gaastra = ['size' => 12],
//    $naish = ['size' => 10]
//

//$kites = [
//    $Gin = ['name' => 'Gin', 'size' => 8, 'lines' => 5],
//    $Gaastra = ['name' => 'Gaastra', 'size' => 12, 'line' => 4]
//];

//$DDD = [
//        ['name' => 'Tim', 'age' => 19, 'hobby' => 'gamen', 'address' => ''],
//        ['name' => 'Meric', 'age'=> 21, 'hobby' => 'gamen, trainen', 'address' => 'Winterkoning' ],
//        ['name' => 'Jeroen', 'age' => 20, 'hobby' => 'voetbal, gamen', 'address' => '']
//];

//$numbers = [
//    1,
//    2,
//    3,
//    4,
//    5,
//    6
//];


//echo rand(1,6) . rand(1,6). rand(1,6) . rand(1,6) . rand(1,6);

//die(var_dump($numbers));

//var_dump($numbers);
//rsort($numbers);
//echo '<br>';
//var_dump($numbers);

//foreach ($numbers as $number => $value){
//    echo $number . "<br>";
//        foreach ($value as $item) {
//            echo $item . " ";
//        }
//}

//die(var_dump($numbers));

// sort($DDD);

//foreach ($DDD as $student){
//    echo $student['name'] . " ". $student['age'].
//        "<br>&nbsp" . $student['hobby'] . "<hr>";
//}

//for ($i = 0; $i < count($DDD); $i++){
//
//        if($DDD[$i]['address'] != 0){
//            echo $DDD[$i]['address']."<br>"."<hr>";
//        } else {
//            echo "geen address";
//        }
//}


// echo $kites[1]."<br><br>";

// Voor elke kite
//foreach ($kites as $kite){
//    foreach ($kite as $key => $value){
//        echo " ".$key. $value. " ";
//    }
//    echo "<hrr>";
//}

//echo "<br>";

// for loop
//echo count($DDD)."<br><br>";

//for ($i = 0; $i < count($DDD); $i++){
//    echo $DDD[$i]. "<br>";
//}

//die(var_dump($DDD));

//$RJDA = [
//    'Student 1' => ['firstname' => 'Jari', 'lastname' => 'Knoop', 'leeftijd' => 21, 'mail' => 'jari.knoop@windesheim.nl'],
//    'Student 2' => ['firstname' => 'Dorian', 'lastname' => 'Baies', 'leeftijd' => 26, 'mail' => 'dorian.baies@windesheim.nl'],
//    'Student 3' => ['firstname' => 'Rick', 'lastname' => 'Bakker', 'leeftijd' => 20, 'mail' => 'tim.bakker@windesheim.nl'],
//    'Student 4' => ['firstname' => 'Ashraf', 'lastname' => 'Basnoe', 'leeftijd' => 21, 'mail' => 'ashraf.basnoe@windesheim.nl']
//];


//$studentKeys = array_keys($RJDA); // Get the keys (student names)
//
//for ($i = 0; $i < count($RJDA); $i++) {
//    $studentName = $studentKeys[$i];
//    $studentInfo = $RJDA[$studentName];
//
//    echo "Student Name: $studentName<br>";
//    echo "First Name: {$studentInfo['firstname']}<br>";
//    echo "Last Name: {$studentInfo['lastname']}<br>";
//    echo "Age: {$studentInfo['leeftijd']}<br>";
//    echo "Email: {$studentInfo['mail']}<br>";
//    echo "<br>";
//}

$persons = [
    'Stephan' => ['education' => ['Windesheim'],
        'experience' => ['teacher', 'account manager', 'project manager'],
        'hobby' => ['kitesurfer', 'sheep herding', 'table top games']]
];