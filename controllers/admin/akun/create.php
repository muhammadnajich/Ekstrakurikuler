<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama_lengkap','$username','$password','$level','')");

// mengalihkan halaman kembali ke index.php
	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/admin/homeadmin.php?page=akun");
?>

