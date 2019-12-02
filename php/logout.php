<?php
    // logs a user out of the system 
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: ../index.php');
    exit();
?>