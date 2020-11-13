<?php 
session_start();

  // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['akses']==""){
  echo "<script>alert('Anda harus Login terlebih dahulu');</script>";
  echo "<script>location='../../index.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../style/img/smpn.png" />
  <title>Ekstrakurikuler</title>

  <!-- Bootstrap CSS -->
  <link href="../../style/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../../style/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../../style/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../../style/admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../../style/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../../style/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../../style/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="../../style/admin/stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="../../style/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="../../style/admin/stylesheet" href="css/fullcalendar.css">
  <link href="../../style/admin/css/widgets.css" rel="stylesheet">
  <link href="../../style/admin/css/style.css" rel="stylesheet">
  <link href="../../style/admin/css/style-responsive.css" rel="stylesheet" />
  <link href="../../style/admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="../../style/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
<!--<?php 
  //cek halaman yang dituju
  //array_key_exists('pages', $_GET) ? $pages = $_GET['pages'] : $pages = 'index';
?> 

<?php
      /*if ($pages == "index"){
        include "homeadmin.php";
      }
      if ($pages == "ekstrakurikuler"){
        include "ekstrakurikuler.php";
      }*/
      ?>-->
      <?php
  //Cek Halaman yang dituju
      array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = 'dashboard';
      ?>
      <!-- container section start -->
      <section id="container" class="">


        <header class="header dark-bg">
          <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>

          <!--logo start-->
          <a href="#" class="logo">Admin<span class="lite"> SMPN 34 Bandung</span></a>
          <!--logo end-->
          <div class="top-nav notification-row">
          </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
              <li class="<?php if($page=="dashboard"){
                echo('active');} ?>">
                <a class="" href="?page=dashboard">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <span>Pendaftaran</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                  <li class="<?php if($page=="pendafaran"){
                    echo('active');} ?>">
                    <a class="" href="?page=pendaftaran">
                      <i class=""></i>
                      <span>Penerimaan</span>
                    </a>
                  </li>
                  <!--
                  <li class="<?php //if($page=="daftarulang"){
                    //echo('active');} ?>">
                    <a class="" href="?page=daftarulang">
                      <i class=""></i>
                      <span>Daftar Ulang</span>
                    </a>
                  </li>-->
                  <li class="<?php if($page=="siswa"){
                    echo('active');} ?>">
                    <a class="" href="?page=siswa">
                      <i class=""></i>
                      <span>Siswa</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <span>Penjadwalan </span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                  <li class="<?php if($page=="jadwal"){
                    echo('active');} ?>">
                    <a class="" href="?page=jadwal">
                      <i class=""></i>
                      <span>Jadwal</span>
                    </a>
                  </li>
                  <li class="<?php if($page=="pelatih"){
                    echo('active');} ?>">
                    <a class="" href="?page=pelatih">
                      <i class=""></i>
                      <span>Pelatih</span>
                    </a>
                  </li>
                  <li class="<?php if($page=="ekstrakurikuler"){
                    echo('active');} ?>">
                    <a class="" href="?page=ekstrakurikuler">
                      <i class=""></i>
                      <span>Ekskul</span>
                    </a>
                  </li>
                  <li class="<?php if($page=="kelas"){
                    echo('active');} ?>">
                    <a class="" href="?page=kelas">
                      <i class=""></i>
                      <span>Kelas</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="<?php if($page=="akun"){
                      echo('active');} ?>">
                <a class="" href="?page=akun">
                    <span>Akun</span>
                </a>
              </li>
              <li class="">
                <a class="" href="../../controllers/admin/logout-admin.php" onclick="javascript: return confirm('Anda yakin ingin keluar ?')">
                  <span>Log out</span>
                </a>
              </li>  
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->
        <?php
        if ($page=="dashboard") {
          include 'dashboard.php';
        }
        elseif ($page=="pendaftaran") {
          include 'pendaftaran/pendaftaran.php';
        }
        elseif ($page=="daftarulang") {
          include 'pendaftaran/daftarulang.php';
        }
        elseif ($page=="verifikasi-pendaftaran") {
          include 'pendaftaran/verifikasi-pendaftaran.php';
        }
        elseif ($page=="siswa") {
          include 'pendaftaran/siswa.php';
        }
        elseif ($page=="pelatih") {
          include 'pelatih/pelatih.php';
        }
        elseif ($page=="add-pelatih") {
          include 'pelatih/add-pelatih.php';
        }
        elseif ($page=="edit-pelatih") {
          include 'pelatih/edit-pelatih.php';
        } 
        elseif ($page=="delete-pelatih") {
          include '../../controllers/admin/pelatih/delete.php';
        } 
        elseif ($page=="jadwal") {
          include 'jadwal/jadwal.php';
        }
        elseif ($page=="add-jadwal") {
          include 'jadwal/add-jadwal.php';
        }
        elseif ($page=="edit-jadwal") {
          include 'jadwal/edit-jadwal.php';
        }
        elseif ($page=="delete-jadwal") {
          include '../../controllers/admin/jadwal/delete.php';
        } 
        elseif ($page=="ekstrakurikuler") {
          include 'ekstrakurikuler/ekstrakurikuler.php';
        }
        elseif ($page=="add-ekstrakurikuler") {
          include 'ekstrakurikuler/add-ekstrakurikuler.php';
        }
        elseif ($page=="edit-ekstrakurikuler") {
          include 'ekstrakurikuler/edit-ekstrakurikuler.php';
        }
        elseif ($page=="delete-ekstrakurikuler") {
          include '../../controllers/admin/ekstrakurikuler/delete.php';
        }
        elseif ($page=="kelas") {
          include 'kelas/kelas.php';
        }
        elseif ($page=="add-kelas") {
          include 'kelas/add-kelas.php';
        }
        elseif ($page=="edit-kelas") {
          include 'kelas/edit-kelas.php';
        }
        elseif ($page=="delete-kelas") {
          include '../../controllers/admin/kelas/delete.php';
        }
        elseif ($page=="akun") {
          include 'akun/akun.php';
        }
        elseif ($page=="delete-akun") {
           include '../../controllers/admin/akun/delete.php';
        }
        elseif ($page=="add-akun") {
          include 'akun/add-akun.php';
        }
        elseif ($page=="edit-akun") {
          include 'akun/edit-akun.php';
        }
        ?>
        
        <!--/.row-->
        <!-- project team & activity end -->
        <div class="text-center">
          <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <!--main content end-->
    </section>
    <!-- container section start -->

    <!-- javascripts -->
    <script src="../../style/admin/js/jquery.js"></script>
    <script src="../../style/admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="../../style/admin/js/jquery-1.8.3.min.js"></script>
    <script type="../../style/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../../style/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../../style/admin/js/jquery.scrollTo.min.js"></script>
    <script src="../../style/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../../style/admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../../style/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../../style/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../../style/admin/js/owl.carousel.js"></script>
    <!-- jQuery full calendar -->
    <<script src="../../style/admin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../../style/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../../style/admin/js/calendar-custom.js"></script>
    <script src="../../style/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../../style/admin/js/jquery.customSelect.min.js"></script>
    <script src="../../style/admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../../style/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../../style/admin/js/sparkline-chart.js"></script>
    <script src="../../style/admin/js/easy-pie-chart.js"></script>
    <script src="../../style/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../style/admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../style/admin/js/xcharts.min.js"></script>
    <script src="../../style/admin/js/jquery.autosize.min.js"></script>
    <script src="../../style/admin/js/jquery.placeholder.min.js"></script>
    <script src="../../style/admin/js/gdp-data.js"></script>
    <script src="../../style/admin/js/morris.min.js"></script>
    <script src="../../style/admin/js/sparklines.js"></script>
    <script src="../../style/admin/js/charts.js"></script>
    <script src="../../style/admin/js/jquery.slimscroll.min.js"></script>

    

  </body>

  </html>
