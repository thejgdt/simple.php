<?php
include 'koneksi.php';

$id_mahasiswa = $_GET['id_mahasiswa'];

$query = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
$mahasiswaQuery = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($mahasiswaQuery);

$isLaki = $row['jenis_kelamin'] == 'L';

function active_radio_button($value, $input)
{
    return $value === $input ? 'checked' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membuat Form Inputan Data</title>
</head>

<center>

    <body>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $row['id_mahasiswa'] ?>" name="id_mahasiswa">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" value="<?php echo $row['nim'] ?>" onkeyup="isi_otomatis()" name="nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" value="<?php echo $row['nama'] ?>" name="nama"></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button('L', $row['jenis_kelamin']) ?>>Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button('P', $row['jenis_kelamin']) ?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>
                        <select name="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" value="<?php echo $row['alamat'] ?>" name="alamat"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</center>

</html>