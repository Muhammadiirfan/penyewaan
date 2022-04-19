<?php
 // periksa apakah user sudah login, cek kehadiran session name
 // jika tidak ada, redirect ke login.php
 session_start();
 if (!isset($_SESSION["nama"])) {
 header("Location: login.php");
 }
 // buka koneksi dengan MySQL
 include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>penyewaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

include('dbconnect.php');

//query
$query = "SELECT * FROM projek WHERE id_penyewa='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Penyewaan</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_penyewa" value="<?php echo $row['id_penyewa']; ?>">

		<div class="form-group">
			<label>Nama Penyewa</label>
			<input type="text" name="nama_penyewa" class="form-control" value="<?php echo $row['nama_penyewa']; ?>">			
		</div>

		<div class="form-group">
			<label>Tipe Kamera</label>
			<input type="text" name="nama_barang" class="form-control" value="<?php echo $row['nama_barang']; ?>">			
		</div>

		<div class="form-group">
			<label>Tanggal Sewa</label>
			<input type="text" name="tgl_sewa" class="form-control" value="<?php echo $row['tgl_sewa']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Tanggal kembali</label>
			<input type="text" name="tgl_kembali" class="form-control" value="<?php echo $row['tgl_kembali']; ?>">			
		</div>

		<div class="form-group">
			<label>Jumlah Bayar</label>
			<input type="text" name="jumlah_bayar" class="form-control" value="<?php echo $row['jumlah_bayar']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Data </button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 