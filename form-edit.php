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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 8px;
        }

        table {
            width: 50%;
            margin: auto;
            margin-top: 20px;
        }

        td {
            padding: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }

        .title-alignment {
            text-align: left;
        }
    </style>
</head>

<body>

    <center>
        <h2 class="title-alignment mt-4 mb-4">Edit Data Mahasiswa - UNSISBAR</h2>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $row['id_mahasiswa'] ?>" name="id_mahasiswa">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" class="form-control" value="<?php echo $row['nim'] ?>"
                            onkeyup="isi_otomatis()" name="nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" class="form-control" value="<?php echo $row['nama'] ?>" name="nama"></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button('L', $row['jenis_kelamin']) ?>>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button('P', $row['jenis_kelamin']) ?>>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>
                        <select class="form-select" name="jurusan">
                            <option value="TEKNIK INFORMATIKA" <?php echo ($row['jurusan'] == 'TEKNIK INFORMATIKA') ? 'selected' : ''; ?>>TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN" <?php echo ($row['jurusan'] == 'TEKNIK MESIN') ? 'selected' : ''; ?>>TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA" <?php echo ($row['jurusan'] == 'TEKNIK KIMIA') ? 'selected' : ''; ?>>TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" class="form-control" value="<?php echo $row['alamat'] ?>" name="alamat"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-success" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>