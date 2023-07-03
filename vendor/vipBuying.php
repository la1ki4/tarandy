<?php
    require_once './connect.php';
    session_start();

    $user_id = $_GET['id'];

    $user_data = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    $user_data = mysqli_fetch_assoc($user_data);

    $diamonds = $user_data['diamonds'];

    $vip_price = 150;

    if($diamonds < $vip_price)
    {
        $_SESSION['message'] = 'У вас недостаточно кристалов на баланасе!';
        header('Location: ../donate.php');
    }
    else
    {
        $new_group = mysqli_query($connect, "SELECT * FROM `groups` WHERE `group_name` = 'vip'");
        $new_group = mysqli_fetch_assoc($new_group);
        $id_group = $new_group['id_group'];
        $new_balance = $diamonds - $vip_price;
        mysqli_query($connect, "UPDATE `users` SET `group` = '$id_group' WHERE `users`.`id` = $user_id");
        mysqli_query($connect, "UPDATE `users` SET `diamonds` = '$new_balance' WHERE `users`.`id` = $user_id");
        $_SESSION['message'] = 'Спасибо за покупку!';
        header('Location: ../donate.php');
    }
?>