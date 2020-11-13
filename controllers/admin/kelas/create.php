<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$kelas = $_POST['kelas'];

// menginput data ke database
mysqli_query($koneksi,"insert into kelas values('','$kelas','')");

// mengalihkan halaman kembali ke index.php
	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/admin/homeadmin.php?page=kelas");
?>

