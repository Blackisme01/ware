<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail produk</title>

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
                            <li><a href="./guest.php">Beranda</a></li>                            
                            <li class="active"><a href="./detail_produk.php">Detail Produk</a></li>                            
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

    <!-- Product Details Section Begin -->
   <section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">                
                <img
                src="img/laptop2.png"
                height="400" style="border:0" allowfullscreen="">            
        </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3>Asus A516MA</h3>                        
                    <h3>Rp. 7.000.000</h3>
                </div>
                    <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                    magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Jumlah:</span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>                                          
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Stok tersedia:</span>
                                <p>130</p>
                            </li>
                            <li>
                                <span>Warna tersedia:</span>
                                <div class="color__checkbox">
                                    
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    
                                </div>
                            </li>
                            
                            <br>
                            <a href="./keranjang.php" class="btn btn-danger"><span class="icon_bag_alt"></span> Tambah ke keranjang</a>
                        <a href="./beli.php" class="btn btn-primary"><span class="icon_wallet"></span> Beli</a>          
                            <li>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Spesifikasi</a>
                        </li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Deskripsi</h6>
                            <td>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                            consequat massa quis enim.</td>                            
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Spesifikasi</h6>
                            1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <hr>
                               2. Quisque non turpis tempor, finibus nisl eu, auctor magna. <hr>
                               3. Vestibulum sed ante ut magna tempus gravida sed fermentum nisi. <hr>
                               4. Quisque tristique sapien eget lorem laoreet posuere. <hr>
                               5. Ut aliquam felis ut lacus posuere, in pharetra quam molestie. <hr>
                               6. Aliquam eu ex viverra, euismod massa sit amet, lacinia metus.                           
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</section>
<!-- Product Details Section End -->

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