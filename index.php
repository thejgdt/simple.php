<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Swasta Barat</title>
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
            color: #000000;
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
            text-align: center;
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
            margin-top: 10px;
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
    </style>
</head>

<body>
    <header class="bg-dark text-white">
        <h1>THEJGDT</h1>
    </header>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link home active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mahasiswa" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link admin" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container d-flex align-items-center justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col mb-4">
                <div class="card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="card-body">
                        <img src="php-logo.png" alt="PHP Logo" style="max-width: 100px;">
                        <p class="mt-3">PHP (Hypertext Preprocessor) adalah bahasa pemrograman skrip sumber terbuka
                            untuk pengembangan web yang
                            dapat disematkan dalam HTML.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="card-body">
                        <img src="html-logo.png" alt="HTML Logo" style="max-width: 100px;">
                        <p class="mt-3">HTML (Hyper Text Markup Language) adalah bahasa markup standar untuk membuat dan
                            merancang tata letak halaman
                            web.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="card-body">
                        <img src="css-logo.png" alt="CSS Logo" style="max-width: 100px;">
                        <p class="mt-3">CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan dan format
                            dokumen yang ditulis dalam HTML.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="card-body">
                        <img src="js-logo.png" alt="JavaScript Logo" style="max-width: 100px;">
                        <p class="mt-3">JavaScript adalah bahasa pemrograman tingkat tinggi yang digunakan untuk membuat
                            halaman web interaktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>