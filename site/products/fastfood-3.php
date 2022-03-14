<?php
session_start();
$product_id = 3;
$product_name = 'Фастфуд 3';
$product_img = 'fastfood-3.jpeg';

$_SESSION['product'] = [
   "id" => $product_id,
   "name" => $product_name,
   "img" => $product_img
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../style/global.css">
   <link rel="stylesheet" href="../style/index.css">
   <link rel="stylesheet" href="../style/product.css">
   <link rel="stylesheet" href="../style/header.css">
   <link rel="stylesheet" href="../style/footer.css">
   <title>Gsell</title>
</head>
<span id="body-lock" class=""></span>
<?php
if ($_SESSION['order-msg']) {
   echo '<span id="" class="order-msg">' . $_SESSION['order-msg'] . ' </span>';
   unset($_SESSION['order-msg']);
};
?>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="container-heander">
            <div class="header__body">
               <a class="header__logo" href="../index.php">
                  <h1>G<span>Sell</span></h1>
               </a>
               <div class="header__burger">
                  <span></span>
               </div>
               <nav class="header__menu">
                  <ul class="header__list">
                     <li>
                        <a href="../index.php" class="header__link no-active__link">Главная</a>
                     </li>
                     <li>
                        <a href="" class="header__link">Рестораны</a>
                     </li>
                     <?php
                     if (!$_SESSION['user']) {
                        echo '<li>';
                        echo '<a href="../login.php" class="header__link">Вход</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="../regiser.php" class="header__link">Регистрация</a>';
                        echo '</li>';
                     }
                     ?>
                     <?php
                     if ($_SESSION['user']) {
                        echo '<li>';
                        echo ' <div class="busket-header">';
                        echo '   <a href="../profile.php" class="header__link">';
                        echo '<img src="../' . $_SESSION['user']['avatar'] . '">';
                        echo ' </a>';
                        echo ' </div>';
                        echo ' </li>';
                     }
                     ?>
                  </ul>
                  <div class="header__contacts">
                     <div class="social google-pluse">
                        <a href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
                     </div>
                     <div class="social google-pluse">
                        <a href="#" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
                     </div>
                     <div class="social google-pluse">
                        <a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                     </div>
                     <div class="social google-pluse">
                        <a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                     </div>
                     <div class="social google-pluse">
                        <a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>


      <div class="body">
         <div class="container">
            <form id="order-form" class="display--order" action="../inc/order.php" method="post">
               <label for="adress">Заказать <?= $product_name ?></label>
               <input type="text" placeholder="Адресс" id="adress" name="adress" required>
               <input type="text" placeholder="Количество" id="amount" name="amount" required>
               <button type="submit">Заказать</button>
            </form>
            <div class="produckt__container">
               <div class="produckt__main" id="product-fastfood-3">
                  <div class="produckt__info">
                     Fastfood 3
                  </div>
                  <div class="product__price">
                     <div class="price">
                        250
                        &#8381;
                     </div>
                     <button class="order">Заказать</button>
                     <div class="busket">
                        <i class="bi bi-basket"></i>
                     </div>
                  </div>
               </div>
               <div class="product__resembling">
                  <h1 class="content__product-name">Похожее</h1>
                  <div class="content__produckts">
                     <div class="produckt__box load__more-item-4" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                     <div class="produckt__box load__more-item-4">
                        <div class="produckt__img">
                           <a class="produckt__link" href="product.html"><img src="../media/product/b98260b353c6d8a9208d6b79ad3831a9-600x450.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="product.html">
                                 <h4>Grill VIP House</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="load__More" href="#" id="loadMore-4">Load More</a>
               </div>
            </div>
         </div>
      </div>


      <footer>
         <div class="conteiner">
            <div class="content">
               <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  Русский
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button">Русский</button></li>
                  <li><button class="dropdown-item" type="button">Английский</button></li>
               </ul>
               <div class="sochial__webs">
                  <div class="social google-pluse">
                     <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                  </div>
                  <div class="social google-pluse">
                     <a href="#" target="_blank"><i class="fa fa-vk"></i></a>
                  </div>
                  <div class="social google-pluse">
                     <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                  </div>
                  <div class="social google-pluse">
                     <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                  </div>
                  <div class="social google-pluse">
                     <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="conteiner">
            <div class="content">
               <div class="container text__start">
                  <h1 class="footer__name">Доставка</h1>
                  <a class="footer__link" href="#">Заказать доставку</a>
                  <a class="footer__link" href="#">Стать курьером</a>
                  <a class="footer__link" href="#">Кансультация</a>
               </div>
               <div class="container text__center">
                  <h1 class="footer__name">Gsell</h1>
                  <a class="footer__link" href="#">О нас</a>
                  <a class="footer__link" href="#">Задать вопрос</a>
               </div>
               <div class="container text__end">
                  <h1 class="footer__name">Услуги</h1>
                  <a class="footer__link" href="#">Доставка до двери</a>
                  <a class="footer__link" href="#">В крочайшие сроки</a>
               </div>
            </div>
         </div>
      </footer>
   </div>




   <script src="../js/jQuery 3.6.0.js"></script>
   <script src="../js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
   </script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>