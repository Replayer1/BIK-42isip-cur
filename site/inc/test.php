<?php
   session_start();
   
   $connect = mysqli_connect('localhost', 'root', '', 'test_2');
   if (!$connect) {
       die('Error_database');
   }

   $asd = mysqli_query($connect, "SELECT * FROM `test` WHERE `qwe` = 'qwe' AND `asd` = 'asd'");
   

   if(mysqli_num_rows($asd) > 0) {

        $user = mysqli_fetch_assoc($asd);

        // $_SESSION['user'] = [
        //     "id" => $user['id'],
        //     "full_name" => $user['full_name'],
        //     "login" => $user['login'],
        //     "email" => $user['email'],
        //     "avatar" => $user['avatar']
        // ];

        print_r($user);


   } else {
    $_SESSION['Err_login-comf'] = 'Такого пользователя не существует';
    echo $_SESSION['Err_login-comf'];
   }
