<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$ekskul_pendidikan_karakter = $_POST['ekskul_pendidikan_karakter'];
$ekskul_pbm = $_POST['ekskul_pbm'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$keterangan = $_POST['keterangan'];

$jumlah = count($nama_lengkap);
for($i=0; $i<$jumlah; $i++){
	
	mysqli_query($koneksi,"insert into absensi values('','$ekskul_pendidikan_karakter[$i]','$ekskul_pbm[$i]','$nama_lengkap[$i]','$kelas[$i]','$keterangan[$i]','')");

	$_SESSION['pesan'] = 'Data berhasil ditambahkan';
	header("location: ../../../views/pelatih/homepelatih.php?page=absensi");
	}
?>