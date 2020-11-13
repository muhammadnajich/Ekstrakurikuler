<!-- ================ start banner Area ================= -->
  <section class="banner-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 banner-right">
          <h1 class="text-white">
            Biodata
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Biodata siswa anggota ekstrakurikuler SMPN 34 Bandung
          </p>
          <div class="link-nav">
            <span class="box">
              <a href="?page=dashboardsiswa">Beranda</a>
              <i class="lnr lnr-arrow-right"></i>
              <a href="?page=biodata">Biodata</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
  <h3 class="mb-30">Biodata Siswa</h3>
  <form action="#">
    <div class="table-responsive text-nowrap">
      <!--Table-->
      <table class="table table-striped">
        <!--Table head-->
          <?php
            $username = $_SESSION['username'];
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select * from siswa, user where siswa.nama_lengkap = user.username AND user.username = '$username'");
            while($d = mysqli_fetch_array($data)){
          ?>
        <thead>
          <tr>
            <th scope="col">Nama Lengkap</th>
            <td><?php echo $d['nama_lengkap']; ?></td>
          </tr>
          <tr>
            <th scope="col">Nama Panggilan</th>
            <td><?php echo $d['nama_panggilan']; ?></td>
          </tr>
          <tr>
            <th scope="col">Kelas</th>
            <td><?php echo $d['kelas']; ?></td>
          </tr>
          <tr>
            <th scope="col">Tempat Lahir</th>
            <td><?php echo $d['tempat_lahir']; ?></td>
          </tr>
          <tr>
            <th scope="col">Tanggal Lahir</th>
            <td><?php echo $d['tanggal_lahir']; ?></td>
          </tr>
          <tr>
            <th scope="col">Jenis Kelamin</th>
            <td><?php echo $d['jenis_kelamin']; ?></td>
          </tr>
          <tr>
            <th scope="col">Agama</th>
            <td><?php echo $d['agama']; ?></td>
          </tr>
          <tr>
            <th scope="col">Alamat</th>
            <td><?php echo $d['alamat']; ?></td>
          </tr>
          <tr>  
            <th scope="col">Nomor Telepon</th>
            <td><?php echo $d['nomor_telepon']; ?></td>
          </tr>
          <tr>  
            <th scope="col">Nama Orang Tua</th>
            <td><?php echo $d['nama_ortu']; ?></td>
          </tr>
          <tr>  
            <th scope="col">Alamat Orang Tua</th>
            <td><?php echo $d['alamat_ortu']; ?></td>
          </tr>
          <tr>  
            <th scope="col">Nomor Telepon Orang Tua</th>
            <td><?php echo $d['nomor_telepon_ortu']; ?></td>
          </tr>
          <?php 
            }
          ?>
        </thead>
        </table>
        <!--Table-->
      </div>
    </section><br />
    <!--<center><label>ubah biodata? </label>
      <a href="?page=ubahbiodata&id_user=<?php //echo $d['id_user']; ?>">Klick disini</a>
    </center>-->
  </form>
</div></center>