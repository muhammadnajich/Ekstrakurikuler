<!-- ================ start banner Area ================= -->
  <section class="banner-area">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 banner-right">
          <h1 class="text-white">
            Jadwal
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Jadwal Ekstrakurikuler SMPN 34 Bandung 
          </p>
          <div class="link-nav">
            <span class="box">
              <a href="index.php?page=index">Beranda</a>
              <i class="lnr lnr-arrow-right"></i>
              <a href="index.php?page=jadwal">Jadwal</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->
<center><div class="col-lg-8 col-md-8">
<h3 class="mb-30">Jadwal Ekstrakurikuler SMPN 34 Bandung </h3>
<h3 class="mb-30" id="currentYear"></h3><h3 class="mb-30" id="nextYear"></h3>
<!--Javascript menampilkan Tahun sekarang-->
<script>
  year=new Date().getYear();
  if (year<1900)
    year+=1900;
  document.getElementById("currentYear").innerHTML = year;
</script>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="10px">No.</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Ekskul</th>
      <th scope="col">Pelatih</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include 'class/koneksi.php';
      $no = 1;
      /*menampilkan data jadwal berdasarkan urutan hari sesuai abjad A ke Z */
      $data = mysqli_query($koneksi,"select * from jadwal ORDER BY hari ASC");
      while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?>.</td>
      <td><?php echo $d['hari']; ?></td>
      <td><?php echo $d['jam_masuk']; ?> WIB - <?php echo $d['jam_keluar']; ?> WIB</td>
      <td><?php echo $d['nama_ekskul']; ?></td>
      <td><?php echo $d['nama_lengkap']; ?></td>
    </tr>
    <?php 
      }
    ?>
  </tbody>
</table></center></div><br />