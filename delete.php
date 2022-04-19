<?php 
 // periksa apakah user sudah login, cek kehadiran session name
 // jika tidak ada, redirect ke login.php
 session_start();
 if (!isset($_SESSION["nama"])) {
 header("Location: login.php");
 }
 // buka koneksi dengan MySQL
$id = $_GET['id'];

include('dbconnect.php');

$query = "DELETE FROM projek WHERE id_penyewa = '$id' ";

if (mysqli_query($conn , $query)) {
	header("location:home.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>