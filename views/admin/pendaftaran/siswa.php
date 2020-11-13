    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Siswa</h3>
            <ol class="breadcrumb">
              <li><i class=""></i><a href="?page=siswa">Siswa</a></li>
              <li><i class="fa fa-laptop"></i>Data Siswa Anggota Ekskul</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel"><br/>
              <form action="" method="POST">
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
                    <td><?php echo $no++; ?> .</td>
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
                  </tr>
                </tfoot>
              </table>
            </form>
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