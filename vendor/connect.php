<?php

    $connect = mysqli_connect('localhost', 'root', '', 'tarandy');

    if(!$connect)
    {
        die('Error connect to DataBase');
    }
?>