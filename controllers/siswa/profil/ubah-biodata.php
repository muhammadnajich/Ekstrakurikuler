<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat_ortu = $_POST['alamat_ortu'];
$nomor_telepon_ortu = $_POST['nomor_telepon_ortu'];

mysqli_query($koneksi,"update siswa set nama_lengkap ='$nama_lengkap', nama_panggilan='$nama_panggilan', alamat='$alamat', nomor_telepon='$nomor_telepon', alamat_ortu='$alamat_ortu', nomor_telepon_ortu='$nomor_telepon_ortu' where id_user ='$id_user'");
		
	// mengalihkan halaman kembali ke index.php
	header("location: ../../../views/siswa/homesiswa.php?page=biodata");	 
?>