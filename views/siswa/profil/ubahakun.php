 <!-- ================ start banner Area ================= -->
 <section class="home-banner-area">
  <div class="container">
    <div class="row justify-content-center fullscreen align-items-center">
      <div class="col-lg-5 col-md-8 home-banner-left">
      </div>
      <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
        <img class="img-fluid" src="style/img/header-img.png" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
  <h3 style="text-align: center;">Form Pembaharuan Password Siswa</h3>
    <?php
      $username = $_SESSION['username'];
      include '../../class/koneksi.php';
      $data = mysqli_query($koneksi,"select * from user where username='$username'");
      while($d = mysqli_fetch_array($data)){
    ?>
    <form  method="post" action="../../controllers/siswa/profil/edit-akun.php">
      <input class=" form-control" id="id_user" name="id_user" type="hidden" value="<?php echo $d['id_user']; ?>"/>
   
      <input type="hidden" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="<?php echo $d['username']; ?>">

      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
        <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
        required class="single-input"  value="<?php echo $d['password']; ?>">
      </div>
      <center><div class="button-group-area mt-40">
        <a href="#" class="genric-btn primary radius" type="submit" style="width: 200px;font-size: 18px;">Ubah</a>
      </div></center>
    </form>
    <?php
      }
    ?>
</div></center>