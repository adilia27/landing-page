<?php 

session_start(); 

include("koneksi.php"); 

$username = $_POST['username']; 

$password = $_POST['password']; 

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 

$result = $conn->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['username'] = $username; 

 header("Location: welcome.php"); 

} else { 

 echo "Login gagal. <a href='index.php'>Coba lagi</a>"; 

} 

$conn->close(); 

?>