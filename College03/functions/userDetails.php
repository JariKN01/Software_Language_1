<?php

function displayUserDetails($value)
{
    // Get the user ID
    $userToDisplayId = $_GET['id'];

    // Find the user data from the array
    $selectedUser = null;
    foreach ($value as $user) {
        if ($user['id'] == $userToDisplayId) {
            $selectedUser = $user;
            break;
        }
    }

    // echo out de user data from array
    if ($selectedUser) {
        echo '<h1>User Details</h1>';
        echo '<p>Naam: ' . $selectedUser['firstname'] . ' ' .$selectedUser['lastname']. '</p>';
        echo '<p>Email: ' . $selectedUser['email'] . '</p>';
        echo '<p>Leeftijd: ' . $selectedUser['age'] . '<p>';
    } else {
        echo '<p>User not found</p>';
    }
}