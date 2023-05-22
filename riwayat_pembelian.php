<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat pembelian</title>

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
            <li><a href="./keranjang.php"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="./guest.php" onclick="return confirm('apakah anda yakin ingin logout?')">logout</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/utteraca.png" alt="" style="width: 60px;height: 60px;;"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Beranda</a></li>
                            <li><a href="./profil.php">Profil</a></li>
                            <li class="active"><a href="./riwayat_pembelian.php">Riwayat Pembelian</a></li>
                            <li><a href="./keranjang.php">Keranjang</a></li>                            
                            <li><a href="./review.php">Review</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="./guest.php" onclick="return confirm('apakah anda yakin ingin logout?')">logout</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>                            
                            <li><a href="./keranjang.php"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
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

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>                               
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-1">
                                        <img src="img/laptop4.png" width="90px" height="90px" alt="">
                                    <td class="col-8"> 
                                        <div class="cart__product__item__title">
                                            <h4 style="margin-left:10px ;">ASUS VivoBook 15 R564UA  </h4>                                             
                                            <h5 style="margin-left:10px ;"><i class="fa fa-clock-o"></i> Sabtu 17 November 2019</h5>                                           
                                        </div>
                                    </td>                                        
                                    </td>                                   
                                    <td class="col-2">                                    
                                        <a href="./beli.php" class="btn btn-primary" style="width: 100px; height: 50px; margin-top: 10px; padding-top: 10px; padding-bottom: 10px;">beli lagi</a>
                                    </td>                                   
                                    <td><button type="button" class="btn btn-light fa fa-ellipsis-v" data-toggle="modal" data-target="#exampleModalLong"></button></td>
                                </tr>
                                <tr>
                                    <td class="col-1">
                                        <img src="img/laptop2.png" width="90px" height="90px" alt="">
                                    <td class="col-8"> 
                                        <div class="cart__product__item__title">
                                            <h4 style="margin-left:10px ;">Asus A516MA </h4>                                             
                                            <h5 style="margin-left:10px ;"><i class="fa fa-clock-o"></i> Sabtu 17 November 2019</h5>                                           
                                        </div>
                                    </td>                                        
                                    </td>                                   
                                    <td class="col-2">                                    
                                        <a href="./beli.php" class="btn btn-primary" style="width: 100px; height: 50px; margin-top: 10px; padding-top: 10px; padding-bottom: 10px;">beli lagi</a>
                                    </td>                                   
                                    <td><button type="button" class="btn btn-light fa fa-ellipsis-v" data-toggle="modal" data-target="#exampleModalLong"></button></td>
                                </tr>
                                <tr>
                                    <td class="col-1">
                                        <img src="img/laptop3.png" width="90px" height="90px" alt="">
                                    <td class="col-8"> 
                                        <div class="cart__product__item__title">
                                            <h4 style="margin-left:10px ;">Acer Aspire 5 Slim</h4>                                             
                                            <h5 style="margin-left:10px ;"><i class="fa fa-clock-o"></i> Sabtu 17 November 2019</h5>                                           
                                        </div>
                                    </td>                                        
                                    </td>                                   
                                    <td class="col-2">                                    
                                        <a href="./beli.php" class="btn btn-primary" style="width: 100px; height: 50px; margin-top: 10px; padding-top: 10px; padding-bottom: 10px;">beli lagi</a>
                                    </td>                                   
                                    <td><button type="button" class="btn btn-light fa fa-ellipsis-v" data-toggle="modal" data-target="#exampleModalLong"></button></td>
                                </tr>
                                <tr>
                                                                       
                                                                     
                                    
                                </tr>                                             
                            </tbody>
                        </table>                        
                    </div>
                </div>               
                </div>               
        </div>
    </section>    	
    <!-- Shop Cart Section End -->   
    
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-danger"><a href="./refund.php" style="color: white;">Transaksi bermasalah?</a> </button> <br><br>
            <button type="button" class="btn btn-primary"> <a href="./rincian_transaksi.php" style="color: white;">Lihat detail transaksi</a> </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>                
        </div>
    </div>
    </div>

    <!-- Footer Section Begin -->
<footer class="footer">                            
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <div class="footer__copyright__text">
        <p>Copyright 2022 Neo Uniform</p>
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