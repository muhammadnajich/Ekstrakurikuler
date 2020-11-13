<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include '../class/koneksi.php';
// menangkap data yang dikirim dari form login
$id_user= $_POST['id_user'];
$nama_lengkap= $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$_SESSION["nama_lengkap"] = $data["nama_lengkap"];

	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../views/admin/homeadmin.php");
	// cek jika user login sebagai pelatih
	}else if($data['level']=="pelatih"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelatih";
		// alihkan ke halaman dashboard pelatih
		header("location:../views/pelatih/homepelatih.php");
	// cek jika user login sebagai siswa
	}else if($data['level']=="siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:../views/siswa/homesiswa.php");
	}else{
		// alihkan ke halaman login kembali
		echo "<script>alert('Username atau Password yang anda masukkan salah, silahkan di cek kembali');history.go(-1);</script>";
		header("location:../index.php?page=login");
	}	
}else{
	echo "<script>alert('Username atau Password yang anda masukkan salah, silahkan di cek kembali');history.go(-1);</script>";
	header("location:../index.php?page=login");
}
?>