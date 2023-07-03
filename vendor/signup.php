<?php
    session_start();
    require_once 'connect.php';

    //создаём переменные, в которых запоминаем введённые данные
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password_confirm = $_POST['pass_confirm'];
    $group = 4; //4 - группа user
    $diamonds = 0; //количество донатной валюты

    //Если пароли совпадают
    if($password === $password_confirm)
    {

        //Считываем количество пользователей в БД, у которых может быть совпадения
        $countOfusers = mysqli_query($connect,  "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");


        //Если пользователей, с идентичными данными не присутствует
        if(mysqli_num_rows($countOfusers) === 0)
        {
            //Регистрируем пользователя
            $password = md5($password);
            mysqli_query($connect, 
            "INSERT INTO `users` (`id`, `login`, `email`, `password`, `group`, `diamonds`) 
            VALUES (NULL, '$login', '$email', '$password', $group, $diamonds)"
            );

            //И направляем на главную страницу
            header('Location: ../main.php');
        }

        //Иначе сообщаем, что есть совпадения
        else
        {
            $_SESSION['message'] = 'Пользователь с таким именем или почтой уже существует!';
            header('Location: ../register.php');
        }
    }

    //Если пароли не совпадают, сообщаем об этом и направляем на ту же страницу
    else
    {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
