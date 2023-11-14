<?php
include 'koneksi.php';

$id_mahasiswa = $_GET['irzan'];

$hapusdata = mysqli_query($koneksi,"DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

if($hapusdata){
    echo'<script language="javascript">
                    alert("Berhasil Hapus Data Mahasiswa");
                    document.location="dashboard.php";
                </script>';
}else{
    echo'<script language="javascript">
                    alert("Gagal Menghapus Data Mahasiswa");
                    document.location="dashboard.php";
                </script>';
}

?>