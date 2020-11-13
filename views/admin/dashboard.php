<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="fa fa-laptop"></i>Dashboard</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box twitter-bg">
          <i class="fa fa-users" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM pendaftaran WHERE status_pendaftaran='menunggu'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Penerimaan Pendaftaran</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box dark-bg">
          <i class="fa fa-user" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM siswa");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Anggota</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box red-bg">
          <i class="fa fa-male" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM siswa where jenis_kelamin='L'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Anggota Ekskul Pria</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box magenta-bg">
          <i class="fa fa-female" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM siswa where jenis_kelamin='P'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Anggota Ekskul Wanita</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box facebook-bg">
          <i class="fa fa-users" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM pelatih");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Pelatih</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box lime-bg">
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM ekstrakurikuler where jenis_ekskul='Ekstrakurikuler Pendidikan Karakter'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count" style="text-align: center;"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title" style="text-align: center;">Ekskul Pendidikan Karakter</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box white-bg">
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM ekstrakurikuler where jenis_ekskul='Ekstrakurikuler Pengembangan Bakat dan Minat (PBM)'");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count" style="text-align: center;"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title" style="text-align: center;">Ekskul PBM</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box dark-bg">
          <i class="fa fa-users" aria-hidden="true"></i>
          <?php
            include '../../class/koneksi.php';
            $data = mysqli_query($koneksi,"select COUNT(*) AS SUM FROM user");
            while($d = mysqli_fetch_array($data)){
          ?>
          <div class="count"><?php echo $d['SUM']; ?></div>
          <?php
            }
          ?>
          <div class="title">Akun</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->

    </div>
  </section>
  <!--main content end-->
</section>