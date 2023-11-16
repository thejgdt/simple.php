<?php
session_start();
require('koneksi.php');

$nama = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$nama' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $nama;
    header("location: index.php");
} else {
    echo "Login gagal. Silakan coba lagi.";
}
?>