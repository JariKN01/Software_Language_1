<?php
function displayUserList($users) {
    foreach ($users as $user) {
        echo '<li>
            <a href="user1.php?id=' . $user['id'] . '">' . $user['firstname'] . ' ' .$user['lastname']. '</a>
            </li>';
    }
}


