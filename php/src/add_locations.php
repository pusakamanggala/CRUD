<?php


session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}
?>

<!doctype html>
<html lang="en">



<form method='post' action='create_locations.php'>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <title>Tambah Lokasi Vaksin</title>
    </head>

    <body class="mainwrap">
        

        <div class="box d-flex justify-content-center align-items-center m-0 p-0">
            <div class="row p-0 flex">
                <div class="col p-0">
                    <img src="vector.jpg" class="img-fluid" alt="">

                </div>
                <div class="col p-5 bg-dark text-white d-flex flex-column justify-content-center gap-4">
                    <h2 class="mb-4">Tambah Lokasi Vaksin</h2>
                    <input type="text" name="locations" placeholder="Lokasi Vaksin" id="" required>
                    <input class="submit" type='submit' value='SUBMIT'></td>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
    </body>
</form>
<form method="get" action="read.php">
    <div class="container">
        <input class="view" type='submit' value='Lihat Data Peserta'></td>
    </div>

</form>
<form method="get" action="create_sertif.php">
    <div class="container">
        <input class="view" type='submit' value='Buat Sertifikat Vaksin'></td>
    </div>

</form>
</form>

</html>