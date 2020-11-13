<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$username = $_POST['username'];

// update data ke database
mysqli_query($koneksi,"update user set username ='$username' where id_user ='$id_user'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanupdate'] = 'Data berhasil diubah';
header("location: ../../../views/admin/homeadmin.php?page=akun");
?>