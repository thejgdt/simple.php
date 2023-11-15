<?php
include 'koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE mahasiswa SET (nim, nama, jurusan, jenis_kelamin, alamat) VALUES ('$nim', '$nama', '$jurusan', '$jenis_kelamin', '$alamat') where id_mahasiswa = '$id_mahasiswa'";
mysqli_query($koneksi, $query);

header("location:index.php");
?>