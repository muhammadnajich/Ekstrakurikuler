<!-- ================ start banner Area ================= -->
  <section class="banner-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 banner-right">
          <h1 class="text-white">
            Akun
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Akun siswa anggota ekstrakurikuler SMPN 34 Bandung
          </p>
          <div class="link-nav">
            <span class="box">
              <a href="?page=dashboardsiswa">Beranda</a>
              <i class="lnr lnr-arrow-right"></i>
              <a href="?page=akun">Akun</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
  <h3 class="mb-30">Akun Siswa</h3>
  <form action="#">
    <div class="table-responsive text-nowrap">
      <!--Table-->
      <table class="table table-striped">
        <!--Table head-->
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
          <?php
            $username = $_SESSION['username'];
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select * from user where username='$username'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password']; ?></td>
          </tr>
          <?php
            }
          ?>
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>
    </section><br />
    <center><label>ingin mengubah password? </label>
      <a href="?page=ubahakun&user=<?php echo $d['username']; ?>">Klick disini</a>
    </center>
  </form>
</div></center>