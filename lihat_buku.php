
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.jpg" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bukutamu/lihat_buku.php">Data Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bukutamu/lihat_buku.php">Data Buku</a>
        </li>
       
      </ul>
      <form class="d-flex" action="login.php">
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
    </head>
    <body>
        <div>
          <table class="table table-bordered">

            <h2>TABEL PENGGUNA</h2>
           
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
</tr>

    <?php
    include 'koneksi3.php' ;
    $sql = "SELECT*FROM tabel" ;
    $query = mysqli_query ($koneksi, $sql) ;
    $no=1;
    while ($data=mysqli_fetch_array($query)){?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['tanggal'];?></td>
        <td><?php echo $data['alamat'];?></td>
        <td><?php echo $data['username'];?></td>
        <td><?php echo $data['password'];?></td>
       <td>
        <a href="hapus.php?id=<?php echo $data['no'];?>"
        onclick="return confirm('yakin mau dihapus .?')">
           <span class="text"></span>Hapus</Details></span>
    </a>
    </td>
    </tr>
<?php } ?>
    
    </table>
    <form method ="post" action="index.php" class="style">
       <button type="submit">Daftar</button>
    </form>
    </div>
    </body>
    </html>