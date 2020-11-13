<!-- ================ start banner Area ================= -->
  <section class="banner-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 banner-right">
          <h1 class="text-white">
            Riwayat Ekskul
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Riwayat ekskul siswa anggota ekstrakurikuler SMPN 34 Bandung
          </p>
          <div class="link-nav">
            <span class="box">
              <a href="?page=dashboardsiswa">Beranda</a>
              <i class="lnr lnr-arrow-right"></i>
              <a href="?page=ekskul">Riwayat Ekskul</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
  <h3 class="mb-30">Riwayat Ekskul Siswa</h3>
  <form action="#">
    <div class="table-responsive text-nowrap">
      <!--Table-->
      <table class="table table-striped">
        <!--Table head-->
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Ekstrakurikuler Pendidikan dan Karakter</th>
            <th scope="col">Ekstrakurikuler PBM</th>
            <th scope="col">Kelas</th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
          <?php
            $username = $_SESSION['username'];
            include '../../class/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from siswa, user where siswa.nama_lengkap = user.username AND user.username = '$username'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $d['ekskul_pendidikan_karakter']; ?></td>
            <td><?php echo $d['ekskul_pbm']; ?></td>
            <td><?php echo $d['kelas']; ?></td>
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
    <!--Section: Live preview-->
  </form>
</div></center>