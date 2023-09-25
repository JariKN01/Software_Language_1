<?php
// Receiving user ID and echo it out with first and lastname to another page.
function displayUserList($users) {
    foreach ($users as $user) {
        echo '<li>
            <a href="user1.php?id=' . $user['id'] . '">' . $user['firstname'] . ' ' .$user['lastname']. '</a>
            </li>';
    }
}


