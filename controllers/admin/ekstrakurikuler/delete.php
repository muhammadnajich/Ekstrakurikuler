<?php 
session_start();
// koneksi database
include '../../class/koneksi.php';

// menangkap data id yang di kirim dari url
$id_ekskul = $_GET['id_ekskul'];


// menghapus data dari database
mysqli_query($koneksi,"delete from ekstrakurikuler where id_ekskul='$id_ekskul'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanhapus'] = 'Data berhasil dihapus';
//header("location: ../../views/admin/homeadmin.php?page=ekstrakurikuler");
?>