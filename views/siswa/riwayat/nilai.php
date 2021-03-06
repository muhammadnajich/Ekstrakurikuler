<!-- ================ start banner Area ================= -->
  <section class="banner-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 banner-right">
          <h1 class="text-white">
            Nilai
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Nilai Ekstrakurikuler SMPN 34 Bandung
          </p>
          <div class="link-nav">
            <span class="box">
              <a href="?page=dashboardsiswa">Beranda</a>
              <i class="lnr lnr-arrow-right"></i>
              <a href="?page=nilai">Nilai</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
  <h3 class="mb-30">Nilai Ekstrakurikuler</h3>
<table class="table table-striped">
  <thead>
        <tr>
          <th>Nomor</th>
          <th>Ekskul Pendidikan Karakter</th>
          <th>Ekskul PBM</th>
          <th>Kelas</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
        <?php
            $username = $_SESSION['username'];
            include '../../class/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from nilai, user where nilai.nama_lengkap = user.username AND user.username = '$username'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $d['ekskul_pendidikan_karakter']; ?></td>
            <td><?php echo $d['ekskul_pbm']; ?></td>
            <td><?php echo $d['kelas']; ?></td>
            <td><?php echo $d['nilai']; ?></td>
          </tr>
          <?php
            }
          ?>
      </tbody>
</table>
</div>
</center>