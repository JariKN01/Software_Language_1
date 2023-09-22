<?php

include '../functions/users.php';

$userToDisplayId = $_GET['id']; // Ensure you sanitize and validate this input

// Find the user data from the array

$selectedUser = null;
foreach ($users as $user) {
    if ($user['id'] == $userToDisplayId) {
        $selectedUser = $user;
        break;
    }
}








