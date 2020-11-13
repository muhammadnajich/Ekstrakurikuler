 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Verifikasi Pendaftaran</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=pendaftaran">Verifikasi Pendaftaran</a></li>
          <li><i class="fa fa-laptop"></i>Data Siswa</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Data Siswa
          </header>
          <div class="panel-body">
            <div class="form">
              <?php
              include '../../class/koneksi.php';
              $id_pendaftaran = $_GET['id_pendaftaran'];
              $data = mysqli_query($koneksi,"select * from pendaftaran where id_pendaftaran ='$id_pendaftaran'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/pendaftaran/verifikasi_pendaftaran.php">
                  <input class=" form-control" id="id_pendaftaran" name="id_pendaftaran" type="hidden" value="<?php echo $d['id_pendaftaran']; ?>"/>
                  
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Kelas : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="kelas" name="kelas" type="hidden" value="<?php echo $d['kelas']; ?>"/>
                      <input class=" form-control" id="kelas" name="kelas" type="text" disabled="disabled" value="<?php echo $d['kelas']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Ekskul Pendidikan Karakter : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="ekskul_pendidikan_karakter" name="ekskul_pendidikan_karakter" type="hidden" value="<?php echo $d['ekskul_pendidikan_karakter']; ?>"/>
                      <input class=" form-control" id="ekskul_pendidikan_karakter" name="ekskul_pendidikan_karakter" type="text" disabled="disabled" value="<?php echo $d['ekskul_pendidikan_karakter']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Ekskul PBM : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="ekskul_pbm" name="ekskul_pbm" type="hidden" value="<?php echo $d['ekskul_pbm']; ?>"/>
                      <input class=" form-control" id="ekskul_pbm" name="ekskul_pbm" type="text" disabled="disabled" value="<?php echo $d['ekskul_pbm']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nama Lengkap : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama_lengkap" name="nama_lengkap" type="hidden" value="<?php echo $d['nama_lengkap']; ?>"/>
                      <input class=" form-control" id="nama_lengkap" name="nama_lengkap" type="text" disabled="disabled" value="<?php echo $d['nama_lengkap']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nama Panggilan : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama_panggilan" name="nama_panggilan" type="hidden" value="<?php echo $d['nama_panggilan']; ?>"/>
                      <input class=" form-control" id="nama_panggilan" name="nama_panggilan" type="text" disabled="disabled" value="<?php echo $d['nama_panggilan']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Tempat Lahir : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="tempat_lahir" name="tempat_lahir" type="hidden" value="<?php echo $d['tempat_lahir']; ?>"/>
                      <input class=" form-control" id="tempat_lahir" name="tempat_lahir" type="text" disabled="disabled" value="<?php echo $d['tempat_lahir']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Tanggal Lahir : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="tanggal_lahir" name="tanggal_lahir" type="hidden" value="<?php echo $d['tanggal_lahir']; ?>"/>
                      <input class=" form-control" id="tanggal_lahir" name="tanggal_lahir" type="text" disabled="disabled" value="<?php echo $d['tanggal_lahir']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Jenis Kelamin : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="jenis_kelamin" name="jenis_kelamin" type="hidden" value="<?php echo $d['jenis_kelamin']; ?>"/>
                      <input class=" form-control" id="jenis_kelamin" name="jenis_kelamin" type="text" disabled="disabled" value="<?php echo $d['jenis_kelamin']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Agama : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="agama" name="agama" type="hidden" value="<?php echo $d['agama']; ?>"/>
                      <input class=" form-control" id="agama" name="agama" type="text" disabled="disabled" value="<?php echo $d['agama']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Alamat : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="alamat" name="alamat" type="hidden" value="<?php echo $d['alamat']; ?>"/>
                      <input class=" form-control" id="alamat" name="alamat" type="text" disabled="disabled" value="<?php echo $d['alamat']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nomor Telepon : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nomor_telepon" name="nomor_telepon" type="hidden" value="<?php echo $d['nomor_telepon']; ?>"/>
                      <input class=" form-control" id="nomor_telepon" name="nomor_telepon" type="text" disabled="disabled" value="<?php echo $d['nomor_telepon']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nama Orang Tua : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama_ortu" name="nama_ortu" type="hidden" value="<?php echo $d['nama_ortu']; ?>"/>
                      <input class=" form-control" id="nama_ortu" name="nama_ortu" type="text" disabled="disabled" value="<?php echo $d['nama_ortu']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Alamat Orang Tua : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="alamat_ortu" name="alamat_ortu" type="hidden" value="<?php echo $d['alamat_ortu']; ?>"/>
                      <input class=" form-control" id="alamat_ortu" name="alamat_ortu" type="text" disabled="disabled" value="<?php echo $d['alamat_ortu']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nomor Telepon Orang Tua : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nomor_telepon_ortu" name="nomor_telepon_ortu" type="hidden" value="<?php echo $d['nomor_telepon_ortu']; ?>"/>
                      <input class=" form-control" id="nomor_telepon_ortu" name="nomor_telepon_ortu" type="text" disabled="disabled" value="<?php echo $d['nomor_telepon_ortu']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Pengalaman Organisasi : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="pengalaman_organisasi" name="pengalaman_organisasi" type="hidden" value="<?php echo $d['pengalaman_organisasi']; ?>"/>
                      <input class=" form-control" id="pengalaman_organisasi" name="pengalaman_organisasi" type="text" disabled="disabled" value="<?php echo $d['pengalaman_organisasi']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Prestasi : </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="prestasi" name="prestasi" type="hidden" value="<?php echo $d['prestasi']; ?>"/>
                      <input class=" form-control" id="prestasi" name="prestasi" type="text" disabled="disabled" value="<?php echo $d['prestasi']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="jadwal" class="control-label col-lg-2">Status Pendaftaran <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="status_pendaftaran" readonly>
                        <option value="diterima">Diterima</option>
                      </select>
                    </div>
                  </div>

                  <input class=" form-control" id="nama" name="nama" value="<?php echo $d['nama_lengkap']; ?>" type="hidden"/>

                  <input class=" form-control" id="username" name="username" value="<?php echo $d['nama_lengkap']; ?>" type="hidden"/>

                  <input class=" form-control" id="password" name="password" value="<?php echo $d['nama_lengkap']; ?>" type="hidden"/>

                  <input class=" form-control" id="level" name="level" value="siswa" type="hidden"/>
                  
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="username" name="username" value="<?php echo $d['nama_lengkap']; ?>" type="text" title="Username masih menggunakan nama lengkap siswa" disabled="disabled" />
                      <span>note : username menggunakan nama lengkap siswa. mohon perhatikan huruf kapital, simbol dan spasi agar bisa login dengan lancar</span>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Password <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="password" name="password" value="<?php echo $d['nama_lengkap']; ?>" type="password" title="Password masih menggunakan nama lengkap siswa" disabled="disabled" />
                      <span>note : password sementara menggunakan nama lengkap siswa. mohon perhatikan huruf kapital, simbol dan spasi agar bisa login dengan lancar</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit">Terima Sebagai Anggota Ekskul</button>
                    </div>
                  </div>
                </form>
                <?php 
                  }
                ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>