    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Daftar karyawan</h3>
            <ol class="breadcrumb">
              <li><i class=""></i><a href="?page=nilai">Daftar karyawan</a></li>
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
              <!--<header class="panel-heading">
                <a class="btn btn-primary"  href="?page=add-nilai" title="tambah data nilai"><i class="fa fa-plus"></i> Nilai Ekstrakurikuler Pendidikan dan Karakter</a>
                <a class="btn btn-primary"  href="?page=add-nilai2" title="tambah data nilai"><i class="fa fa-plus"></i> Nilai Ekstrakurikuler PBM</a>
              </header>-->
              <form action="" method="POST">

               <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="th-sm"><i class=""></i> No.</th>
                    <th class="th-sm"><i class=""></i> NIP</th>
                    <th class="th-sm"><i class=""></i> Nama Dosen</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1.</td>
                      <td>106102</td>
                      <td>Andy Victor S.T., M.T</td>
                    </tr>
                </tbody>
                <tfoot>
                  <tr>

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