<?php 
session_start();
// koneksi database
include '../../class/koneksi.php';

// menangkap data id yang di kirim dari url
$id_user = $_GET['id_user'];


// menghapus data dari database
mysqli_query($koneksi,"delete from user where id_user='$id_user'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanhapus'] = 'Data berhasil dihapus';
//header("location: ../../views/admin/homeadmin.php?page=ekstrakurikuler");
?>