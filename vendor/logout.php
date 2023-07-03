<?php
    session_start();
    unset($_SESSION['user']['login']);
    unset($_SESSION['user']['group']);
    unset($_SESSION['user']['diamonds']);
    unset($_SESSION['user']['password']);
    unset($_SESSION['user']['email']);
    unset($_SESSION['user']['id']);
    session_unset();
    session_destroy();
    header("Location: ../main.html");
?>