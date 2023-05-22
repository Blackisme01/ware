<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage admin</title>

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

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">            
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="./logout.php" onclick="return confirm('apakah anda yakin ingin logout?')">logout</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>                  
                            <li><a href="tampilan_admin.php?page=home">HOME</a></li>
                            <li><a href="tampilan_admin.php?page=barang">BARANG</a></li>
                            <li><a href="tampilan_admin.php?page=kategori">KATEGORI</a></li>
                            <li><a href="tampilan_admin.php?page=user">USER</a></li>
                            <li><a href="tampilan_admin.php?page=review">REVIEW</a></li>
                            <li><a href="tampilan_admin.php?page=transaksi">TRANSAKSI</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="./logout.php" onclick="return confirm('apakah anda yakin ingin logout?')">logout</a>
                        </div>                        
                    </div>
                </div>            
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

<!-- Page Preloder -->
<div id="preloder">
        <div class="loader"></div>
    </div>

<div class="content">    
    <div class="badan">
    <?php
    if(isset($_GET['page'])){
        $page =$_GET['page'];
        switch ($page){
            case 'home':
                include "page/home.php";
                break;            
            case 'review':
                include "page/review.php";
                break;
            case 'user':
                include "page/user.php";
                break;
            case 'barang':
                include "page/barang.php";
                break;
            case 'kategori':
                include "page/kategori.php";
                break;
            case 'transaksi':
                include "page/transaksi.php";
                break;
            case 'logout':
                include "logout.php";
                break;
            default:
                echo"<center><h3>Maaf. halaman tidak ditemukan</h3></center>";
                break;
        }
    }else{
        include "page/home.php";
    }
    ?>
    </div>
    <!-- Footer Section Begin -->
<footer class="footer">                            
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright 2023 Utter Ware</p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->                      
</footer>
<!-- Footer Section End -->

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