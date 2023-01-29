<?php

// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$locations = mysqli_query($koneksi, "SELECT * FROM locations");

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}
?>
<!doctype html>
<html lang="en">

<form method='post' action='buat_sertif.php'>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <title>Buat Sertifikat Vaksin</title>
    </head>

    <body class="mainwrap">
        

        <div class="box d-flex justify-content-center align-items-center m-0 p-0">
            <div class="row p-0 flex">
                <div class="col p-0">
                    <img src="vector.jpg" class="img-fluid" alt="">

                </div>
                <div class="col p-5 bg-dark text-white d-flex flex-column justify-content-center gap-4">
                    <h2 class="mb-4">Buat Sertifikat Vaksin</h2>
                    
                    <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" id="" required>
                    <input type="date" name="date" placeholder="Tanggal Vaksin" id="" required>    
                </select>

                    <input type="number" name="batch" placeholder="Batch Vaksinasi" id="" required>
                    <select name="location" class="form-select p-0" aria-label="Default select example" required>
                        <option value="">Lokasi Vaksinasi</option>
                    <?php while($lokasi = mysqli_fetch_array($locations)) {
                        echo "<option value= $lokasi[id] >$lokasi[nama_lokasi]</option>";
                    } ?>
                    </select>
                    <select name="type" class="form-select p-0" aria-label="Default select example" required>
                        <option value="">Jenis Vaksin</option>
                        <option value="Vaksin 1">Vaksin 1</option>
                        <option value="Vaksin 2">Vaksin 2</option>
                        <option value="Booster">Booster</option>
                    </select>
                    <input class="submit" type='submit' value='SUBMIT'></td>
                    <a class="m-1 text-danger text-end" target="_blank" href="logout.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
    </body>
</form>
<form method="get" action="add_locations.php">
    <div class="container">
        <input class="view" type='submit' value='Tambah Lokasi Vaksin'></td>
    </div>

</form>
<form method="get" action="read.php">
    <div class="container">
        <input class="view" type='submit' value='Lihat Data Peserta'></td>
    </div>
</form>

</html>