<?php
include 'koneksi.php';
session_start();

$email = $_POST['email'];
$password = (MD5($_POST['password']));

$data = mysqli_query($koneksi, "select * from t_user where email='$email' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0) {
    $_SESSION['email'] = "email";
    $_SESSION['status'] = "login";
    header('location:dashboard.html');
} else {
    header('location:index.php?pesan=gagal');
}
?>