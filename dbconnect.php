<?php
 // buat koneksi dengan database mysql
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "tugasakhir";
 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 

if(!$conn){
	die("error in connection");
}

?>