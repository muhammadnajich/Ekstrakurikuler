<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$nama_lengkap = $_POST['nama_lengkap'];
$gelar = $_POST['gelar'];
$id_ekskul = $_POST['id_ekskul'];
$nama_ekskul = $_POST['nama_ekskul'];

$cek_nip = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pelatih WHERE nama_lengkap='$_POST[nama_lengkap]' AND nama_ekskul='$_POST[nama_ekskul]'"));
	 //proses mengingatkan data sudah ada
	if ($cek_nip > 0) {
	    $_SESSION['pesangagal'] = 'Gagal menyimpan data, data yang anda masukkan sudah ada sebelumnya, mohon periksa kembali';
	    header("location: ../../../views/admin/homeadmin.php?page=pelatih");
	}
	else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
		// menginput data ke database
		mysqli_query($koneksi,"insert into pelatih values('','$nama_lengkap','$gelar','$id_ekskul','$nama_ekskul','')");
		// mengalihkan halaman kembali ke index.php
		$_SESSION['pesan'] = 'Data berhasil ditambahkan';
		header("location: ../../../views/admin/homeadmin.php?page=pelatih");
	 
	}
?>