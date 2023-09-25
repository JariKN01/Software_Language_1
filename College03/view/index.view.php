<?php
// Include the functions file
include '../functions/tools.php';
include '../functions/users.php';
include '../functions/userList.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College03</title>
</head>
<body>
<h1>Gebruikers</h1><hr>
<ul>
    // Display the function to display users in a list
    <?php displayUserList($users); ?>
</ul>
</body>
</html>
