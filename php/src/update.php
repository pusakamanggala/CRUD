<?php
include_once("koneksi.php");
$nik = $_GET['nik'];

$db = mysqli_query($koneksi, "SELECT * FROM users WHERE nik= $nik");

foreach ($db as $data) {
}
?>

<!doctype html>
<html lang="en">


<form method='post' action='proses_edit.php'>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <title>Edit Data Peserta</title>
    </head>

    <body>

        <div class="box d-flex justify-content-center align-items-center m-0 p-0">
            <div class="row p-0 flex">
                <div class="col p-0">
                    <img src="vector.jpg" class="img-fluid" alt="">
                </div>
                <div class="col p-5 bg-dark text-white d-flex flex-column justify-content-center gap-4">
                    <h2 class="mb-4">Update Data</h2>
                    <form action="proses_edit.php" method="GET">
                        <input type="hidden" name="nik" value="<?php echo $nik ?>" readonly>
                        <input type="text" name="name" placeholder="Nama Lengkap" id="" value="<?php echo $data['nama'] ?>" required>

                        <input type="number" name="phone" placeholder="No Hp" value="<?php echo $data['no_hp'] ?>" id="" required>
                        <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'] ?>"  id="" required>
                            <button class="submit">EDIT</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>