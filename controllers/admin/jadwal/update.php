<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$id_pelatih = $_POST['id_pelatih'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_ekskul = $_POST['nama_ekskul'];

// update data ke database
mysqli_query($koneksi,"update jadwal set hari='$hari', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar', id_pelatih='$id_pelatih', nama_lengkap='$nama_lengkap', nama_ekskul='$nama_ekskul' where id_jadwal='$id_jadwal'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanupdate'] = 'Data berhasil diubah';
header("location: ../../../views/admin/homeadmin.php?page=jadwal");
?>