<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        .navbar {
            background-color: #333;
        }

        .navbar a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            text-align: center;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #ffffff;
            color: #000000 !important;
        }

        section {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: auto;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px 0 10px 0;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        .action-btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            margin-bottom: 5px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .edit-btn {
            background-color: #4285F4;
        }

        .delete-btn {
            background-color: #d32f2f;
        }

        .edit-btn:hover,
        .delete-btn:hover {
            background-color: #333;
        }

        .table {
            vertical-align: middle;
        }

        .mb-1 {
            margin: .25rem !important;
        }

        #table-bottom {
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="bg-dark text-white">
        <h1>Sistem Informasi Mahasiswa</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link home" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mahasiswa active" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link admin" href="form-login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">
        <h2 class="mt-4 mb-4">List Data Mahasiswa</h2>
        <div id="table-bottom" class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>GENDER</th>
                        <th>JURUSAN</th>
                        <th>ALAMAT</th>
                    </tr>
                </thead>
                <tbody>

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
                            <td>" . $row['alamat'] . "</td>
                            </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>