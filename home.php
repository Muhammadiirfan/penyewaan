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
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>
	<?php 
	include ('./formatharga/lib.php');
	?>

	<?php
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM projek";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		<div align="right">
		<h4><p id="tanggal"><?php echo date("d M Y"); ?></p></h4>
		</div>
		
		<h1><marquee>Membuat CRUD Sederhana Data Penyewaan Kamera</marquee></h1>
		<div class="row">
			<div class="col-sm-3">
				<h3>Form Tambah Data</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Nama Penyewa</label>
						<input type="text" name="nama_penyewa" class="form-control">
					</div>
					<div class="form-group">
						<label>Tipe Kamera</label>
						<input type="text" name="nama_barang" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Sewa</label>
						<input type="text" name="tgl_sewa" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Kembali</label>
						<input type="text" name="tgl_kembali" class="form-control">
					</div>
					<div class="form-group">
						<label>Jumlah Bayar</label>
						<input type="text" name="jumlah_bayar" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Data</button>					
				</form>
				
			</div>
			<div class="col-sm-9">
				<h3>Tabel Data Penyewaan</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Penyewa</th>
							<th>Tipe Kamera</th>
							<th>Tgl Sewa</th>
							<th>Tgl kembali</th>
							<th>Jumlah Bayar</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama_penyewa']; ?></td>
							<td><?php echo $row['nama_barang']; ?></td>
							<td><?php echo $row['tgl_sewa']; ?></td>
							<td><?php echo $row['tgl_kembali']; ?></td>
							<td><?php echo rupiah ($row['jumlah_bayar']); ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_penyewa'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_penyewa']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
				<a href="logout.php" class="btn btn-danger">Keluar</a>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>

	</script>
</html> 