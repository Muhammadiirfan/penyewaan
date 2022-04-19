<?php
 // periksa apakah user sudah login, cek kehadiran session name
 // jika tidak ada, redirect ke login.php
 session_start();
 if (!isset($_SESSION["nama"])) {
 header("Location: login.php");
 }
 // buka koneksi dengan MySQL
include('dbconnect.php');

$penyewa = $_POST['nama_penyewa'];
$barang = $_POST['nama_barang'];
$sewa = $_POST['tgl_sewa'];
$kembali = $_POST['tgl_kembali'];
$harga = $_POST['jumlah_bayar'];


$query =  "INSERT INTO projek(nama_penyewa , nama_barang , tgl_sewa , tgl_kembali , jumlah_bayar) VALUES('$penyewa' , '$barang' , '$sewa' , '$kembali' , '$harga')";

if (mysqli_query($conn , $query)) {
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>