<?php
    require_once './connect.php';
    session_start();

    $user_id = $_GET['id'];

    $user_data = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    $user_data = mysqli_fetch_assoc($user_data);
 
    $login = $user_data['login'];

    $user_group = mysqli_query($connect, "SELECT * FROM `users` JOIN `groups` ON `users`.`group` = `groups`.`id_group` WHERE `users`.`login` = '$login'");

    $user_group = mysqli_fetch_assoc($user_group);

    $_SESSION['user'] = [
        "id" => $user_data['id'],
        "login" => $user_data['login'],
        "password" => $user_data['password'],
        "email" => $user_data['email'],
        "group" => $user_group['group_name'],
        "diamonds" => $user_data['diamonds']
    ];

    header('Location: ../main.php');
?>