<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$agama = $_POST['agama'];
$no_hp = $_POST['no_hp'];
$domisili = $_POST['domisili'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_dokumen = $_POST['jenis_dokumen'];
$nomor_dokumen = $_POST['nomor_dokumen'];
$golongan_darah = $_POST['golongan_darah'];
$negara = $_POST['negara'];
$status_pernikahan = $_POST['status_pernikahan'];
$email = $_POST['email'];
$kode_pos = $_POST['kode_pos'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_sekolah = $_POST['nama_sekolah'];
$jurusan = $_POST['jurusan'];
$nilai_ujian = $_POST['nilai_ujian'];
$tahun_lulus = $_POST['tahun_lulus'];
$alamat_sekolah = $_POST['alamat_sekolah'];

if (isset($_POST['register'])) {
        $result = mysqli_query($koneksi,"SELECT * FROM TBL_MAHASISWA WHERE USERNAME = '$username'");
        if (!$result->num_rows > 0) {
            $result = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa(nama_mahasiswa, agama, no_hp, domisili, jenis_kelamin, tanggal_lahir, tempat_lahir, jenis_dokumen, nomor_dokumen, golongan_darah, negara, status_pernikahan, email, kode_pos, alamat, username, password, nama_sekolah, jurusan, nilai_ujian, tahun_lulus, alamat_sekolah, user_input, tanggal_input) 
            VALUES ('$nama','$agama','$no_hp','$domisili','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$jenis_dokumen','$nomor_dokumen','$golongan_darah','$negara','$status_pernikahan','$email','$kode_pos','$alamat','$username','$password','$nama_sekolah','$jurusan','$nilai_ujian','$tahun_lulus','$alamat_sekolah','SYSTEM',NOW())");
            if ($result) {
                echo '("<SCRIPT LANGUAGE="JavaScript">
                    window.alert("Pendaftaran Anda Berhasil")
                    window.location.href="login.html";
                     </SCRIPT>")';
            } else {
                echo '("<SCRIPT LANGUAGE="JavaScript">
                    window.alert("Pendaftaran Anda Gagal")
                    window.location.href="register.html";
                     </SCRIPT>")';
            }
        } else {
            echo '("<SCRIPT LANGUAGE="JavaScript">
                    window.alert("Username Sudah Terdaftar")
                    window.location.href="register.html";
                     </SCRIPT>")';
        }

}

?>