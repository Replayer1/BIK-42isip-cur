<?php
   session_start();
   require_once 'connect.php';

   $login = $_POST['login'];
   $password = md5($_POST['password']);

   $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

   if(mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "login" => $user['login'],
            "email" => $user['email'],
            "avatar" => $user['avatar']
        ];

        // print_r($_SESSION['user']);

        header('Location: ../profile.php');

   } else {
    $_SESSION['Err_login-comf'] = 'Такого пользователя не существует';
    header('Location: ../login.php');
   }
