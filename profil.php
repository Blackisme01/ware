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