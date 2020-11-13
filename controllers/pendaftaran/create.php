<?php 
session_start();
// koneksi database
include '../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_pendaftaran = $_POST['id_pendaftaran'];
$kelas = $_POST['kelas'];
$ekskul_pendidikan_karakter = $_POST['ekskul_pendidikan_karakter'];
$ekskul_pbm = $_POST['ekskul_pbm'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];
$nama_ortu = $_POST['nama_ortu'];
$alamat_ortu = $_POST['alamat_ortu'];
$nomor_telepon_ortu = $_POST['nomor_telepon_ortu'];
$pengalaman_organisasi = $_POST['pengalaman_organisasi'];
$prestasi = $_POST['prestasi'];
$status_pendaftaran = $_POST['status_pendaftaran'];

	$cek_pendaftaran = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE nama_lengkap='$_POST[nama_lengkap]' AND nama_panggilan ='$_POST[nama_panggilan]'"));
	 //proses mengingatkan data sudah ada
	if ($cek_pendaftaran > 0) {
	    echo "<script>alert('Gagal menyimpan data, data yang anda masukkan telah terdaftar sebelumnya');history.go(-1);</script>";
	    header("location: ../../index.php?page=pendaftaran");
	}
	else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
		// menginput data ke database
		mysqli_query($koneksi,"insert into pendaftaran values('','$kelas','$ekskul_pendidikan_karakter','$ekskul_pbm','$nama_lengkap','$nama_panggilan','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$nomor_telepon','$nama_ortu','$alamat_ortu','$nomor_telepon_ortu','$pengalaman_organisasi','$prestasi','$status_pendaftaran','')");
		// mengalihkan halaman kembali ke index.php
		 echo "<script>alert('Data anda berhasil terkirim, kami akan segera memprosesnya, Terima Kasih');history.go(-1);</script>";
		header("location: ../../index.php?page=pendaftaran");
	 
	}
?>