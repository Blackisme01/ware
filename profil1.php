<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>

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
            <li><a href="./keranjang.html"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo-neo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="./guest.php" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a>
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
                            <li class="active"><a href="./profil.php">Profil</a></li>
                            <li><a href="./riwayat_pembelian.php">Riwayat Pembelian</a></li>
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

    <?php
    session_start();
    include "koneksi.php";
    $id_autor = $_SESSION['username'];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query);
    
    while($data=mysqli_fetch_array($hasil)){
    ?>
    <div class="container-fluid mt-5"> 
        <div class="col-lg-4 centered">
          <div class="card-body mt-4">
            <div class="card-body text-center">
              <img src="img/kucing3.jpeg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3" style="font-size: 25px;"><?php echo $data['nama']?></h5>
              <p class="text-muted mb-1" style="font-size: 20px;">@Blackisme</p>                           
            </div>
          </div>          
          </div>
        </div>
        <div class="col-lg-8 centered">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">Alfi Daniel</p>  
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>              
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">@Blackisme</p>  
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>                
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">alpidaniel03@gmail.com</p>
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Nomor Telepon</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">089516936070</p>
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>
                </div>
              </div>
            </div>
          </div> 
          <a href="./index.php" onclick="return confirm('apakah anda yakin ingin logout?')" class="btn btn-danger btn-lg">Logout</a>         
        </div> 
      <?php } ?>                    

<!-- Footer Section Begin -->
<footer class="footer">                            
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <div class="footer__copyright__text">
        <p>Copyright 2022 Utter Ware</p>
    </div>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->                      
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-switch">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Cari disini......">
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