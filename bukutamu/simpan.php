<?php

$username 			= $_POST['username'];
$password 			= $_POST['password'];

include 'koneksi.php';
$sql = "INSERT INTO bukutamu (username, password) values ('$username','$password')";


$query = mysqli_query ($koneksi , $sql); 
if ($query){
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan'); 
		window.location ='lihat_login.php';
	</script>
	<?php
}
?>