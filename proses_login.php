<?php

$username 			= $_POST['username'];
$password 			= $_POST['password'];


include 'koneksi3.php';
$sql = "SELECT* FROM tabel
 WHERE username='$username' AND password='$password'";
$query = mysqli_query ($koneksi , $sql); 

if (mysqli_fetch_array($query)){
    header("location:lihat_buku.php");
}else{
    echo"<script>alert('Maaf Anda Gagal Login');
    window.location.assign('login.php');</script>"; 
    
}
	
