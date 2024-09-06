<?php
    include "../classes/User.php";

    $user = new User;
    $user->update($_POST, $_FILES);
    # $_POST [first_name, last_name, username]
    # $_FILES['photo'] --> avatar/photo uploaded by the user