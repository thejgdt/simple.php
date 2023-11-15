<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>

<body>
    <header>
        <h1>List Mahasiswa</h1>
    </header>

    <section>
        <table>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>

            <?php
            include 'koneksi.php';
            $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            $no = 1;
            foreach ($mahasiswa as $row) {
                $jenis_kelamin = $row['jenis_kelamin'] == 'p' ? 'perempuan' : 'laki-laki';
                echo "<tr>
                    <td>$no</td>
                    <td>" . $row['nim'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $jenis_kelamin . "</td>
                    <td>" . $row['jurusan'] . "</td>
                    <td>
                        <a class='action-btn edit-btn' href='form-edit.php?id_mahasiswa=$row[id_mahasiswa]'>Edit</a>
                        <a class='action-btn delete-btn' href='delete.php?id_mahasiswa=$row[id_mahasiswa]'>Delete</a>
                    </td>
                    </tr>";
                $no++;
            }
            ?>
        </table>

        <button>
            <a href="form-input.php">Masukkan Data Lainnya</a>
        </button>
    </section>
</body>

</html>