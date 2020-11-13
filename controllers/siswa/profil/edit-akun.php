<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"update user set password ='$password' where username ='$username'");
		
	// mengalihkan halaman kembali ke index.php
	header("location: ../../../views/siswa/homesiswa.php?page=akun");	 
?>