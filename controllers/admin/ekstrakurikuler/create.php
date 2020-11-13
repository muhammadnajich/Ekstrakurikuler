<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$nama_ekskul = $_POST['nama_ekskul'];
$jenis_ekskul = $_POST['jenis_ekskul'];

// menginput data ke database
mysqli_query($koneksi,"insert into ekstrakurikuler values('','$nama_ekskul','$jenis_ekskul','')");

// mengalihkan halaman kembali ke index.php
	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/admin/homeadmin.php?page=ekstrakurikuler");
?>

