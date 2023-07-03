<?php
     session_start();
     require_once 'connect.php';

     //переменные, которые хранят логин и пароль
     $login = $_POST['login'];
     $password = md5($_POST['password']);

     //Проверка на существование пользователя в БД
     $check_user = mysqli_query($connect,  "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
     $user_group = mysqli_query($connect, "SELECT * FROM `users` JOIN `groups` ON `users`.`group` = `groups`.`id_group` WHERE `users`.`login` = '$login'");

     //Если в БД существует такой пользователь
     if(mysqli_num_rows($check_user) > 0)
     {
        //Мы запоминаем этого пользователя
        $user = mysqli_fetch_assoc($check_user);
        $user_group = mysqli_fetch_assoc($user_group);

        //Создаём ключи, по которым мы будем обращаться к пользователю после авторизации
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "password" => $user['password'],
            "email" => $user['email'],
            "group" => $user_group['group_name'],
            "diamonds" => $user['diamonds']
        ];

        //Впускаем пользователя на главную страницу уже авторизированным
        header('Location: ../main.php');
     }
     else
     {
         //Иначе сообщаем, что пользователь ввёл неверные данные
         $_SESSION['message'] = 'Неверный логин или пароль';
         header('Location: ../login.php');
     }
?>