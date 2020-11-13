<?php 
session_start();
// koneksi database
include '../../../class/koneksi.php';

// menangkap data yang di kirim dari form
$id_ekskul = $_POST['id_ekskul'];
$nama_ekskul = $_POST['nama_ekskul'];
$jenis_ekskul = $_POST['jenis_ekskul'];

// update data ke database
mysqli_query($koneksi,"update ekstrakurikuler set nama_ekskul='$nama_ekskul', jenis_ekskul='$jenis_ekskul' where id_ekskul='$id_ekskul'");

// mengalihkan halaman kembali ke index.php
$_SESSION['pesanupdate'] = 'Data berhasil diubah';
header("location: ../../../views/admin/homeadmin.php?page=ekstrakurikuler");
?>