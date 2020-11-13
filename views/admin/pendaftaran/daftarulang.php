     <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Daftar Ulang</h3>
            <ol class="breadcrumb">
              <li><i class=""></i><a href="?page=daftarulang">Daftar Ulang</a></li>
              <li><i class="fa fa-laptop"></i>Data</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <label style="color: red;">Penerimaan pendaftaran ulang bagi siswa yang ingin mengganti ekstrakurikuler yang telah di ikuti sebelumnya atau menambah ekstrakurikuler baru.</label>
              <?php
              if (isset($_SESSION['pesandaftar']) && $_SESSION['pesandaftar'] <> '') {
                echo'<div id="pesandaftar" class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="icon-remove"></i>
                </button>'.$_SESSION['pesandaftar'].'</div>';
              }
                $_SESSION['pesandaftar'] = '';
              ?>
              </header>
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="th-sm"><i class=""></i> No.</th>
                    <th class="th-sm"><i class=""></i> Kelas</th>
                    <th class="th-sm"><i class=""></i> Ekskul Pendidikan Karakter</th>
                    <th class="th-sm"><i class=""></i> Ekskul PBM</th>
                    <th class="th-sm"><i class=""></i> Nama Lengkap</th>
                    <th class="th-sm"><i class=""></i> Nama Panggilan</th>
                    <th class="th-sm"><i class=""></i> Tempat Lahir</th>
                    <th class="th-sm"><i class=""></i> Tanggal Lahir</th>
                    <th class="th-sm"><i class=""></i> Jenis Kelamin</th>
                    <th class="th-sm"><i class=""></i> Agama</th>
                    <th class="th-sm"><i class=""></i> Nomor Telepon</th>
                    <th class="th-sm"><i class=""></i> Pengalaman Organisasi</th>
                    <th class="th-sm"><i class=""></i> Prestasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      include '../../class/koneksi.php';
                      $no = 1;
                      $data = mysqli_query($koneksi,"select * from siswa");
                      while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><?php echo $d['ekskul_pendidikan_karakter']; ?></td>
                    <td><?php echo $d['ekskul_pbm']; ?></td>
                    <td><?php echo $d['nama_lengkap']; ?></td>
                    <td><?php echo $d['nama_panggilan']; ?></td>
                    <td><?php echo $d['tempat_lahir']; ?></td>
                    <td><?php echo $d['tanggal_lahir']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['nomor_telepon']; ?></td>
                    <td><?php echo $d['pengalaman_organisasi']; ?></td>
                    <td><?php echo $d['prestasi']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-warning" href="?page=verifikasi-pendaftaran&id_siswa=<?php echo $d['id_siswa']; ?>" title="Verifikasi Pendaftaran"><?php echo $d['id_siswa']; ?></a>
                      </div>
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th> No.</th>
                    <th> Kelas</th>
                    <th> Ekskul Pendidikan Karakter</th>
                    <th> Ekskul PBM</th>
                    <th> Nama Lengkap</th>
                    <th> Nama Panggilan</th>
                    <th> Tempat Lahir</th>
                    <th> Tanggal Lahir</th>
                    <th> Jenis Kelamin</th>
                    <th> Agama</th>
                    <th> Nomor Telepon</th>
                    <th> Pengalaman Organisasi</th>
                    <th> Prestasi</th>
                  </tr>
                </tfoot>
              </table>
            </section>
          </div>
        </div>
      </section>
    </section>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
      } );
    </script>
    <!--Tabel-->
    <link rel="stylesheet" href="../../style/table/css/datatable/dataTables.bootstrap.min.css">
    <!--Buat Tabel-->
    <script src="../../style/table/js/data-table/datatables.min.js"></script>
    <script src="../../style/table/js/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../../style/table/js/data-table/dataTables.buttons.min.js"></script>
    <script src="../../style/table/js/data-table/buttons.bootstrap.min.js"></script>
    <script src="../../style/table/js/data-table/jszip.min.js"></script>
    <script src="../../style/table/js/data-table/pdfmake.min.js"></script>
    <script src="../../style/table/js/data-table/vfs_fonts.js"></script>
    <script src="../../style/table/js/data-table/buttons.html5.min.js"></script>
    <script src="../../style/table/js/data-table/buttons.print.min.js"></script>
    <script src="../../style/table/js/data-table/buttons.colVis.min.js"></script>
    <script src="../../style/table/js/data-table/datatables-init.js"></script>
    <!--- Notif--->
    <script src="../../style/jquery.min.js"></script>
    <script>
      $(document).ready(function(){setTimeout(function(){$("#pesandaftar").fadeIn('slow');}, 500);});
      setTimeout(function(){$("#pesandaftar").fadeOut('slow');}, 3000);
    </script>