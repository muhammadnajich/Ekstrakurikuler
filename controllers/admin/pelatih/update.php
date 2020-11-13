<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_pelatih = $_POST['id_pelatih'];
$nama_lengkap = $_POST['nama_lengkap'];
$gelar = $_POST['gelar'];
$id_ekskul = $_POST['id_ekskul'];
$nama_ekskul = $_POST['nama_ekskul'];

$cek_ekskul = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pelatih WHERE nama_ekskul='$_POST[nama_ekskul]'"));
	 //proses mengingatkan data sudah ada
	if ($cek_ekskul > 0) {
	    $_SESSION['pesangagalupdate'] = 'Gagal mengupdate data, data yang anda masukkan sudah mengajar pada ekskul sebelumnya, mohon periksa kembali';
	    header("location: ../../../views/admin/homeadmin.php?page=pelatih");
	}
	else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
		// menginput data ke database
		mysqli_query($koneksi,"update pelatih set nama_lengkap ='$nama_lengkap', gelar='$gelar', id_ekskul='$id_ekskul', nama_ekskul='$nama_ekskul' where id_pelatih ='$id_pelatih'");
		// mengalihkan halaman kembali ke index.php
		$_SESSION['pesanupdate'] = 'Data berhasil diupdate';
		header("location: ../../../views/admin/homeadmin.php?page=pelatih");
	 
	} 
?>