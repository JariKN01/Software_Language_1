<?php

function displayUserDetails($value)
{
    // Get the user ID from the URL parameter
    $userToDisplayId = $_GET['id']; // Ensure you sanitize and validate this input

    // Find the user data from the array
    $selectedUser = null;
    foreach ($value as $user) {
        if ($user['id'] == $userToDisplayId) {
            $selectedUser = $user;
            break;
        }
    }

    if ($selectedUser) {
        echo '<h1>User Details</h1>';
        echo '<p>Naam: ' . $selectedUser['firstname'] . '</p>';
        echo '<p>Email: ' . $selectedUser['email'] . '</p>';
        echo '<p>Leeftijd: ' . $selectedUser['age'] . '<p>';
    } else {
        echo '<p>User not found</p>';
    }
}