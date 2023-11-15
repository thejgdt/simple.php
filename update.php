<?php
include 'koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE mahasiswa SET nim = ?, nama = ?, jurusan = ?, jenis_kelamin = ?, alamat = ? WHERE id_mahasiswa = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "sssssi", $nim, $nama, $jurusan, $jenis_kelamin, $alamat, $id_mahasiswa);
mysqli_stmt_execute($stmt);

header("location:index.php");
?>