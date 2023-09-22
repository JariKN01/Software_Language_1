<?php
include '../functions/users.php';
include '../functions/tools.php';
include '../functions/userDetails.php';
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
<?php
displayUserDetails($users);
?>
<p><a href="../view/index.view.php">Terug naar gebruikers</a></p>
</body>
</html>
