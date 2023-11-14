<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:index.php'); 
    } else { 
        $id_login = $_SESSION['username']; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="image/logo_undira.jpg" width="80px" height="30px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Logout
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="contrainer">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <table class="table" width="100%" style="margin-top: 20px; border: 1px solid #ced4da; border-radius: 4px;">
        <thead>
            <th>Nama</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Dokumen</th>
            <th>Nomor Dokumen</th>
            <th>Email</th>
            <th>Nama Sekolah</th>
            <th>Jurusan</th>
            <th>Nilai Ujian</th>
            <th>Opsi</th>
        </thead>
        <?php
        include 'koneksi.php';

        $data = mysqli_query($koneksi,"SELECT id_mahasiswa, nama_mahasiswa,agama,tanggal_lahir,jenis_dokumen,nomor_dokumen,email,nama_mahasiswa,jurusan,nilai_ujian FROM tbl_mahasiswa");
        while ($hasildata = mysqli_fetch_object($data)) {
        ?>
        <tbody>
        <tr>
            <td><?php echo $hasildata -> nama_mahasiswa; ?></td>
            <td><?php echo $hasildata -> agama; ?></td>
            <td><?php echo $hasildata -> tanggal_lahir; ?></td>
            <td><?php echo $hasildata -> jenis_dokumen; ?></td>
            <td><?php echo $hasildata -> nomor_dokumen; ?></td>
            <td><?php echo $hasildata -> email; ?></td>
            <td><?php echo $hasildata -> nama_mahasiswa; ?></td>
            <td><?php echo $hasildata -> jurusan; ?></td>
            <td><?php echo $hasildata -> nilai_ujian; ?></td>
            <td>
            <a href="editdata.php?irzan=<?=$hasildata -> id_mahasiswa;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="hapusdata.php?irzan=<?=$hasildata -> id_mahasiswa;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        </tbody>
    <?php } ?>
    </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    

</body>

</html>