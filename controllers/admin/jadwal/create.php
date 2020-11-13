<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$hari = $_POST['hari'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$id_pelatih = $_POST['id_pelatih'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_ekskul = $_POST['nama_ekskul'];

// menginput data ke database
mysqli_query($koneksi,"insert into jadwal values('','$hari','$jam_masuk','$jam_keluar','$id_pelatih','$nama_lengkap','$nama_ekskul','')");

// mengalihkan halaman kembali ke index.php
	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/admin/homeadmin.php?page=jadwal");
?>

