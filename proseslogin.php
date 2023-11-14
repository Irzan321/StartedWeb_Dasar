<?php 
session_start();
 include 'koneksi.php';

    $username = $_POST['nama_anda'];
    $password = md5($_POST['password']);
    if (isset($_POST['kirim'])) {
        $cekuser = mysqli_query($koneksi,"SELECT * FROM tbl_mahasiswa WHERE username = '$username' and password = '$password'");
        if (mysqli_num_rows($cekuser)==1) {
            $id_login = mysqli_fetch_array($cekuser);
            $_SESSION['username']=$id_login['username'];
                echo '<SCRIPT LANGUAGE="JavaScript">
                    window.alert("Login Anda Berhasil")
                    window.location.href="dashboard.php";
                    </SCRIPT>';
        }else{
            die("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Login Anda gagal')
            window.location.href='login.html';
            </SCRIPT>");
        }
    }
?>