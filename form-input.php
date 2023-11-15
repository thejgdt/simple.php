<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
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
    </style>
</head>

<body>

    <center>
        <h2 class="mt-4 mb-4">Input Data Mahasiswa</h2>
        <form method="post" action="simpan.php">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" class="form-control" onkeyup="isi_otomatis()" name="nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" class="form-control" name="nama"></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>
                        <select class="form-select" name="jurusan" id="">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" class="form-control" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-success" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>