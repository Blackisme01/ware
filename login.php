<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>                        
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="./login.php">Masuk</a>
            <a href="./register.php">Daftar</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./guest.html"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>                            
                            <li><a href="./guest.php">Beranda</a></li>                            
                            <li class="active"><a href="./login.php">Masuk</a></li> 
                            <li><a href="./register.php">Daftar</a></li>                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">                        
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>                                                        
                        </ul>
                    </div>
                </div>            
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="submit_login.php" method="POST" class="checkout__form">
            <div class="row">
                <div class="col-lg-12 mb-5 mt-5">
                    <h5>Masuk</h5>
                    <div class="row">                        
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Username <span>*</span></td>
                                <input type="text" required name="username" placeholder="masukkan username anda disini">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Password<span>*</span></td>
                                <input type="password" required name="pass1" placeholder="masukkan password anda disini">
                            </div>
                        </div>                                                                                                                                                                       
                        </div>
                        <input type="submit" name="submit" value="masuk" class="btn btn-primary">
                    </div>                    
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

   <!-- Footer Section Begin -->
<footer class="footer">                            
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <div class="footer__copyright__text">
        <p>Copyright 2023 Utter Ware</p>
    </div>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->                      
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-switch">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Cari disini.....">
</form>
</div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>