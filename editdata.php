<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.html');
} else {
  $username = $_SESSION['username'];
}

include 'koneksi.php';
$id_mahasiswa = $_GET['irzan'];
$ambildata = mysqli_query($koneksi,"SELECT id_mahasiswa,nama_mahasiswa,no_hp,jenis_kelamin,jenis_dokumen,nomor_dokumen,email,status_pernikahan FROM tbl_mahasiswa where id_mahasiswa = '$id_mahasiswa'");
$hasildata = mysqli_fetch_object($ambildata);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="image/undira.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css/bootstrap.css">
  <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="image/logo_undira.jpg" width="100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inputnilai.php">Input Nilai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lihatmahasiswa.php">Lihat Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="prosesedit.php" method="POST">
                    <input type="text" value="<?php echo $hasildata -> id_mahasiswa; ?>" name="id_mahasiswa" class="form-control" hidden>
                    <label>Nama Mahasiswa</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> nama_mahasiswa; ?>" name="nama_mahasiswa">
                    <label>Nomor Handphone</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> no_hp; ?>" name="nomor_hp">
                    <label>Jenis Kelamin</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> jenis_kelamin; ?>" name="jenis_kelamin">
                    <label>Jenis Dokumen</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> jenis_dokumen; ?>" name="jenis_dokumen">
                    <label>Nomor Dokumen</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> nomor_dokumen; ?>" name="nomor_dokumen">
                    <label>Email</label>
                    <input class="form-control" type="email" value="<?php echo $hasildata -> email; ?>" name="email">
                    <label>Status Pernikahan</label>
                    <input class="form-control" type="text" value="<?php echo $hasildata -> status_pernikahan; ?>" name="status_pernikahan">
                    <br>
                    <input type="submit" name="simpandata" class="btn btn-danger" value="Simpan">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>