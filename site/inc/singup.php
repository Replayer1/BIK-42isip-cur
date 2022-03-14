<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_comm = $_POST['password-two'];

    echo $full_name;
    echo $name;
    echo $email;
    echo $password;
    echo $password_comm;

    $login_check = $_POST['name'];
    $email_check = $_POST['email'];

    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login_check'");
    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email_check'");

        if (mysqli_num_rows($check_email) == 0) {
            if (mysqli_num_rows($check_login) == 0) {
                if ($password === $password_comm){

                    $path = 'media/profile-pic/' . time() . $_FILES['avatar']['name'];
                    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
                        $_SESSION['Err_pass-comf'] = 'Ошибка при загрузке изображения';
                        header('Location: ../regiser.php');
                    }

                    $password = md5($password);

                    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$name', '$email', '$password', '$path')");

                    $_SESSION['Reg-comf'] = 'Регесттрация прошла успешно';
                    header('Location: ../login.php');
                    
                } else {
                    $_SESSION['Err_pass-comf'] = 'Пароли не совподают';
                    header('Location: ../regiser.php');
                };
            } else {
                $_SESSION['Err_pass-comf'] = 'Такой ник уже существует, придумайте другой';
                header('Location: ../regiser.php');
            };
        } else {
            $_SESSION['Err_pass-comf'] = 'Пользователь с таким email`ом уже существует, придумайте другой';
            header('Location: ../regiser.php');
        };
