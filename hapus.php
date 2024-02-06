<?php
 include 'koneksi3.php';
 $id=$_GET['id'];

 $sql = "DELETE FROM tabel where no='$id'";
 $squery = mysqli_query ($koneksi, $sql);

 if ($squery){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='lihat_buku.php';
 </script>
 <?php
 }
 ?>