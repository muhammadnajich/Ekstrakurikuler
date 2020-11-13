<?php 
session_start();
// koneksi database
include '../../class/koneksi.php';

// menangkap data id yang di kirim dari url
$id_pelatih = $_GET['id_pelatih'];


// menghapus data dari database
mysqli_query($koneksi,"delete from pelatih where id_pelatih ='$id_pelatih'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanhapus'] = 'Data berhasil dihapus';
//header("location: ../../views/admin/homeadmin.php?page=kelas");
?>