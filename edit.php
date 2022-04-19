<?php
 // periksa apakah user sudah login, cek kehadiran session name
 // jika tidak ada, redirect ke login.php
 session_start();
 if (!isset($_SESSION["nama"])) {
 header("Location: login.php");
 }
 // buka koneksi dengan MySQL
include('dbconnect.php');

$id = $_GET['id_penyewa'];
$penyewa = $_GET['nama_penyewa'];
$barang = $_GET['nama_barang'];
$sewa = $_GET['tgl_sewa'];
$kembali = $_GET['tgl_kembali'];
$harga = $_GET['jumlah_bayar'];

//query update
$query = "UPDATE projek SET nama_penyewa='$penyewa' , nama_barang='$barang' , tgl_sewa='$sewa' ,tgl_kembali='$kembali' ,  jumlah_bayar='$harga' WHERE id_penyewa='$id' ";

if (mysqli_query($conn, $query)) {
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>