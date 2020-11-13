    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Absensi</h3>
            <ol class="breadcrumb">
              <li><i class=""></i><a href="?page=absensi">Absensi</a></li>
              <li><i class="fa fa-laptop"></i>Data</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel"><br/>
              <form method="post" action="">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Ekstrakurikuler Pendidikan dan Karakter</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="ekskul_pendidikan_karakter" title="pilih salah satu" required="required">
                      <option value="" disabled selected>-=Pilih Salah Satu=-</option>
                      <?php
                      include '../../class/koneksi.php';
                      $data = mysqli_query($koneksi, "select distinct ekskul_pendidikan_karakter from siswa");
                      while ($d = mysqli_fetch_array($data)) {
                        echo "<option value='".$d['ekskul_pendidikan_karakter']."'>".$d['ekskul_pendidikan_karakter']."</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit" value="cari">Tampilkan Data</button>
                  </div>
                </div>
              </form><br /><br />
              <form action="../../controllers/pelatih/absensi/create.php" method="POST"><br /><br />
               <table id="bootstrap-data-table" class="table table-striped table-bordered"><br />
                <thead>
                  <tr>
                   <th class="th-sm"><i class=""></i> No.</th>
                   <th class="th-sm"><i class=""></i> Ekskul Pendiidkan dan Karakter</th>
                   <th class="th-sm"><i class=""></i> Nama Siswa</th>
                   <th class="th-sm"><i class=""></i> Kelas</th>
                   <th class="th-sm"><i class=""></i> Keterangan Absensi</th>
                 </tr>
               </thead>
               <tbody>
                <?php
                  include '../../class/koneksi.php';
                  $ekskul_pendidikan_karakter = $_POST['ekskul_pendidikan_karakter'];
                  $no = 1;
                  $data = mysqli_query($koneksi, "select * from siswa WHERE ekskul_pendidikan_karakter = '$ekskul_pendidikan_karakter'");
                  while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?> .</td>
                  <td><?php echo $d['ekskul_pendidikan_karakter']; ?>
                    <input class=" form-control" name="ekskul_pendidikan_karakter[]" id="ekskul_pendidikan_karakter[]" type="hidden" value="<?php echo $d['ekskul_pendidikan_karakter']; ?>"/>
                  </td>
                  <td><?php echo $d['nama_lengkap'];?>
                    <input class=" form-control" name="nama_lengkap[]" id="nama_lengkap[]" type="hidden" value="<?php echo $d['nama_lengkap']; ?>"/>
                  </td>
                  <td><?php echo $d['kelas'];?>
                    <input class=" form-control" name="kelas[]" id="kelas[]" type="hidden" value="<?php echo $d['kelas']; ?>"/>
                  </td>
                  <td>
                    <?php
                      echo "<select class=form-control m-bot15 name=keterangan[] id=keterangan[] title=pilih hari required=required>
                      <option value=Hadir>Hadir</option>
                      <option value=Tidak Hadir>Tidak Hadir</option>
                    </select>";
                    ?>
                  </td>
                </tr>
                <?php
                 }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                    </div>
                  </th>
                </tr>
              </tfoot>
            </table>
          </form>
        </section>
      </div>
    </div>
  </section>
</section>