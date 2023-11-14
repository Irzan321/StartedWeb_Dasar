<?php
include 'koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nomor_hp = $_POST['nomor_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jenis_dokumen = $_POST['jenis_dokumen'];
$nomor_dokumen = $_POST['nomor_dokumen'];
$email = $_POST['email'];
$status_pernikahan = $_POST['status_pernikahan'];

    if(isset($_POST['simpandata'])){
        $simpandata = mysqli_query($koneksi,"UPDATE tbl_mahasiswa SET nama_mahasiswa= '$nama_mahasiswa',no_hp='$nomor_hp',jenis_kelamin='$jenis_kelamin',jenis_dokumen='$jenis_dokumen',nomor_dokumen='$nomor_dokumen',status_pernikahan='$status_pernikahan',email='$email' WHERE ID_MAHASISWA ='$id_mahasiswa'");
        if($simpandata){
            echo'<script language="javascript">
                    alert("Berhasil Mengedit Data Mahasiswa");
                    document.location="dashboard.php";
                </script>';
        }else{
            echo'<script language="javascript">
                    alert("Gagal Mengedit Data Mahasiswa");
                    document.location="dashboard.php";
                </script>';
        }
    }

?>