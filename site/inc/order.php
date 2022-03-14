<?php
session_start();
require_once 'connect.php';

if ($_SESSION['user']) {
    $order_adress = $_POST['adress'];
    $order_amount = $_POST['amount'];
    $order_id = $_SESSION['product']['id'];
    $order_name = $_SESSION['product']['name'];
    $order_img = 'media/product/' . $_SESSION['product']['img'];
    $user_id = $_SESSION['user']['id'];


    mysqli_query($connect, "INSERT INTO `orders` (`id`, `user_id`, `order_id`, `order_name`, `order_img`, `order_adress`, `order_amount`) VALUES (NULL, '$user_id', '$order_id', '$order_name', '$order_img', '$order_adress', '$order_amount')");
    unset($_SESSION['product']);
    $_SESSION['order-msg'] = 'Заказ успешно совершен';
    header('Location: ../profile.php');
} else {
    unset($_SESSION['product']);
    $_SESSION['order-msg'] = 'Вам необходимо войти в аккаунт чтобы совершить заказ';
    header('Location: ../profile.php');
}
