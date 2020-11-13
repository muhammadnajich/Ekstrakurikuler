<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

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
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi, "update pendaftaran set status_pendaftaran='$status_pendaftaran' where id_pendaftaran='$id_pendaftaran'");
mysqli_query($koneksi, "insert into siswa values('','$id_pendaftaran','$kelas','$ekskul_pendidikan_karakter','$ekskul_pbm','$nama_lengkap','$nama_panggilan','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$nomor_telepon','$nama_ortu','$alamat_ortu','$nomor_telepon_ortu','$pengalaman_organisasi','$prestasi','')");
mysqli_query($koneksi, "insert into user values('','$nama_lengkap','$username','$password','$level','')");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesandaftar'] = 'Data siswa telah terdaftar sebagai anggota ekstrakurikuler';
header("location: ../../../views/admin/homeadmin.php?page=pendaftaran");
?>