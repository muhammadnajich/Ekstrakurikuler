<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$ekskul_pendidikan_karakter = $_POST['ekskul_pendidikan_karakter'];
$ekskul_pbm = $_POST['ekskul_pbm'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

$jumlah = count($nama_lengkap);
for($i=0; $i<$jumlah; $i++){

// menginput data ke database
mysqli_query($koneksi,"insert into nilai values('','$ekskul_pendidikan_karakter[$i]','$ekskul_pbm[$i]','$nama_lengkap[$i]','$kelas[$i]','$nilai[$i]','')");

// mengalihkan halaman kembali ke index.php
	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/pelatih/homepelatih.php?page=nilai");
}
?>