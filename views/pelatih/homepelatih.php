<?php 
session_start();

  // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  echo "<script>alert('Anda harus Login terlebih dahulu');</script>";
  echo "<script>location='../../index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../style/img/logo.png" />
  <title>Kelola Karyawan</title>

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
      <?php
      //Cek Halaman yang dituju
      array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = 'dashboardpelatih';
      ?>
      <!-- container section start -->
      <section id="container" class="">
        <header class="header dark-bg">
          <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>

          <!--logo start-->
          <a href="#" class="logo">STMIK<span class="lite"> LPKIA</span></a>
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
              <!--<li class="<?php //if($page=="dashboardpelatih"){
                //echo('active');} ?>">
                <a class="" href="?page=dashboardpelatih">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>-->
              <!--<li class="<?php //if($page=="absensi"){
                //echo('active');} ?>">
                <a class="" href="?page=absensi">

                  <span>Admin</span>
                </a>
              </li>-->
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <i class="fa fa-user"></i>
                    <span>Admin</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                  <li><a class="" href="form_component.html">Setting</a></li>
                  <li><a class="" href="form_component.html">Log Out</a></li>
                </ul>
              </li>
              <li class="<?php if($page=="nilai"){
                echo('active');} ?>">
                <a class="" href="?page=nilai">
                  <span>Rekap Kehadiran</span>
                </a>
              </li>
              <li class="<?php if($page=="nilai"){
                echo('active');} ?>">
                <a class="" href="?page=nilai">
                  <span>Pengajuan Absen</span>
                </a>
              </li>
              <li class="<?php if($page=="nilai"){
                echo('active');} ?>">
                <a class="" href="?page=nilai">
                  <span>Daftar Karyawan</span>
                </a>
              </li>
              <li class="<?php if($page=="nilai"){
                echo('active');} ?>">
                <a class="" href="?page=nilai">
                  <span>Pengajuan Resign</span>
                </a>
              </li>
              <!--
              <li class="<?php //if($page=="profil"){
                //echo('active');} ?>">
                <a class="" href="?page=profil">
                  <span>Profil</span>
                </a>
              </li>-->
              
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->
        <?php
        if ($page=="dashboardpelatih") {
          include 'dashboardpelatih.php';
        }
        elseif ($page=="absensi") {
          include 'absensi/absensi.php';
        }
        elseif ($page=="add-absensi") {
          include 'absensi/add-absensi.php';
        }
        elseif ($page=="add-absensi2") {
          include 'absensi/add-absensi2.php';
        }
        elseif ($page=="nilai") {
          include 'nilai/nilai.php';
        }
        elseif ($page=="add-nilai") {
          include 'nilai/add-nilai.php';
        }
        elseif ($page=="add-nilai2") {
          include 'nilai/add-nilai2.php';
        }
        elseif ($page=="profil") {
          include 'profil/profil.php';
        }
        elseif ($page=="edit-profil") {
          include 'profil/edit-profil.php';
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
