<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="style/global.css">
   <link rel="stylesheet" href="style/header.css">
   <link rel="stylesheet" href="style/footer.css">
   <link rel="stylesheet" href="style/index.css">
   <title>Gsell</title>
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="container-heander">
            <div class="header__body">
               <a class="header__logo" href="index.php">
                  <h1>G<span>Sell</span></h1>
               </a>
               <div class="header__burger">
                  <span></span>
               </div>
               <nav class="header__menu">
                  <ul class="header__list">
                     <li>
                        <a href="index.php" class="header__link no-active__link">Главная</a>
                     </li>
                     <li>
                        <a href="" class="header__link">Рестораны</a>
                     </li>
                     <?php
                     if (!$_SESSION['user']) {
                        echo '<li>';
                        echo '<a href="login.php" class="header__link">Вход</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="regiser.php" class="header__link">Регистрация</a>';
                        echo '</li>';
                     }
                     if ($_SESSION['user']) {
                        echo '<li>';
                        echo ' <div class="busket-header">';
                        echo '   <a href="profile.php" class="header__link">';
                        echo '<img src="' . $_SESSION['user']['avatar'] . '">';
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
            <div class="content__box-restorans">
               <div class="content">
                  <h1 class="restorans-h1">Мы сотрудничаем с этими компаниями</h1>
                  <div class="content__restorans">
                     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <a href="https://mcdonalds.ru/"><img src="media/og-default — копия (2).png" class="d-block w-100" alt="..."></a>
                              <div class="carousel-caption d-none d-md-block">
                              </div>
                           </div>
                           <div class="carousel-item">
                              <a href="https://burgerking.ru/"><img src="media/og-default.png" class="d-block w-100" alt="..."></a>
                              <div class="carousel-caption d-none d-md-block">
                              </div>
                           </div>
                           <div class="carousel-item">
                              <a href="https://www.kfc.ru/"><img src="media/og-default — копия.png" class="d-block w-100" alt="..."></a>
                              <div class="carousel-caption d-none d-md-block">
                              </div>
                           </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Следующий</span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="container">
            <div class="content-box-produckts">
               <div class="content">
                  <h1 class="content__product-name">Фастфуд</h1>
                  <div class="content__produckts">

                     <div class="produckt__box load__more-item-1" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-1.php"><img src="media/product/fastfood-1.png" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-1.php">
                                 <h4>Фастфуд 1</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-2.php"><img src="media/product/fastfood-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-2.php">
                                 <h4>Фастфуд 2</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-3.php"><img src="media/product/fastfood-3.jpeg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-3.php">
                                 <h4>Фастфуд 3</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-4.php"><img src="media/product/fastfood-4.jpeg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-4.php">
                                 <h4>Фастфуд 4</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-5.php"><img src="media/product/fastfood-5.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-5.php">
                                 <h4>Фастфуд 5</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-6.php"><img src="media/product/fastfood-6.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-6.php">
                                 <h4>Фастфуд 6</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-1">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/fastfood-7.php"><img src="media/product/fastfood-7.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/fastfood-7.php">
                                 <h4>Фастфуд 7</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>









                  </div>

                  <a class="load__More" href="#" id="loadMore">Load More</a>






                  <h1 class="content__product-name">Дисерты</h1>
                  <div class="content__produckts">

                     <div class="produckt__box load__more-item-2" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-1.php"><img src="media/product/dissert-1.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-1.php">
                                 <h4>Дисерт 1</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-2.php"><img src="media/product/dissert-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-2.php">
                                 <h4>Дисерт 2</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-3.php"><img src="media/product/dissert-3.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-3.php">
                                 <h4>Дисерт 3</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-4.php"><img src="media/product/dissert-4.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-4.php">
                                 <h4>Дисерт 4</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-5.php"><img src="media/product/dissert-5.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-5.php">
                                 <h4>Дисерт 5</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-6.php"><img src="media/product/dissert-6.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-6.php">
                                 <h4>Дисерт 6</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-7.php"><img src="media/product/dissert-7.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-7.php">
                                 <h4>Дисерт 7</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-8.php"><img src="media/product/dissert-8.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-8.php">
                                 <h4>Дисерт 8</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-2">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/disert-9.php"><img src="media/product/dissert-3.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/disert-9.php">
                                 <h4>Дисерт 9</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>










                  </div>

                  <a class="load__More" href="#" id="loadMore-2">Load More</a>






                  <h1 class="content__product-name">Пиццы</h1>
                  <div class="content__produckts">

                     <div class="produckt__box load__more-item-3" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-1.php"><img src="media/product/pozza-1.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-1.php">
                                 <h4>Пицца 1</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-2.php"><img src="media/product/pozza-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-2.php">
                                 <h4>Пицца 2</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3" style="display: block; opacity: 1;">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-3.php"><img src="media/product/pozza-3.jpeg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-3.php">
                                 <h4>Пицца 3</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-4.php"><img src="media/product/pozza-4.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-4.php">
                                 <h4>Пицца 4</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-5.php"><img src="media/product/pozza-5.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-5.php">
                                 <h4>Пицца 5</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-6.php"><img src="media/product/pozza-6.jpeg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-6.php">
                                 <h4>Пицца 6</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-7.php"><img src="media/product/pozza-7.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-7.php">
                                 <h4>Пицца 7</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-8.php"><img src="media/product/pozza-8.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-8.php">
                                 <h4>Пицца 8</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>

                     <div class="produckt__box load__more-item-3">
                        <div class="produckt__img">
                           <a class="produckt__link" href="products/pizza-9.php"><img src="media/product/pozza-9.jpg" alt="">
                           </a>
                        </div>
                        <div class="produckt__name">
                           <div class="produckt__lable">
                              <a class="produckt__link" href="products/pizza-9.php">
                                 <h4>Пицца 9</h4>
                              </a>
                           </div>
                           <div class="produckt__icons">
                              <i class="star bi bi-star" id="star-1"> 4.2</i>
                              <i class="bi bi-cash"> 250</i>
                           </div>
                        </div>
                     </div>









                  </div>

                  <a class="load__More" href="#" id="loadMore-3">Load More</a>
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




   <script src="js/jQuery 3.6.0.js"></script>
   <script src="js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
   </script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>