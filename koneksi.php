<?php 
$koneksi = mysqli_connect("localhost","root","","praktek_01_016");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>