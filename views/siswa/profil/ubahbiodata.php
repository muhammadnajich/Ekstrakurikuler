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
  <h3 class="mb-30">Form Pembaharuan Biodata Siswa</h3>
    <?php
      include '../../class/koneksi.php';
      $id_user = $_GET['id_user'];
      $data = mysqli_query($koneksi,"select * from siswa where id_user='$id_user'");
      while($d = mysqli_fetch_array($data)){
    ?>
    <form  method="post" action="../../controllers/siswa/profil/ubah-biodata.php">
      <input class=" form-control" id="id_user" name="id_user" type="number" value="<?php echo $d['id_user']; ?>"/>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
        required class="single-input" value="<?php echo $d['nama_lengkap']; ?>">
      </div>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
        <input type="text" name="nama_panggilan" placeholder="Nama Panggilan" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Panggilan'"
        required class="single-input" value="<?php echo $d['nama_panggilan']; ?>">
      </div>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
        <input type="text" name="alamat" placeholder="Alamat" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"
        required class="single-input" value="<?php echo $d['alamat']; ?>">
      </div>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
        <input type="number" name="nomor_telepon" placeholder="Nomor Telepon" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon'"
        required class="single-input" value="<?php echo $d['nomor_telepon']; ?>">
      </div>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
        <input type="text" name="alamat_ortu" placeholder="Alamat Orang Tua" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Orang Tua'"
        class="single-input" value="<?php echo $d['alamat_ortu']; ?>">
      </div>
      <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
        <input type="number" name="nomor_telepon_ortu" placeholder="Nomor Telepon Orang Tua" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon Orang Tua'"
        class="single-input" value="<?php echo $d['nomor_telepon_ortu']; ?>">
      </div>
      <center><div class="button-group-area mt-40">
        <button class="btn btn-success" type="submit">Ubah</button>
      </div></center>
    </form>
    <?php
      }
    ?>
</div></center>