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
  <h3 class="mb-30">Form Pendaftaran Ektrakurikuler</h3>

  <form method="post" action="controllers/pendaftaran/create.php">
    <h6 style="text-align: left;">Kelas <span style="color: red;">*</span></h6>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></div>
      <div class=" form-select " id=" default-select" title="pilih salah satu">
        <select required="required" name="kelas" title="Pilih Salah Satu">
          <option value="" disabled="disabled" selected>-=Pilih Salah Satu=-</option>
          <?php
          include 'class/koneksi.php';
          $data = mysqli_query($koneksi, "select * from kelas");
          while ($d = mysqli_fetch_array($data)) {
            echo "<option value='".$d['kelas']."'>".$d['kelas']."</option>";
          }
          ?>
        </select>
      </div>
    </div><br/>
    <h6 style="text-align: left;">Ektsrakurikuler Pendidikan Karakter <span style="color: red;">*</span></h6>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></div>
      <div class=" form-select " id=" default-select" title="pilih salah satu">
        <select required="required" name="ekskul_pendidikan_karakter" title="Pilih Salah Satu">
          <option value="" disabled="disabled" selected>-=Pilih Salah Satu=-</option>
          <?php
          include 'class/koneksi.php';
          $data = mysqli_query($koneksi, "select * from ekstrakurikuler where jenis_ekskul='Ekstrakurikuler Pendidikan Karakter'");
          while ($d = mysqli_fetch_array($data)) {
            echo "<option value='".$d['nama_ekskul']."'>".$d['nama_ekskul']."</option>";
          }
          ?>
        </select>
      </div>
    </div><br/>
    <h6 style="text-align: left;">Ektsrakurikuler Pengembangan Bakat dan Minat (PBM) <span style="color: red;">*</span></h6>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></div>
      <div class=" form-select " id=" default-select" title="pilih salah satu">
        <select required="required" name="ekskul_pbm" title="Pilih Salah Satu">
          <option value="" disabled="disabled" selected>-=Pilih Salah Satu=-</option>
          <?php
          include 'class/koneksi.php';
          $data = mysqli_query($koneksi, "select * from ekstrakurikuler where jenis_ekskul='Ekstrakurikuler Pengembangan Bakat dan Minat (PBM)'");
          while ($d = mysqli_fetch_array($data)) {
            echo "<option value='".$d['nama_ekskul']."'>".$d['nama_ekskul']."</option>";
          }
          ?>
        </select>
      </div>
    </div><br/>
    <h6 style="text-align: left;">Bio Data Calon Anggota</h6>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
      required class="single-input" required="required">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-user-o" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="text" name="nama_panggilan" placeholder="Nama Panggilan" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Panggilan'"
      required class="single-input" required="required">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'"
      required class="single-input" required="required">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'"
      required class="single-input" required="required">
    </div>
    <div class="mt-10" style="text-align: left;">
      <label>Jenis Kelamin</label> <span style="color: red;">*</span><br/>
      <input type="radio" name="jenis_kelamin" value="L" checked="checked"> Laki - Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="jenis_kelamin" value="P"> Perempuan
    </div>
    <div class="mt-10" style="text-align: left;">
      <label>Agama</label><br/>
      <input type="radio" name="agama" value="Islam"> Islam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="agama" value="Kristen Protestan"> Kristen Protestan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="agama" value="Kristen Katolik"> Kristen Katolik &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="agama" value="Hindu"> Hindu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="agama" value="Buddha"> Buddha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="agama" value="Konghucu"> Khonghucu
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="text" name="alamat" placeholder="Alamat" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"
      required class="single-input" required="required">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i><span style="color: red;">*</span></div>
      <input type="number" name="nomor_telepon" placeholder="Nomor Telepon" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon'"
      required class="single-input" required="required">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
      <input type="text" name="nama_ortu" placeholder="Nama Orang Tua" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Orang Tua'"
      class="single-input">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
      <input type="text" name="alamat_ortu" placeholder="Alamat Orang Tua" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Orang Tua'"
      class="single-input">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
      <input type="number" name="nomor_telepon_ortu" placeholder="Nomor Telepon Orang Tua" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon Orang Tua'"
      class="single-input">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
      <input type="text" name="pengalaman_organisasi" placeholder="Pengalaman Organisasi" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pengalaman Organisasi'"
      class="single-input">
    </div>
    <div class="input-group-icon mt-10">
      <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
      <input type="text" name="prestasi" placeholder="Prestasi" title="ketik disini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prestasi'"
      class="single-input">
    </div>

    <input type="hidden" name="status_pendaftaran" value="menunggu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'menunggu'"
    class="single-input">

    <center><div class="button-group-area mt-40">
      <button class="btn btn-primary" type="submit" style="width: 200px;" id="alert">Kirim</button>
    </div></center>
  </form>
</div></center><br /><br />
<!--- Notif--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>