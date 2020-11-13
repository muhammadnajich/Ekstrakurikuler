<?php 
session_start();
// koneksi database
include '../../class/koneksi.php';

// menangkap data id yang di kirim dari url
$id_jadwal = $_GET['id_jadwal'];


// menghapus data dari database
mysqli_query($koneksi,"delete from jadwal where id_jadwal='$id_jadwal'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanhapus'] = 'Data berhasil dihapus';
//header("location: ../../views/admin/homeadmin.php?page=ekstrakurikuler");
?>