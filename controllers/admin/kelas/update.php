<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];

// update data ke database
mysqli_query($koneksi,"update kelas set kelas ='$kelas' where id_kelas ='$id_kelas'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanupdate'] = 'Data berhasil diubah';
header("location: ../../../views/admin/homeadmin.php?page=kelas");
?>