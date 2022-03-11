<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM data_vaksinasi");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Peserta Vaksinasi</title>
</head>

<body>

    <div class="box d-flex justify-content-center align-items-center m-0 p-0">
        <div class="row p-0 flex">
            <div class="col p-0">
                <img src="vector.jpg" class="img-fluid" alt="">
            </div>
            <div class="col p-5 bg-dark text-white d-flex flex-column justify-content-center gap-4">
                <h2 class="mb-4">Peserta Vaksinasi</h2>
                <div class="peserta">
                    <?php
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>NIK : " . $user_data['nik'] . "</td><br>";
                        echo "<td>Nama : " . $user_data['nama'] . "</td><br>";
                        echo "<td>No HP : " . $user_data['no_hp'] . "</td><br>";
                        echo "<td>Lokasi Vaksinasi : " . $user_data['lokasi_vaksin'] . "</td><br>";
                        echo "<a class='update' href='update.php?nik=$user_data[nik]'>Edit</a> <a class='delete' href='delete.php?nik=$user_data[nik]'>Delete</a></td></tr>";
                        echo "<br> <br>";
                        echo "</tr>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

<form method="get" action="index.html">
    <div class="container">
        <input class="view" type='submit' value='Tambah Data Baru'></td>
    </div>
</form>


</html>