    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Ekstrakurikuler</h3>
            <ol class="breadcrumb">
              <li><i class=""></i><a href="?page=ekstrakurikuler">Ekstrakurikuler</a></li>
              <li><i class="fa fa-laptop"></i>Data</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <?php
              if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                echo'<div id="pesan" class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                  </button>'.$_SESSION['pesan'].'</div>';
              }
                $_SESSION['pesan'] = '';
              ?>
              <?php
              if (isset($_SESSION['pesanupdate']) && $_SESSION['pesanupdate'] <> '') {
                echo'<div id="pesanupdate" class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                  </button>'.$_SESSION['pesanupdate'].'</div>';
              }
                $_SESSION['pesanupdate'] = '';
              ?>
              <?php
              if (isset($_SESSION['pesanhapus']) && $_SESSION['pesanhapus'] <> '') {
                echo'<div id="pesanhapus" class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                  </button>'.$_SESSION['pesanhapus'].'</div>';
              }
                $_SESSION['pesanhapus'] = '';
              ?>
              <header class="panel-heading">
               <a class="btn btn-primary"  href="?page=add-ekstrakurikuler" title="tambah data ekstrakurikuler"><i class="fa fa-plus"></i> Tambah Ekstrakurikuler</a>
             </header>

             <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="th-sm"><i class=""></i> No.</th>
                  <th class="th-sm"><i class=""></i> Ekstrakurikuler</th>
                  <th class="th-sm"><i class=""></i> Jenis Ekskul</th>
                  <th class="th-sm"><i class=""></i> Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../../class/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from ekstrakurikuler");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?> .</td>
                    <td><?php echo $d['nama_ekskul']; ?></td>
                    <td><?php echo $d['jenis_ekskul']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="?page=edit-ekstrakurikuler&id_ekskul=<?php echo $d['id_ekskul']; ?>" title="ubah data"><i class="fa fa-pencil-square-o"></i></a>
                        <a class="btn btn-danger" href="?page=delete-ekstrakurikuler&id_ekskul=<?php echo $d['id_ekskul']; ?>" title="hapus data" onclick="javascript: return confirm('Hapus Data Ekskul ?')"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
              </tbody>
              <tfoot>
                <tr>
                  <th> Nomor</th>
                  <th> Ekstrakurikuler</th>
                  <th> Jenis Ekskul</th>
                  <th> Opsi</th>
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
  <link rel="stylesheet" href="../../style/table/css/datatable/dataTables.bootstrap.min.css"/>
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
    $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
    setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
  </script>
  <script>
    $(document).ready(function(){setTimeout(function(){$("#pesanupdate").fadeIn('slow');}, 500);});
    setTimeout(function(){$("#pesanupdate").fadeOut('slow');}, 3000);
  </script>
  <script>
    $(document).ready(function(){setTimeout(function(){$("#pesanhapus").fadeIn('slow');}, 500);});
    setTimeout(function(){$("#pesanhapus").fadeOut('slow');}, 3000);
  </script>