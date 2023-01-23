<?php
// Create database connection using config file
include_once("koneksi.php");
$nik = $_GET['nik'];

$db = mysqli_query($koneksi, "SELECT * FROM users WHERE nik= $nik");

$vaksindb = mysqli_query($koneksi, "SELECT * FROM vaksin WHERE nik= $nik");

if (mysqli_num_rows($vaksindb) == 0) {
    header("Location: sertif_notfound.php");
}

foreach ($db as $user_data) {
}
foreach ($vaksindb as $vaksin_data) {
}

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="w-100 h-100 bg-info d-flex justify-content-center flex-column align-items-center">
<h1 class="m-5">SERTIFIKAT VAKSIN</h1>
    <div class="w-75 p-4 bg-white rounded">
        <div class="justify-content-end w-100 d-flex flex-row">
       <?php echo "<a href='print_sertif.php?nik=$user_data[nik]'>PRINT SERTIFIKAT</a>" ?>
        </div>
        
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                   
                    
                </tr>
            </thead>
            <tbody>
            <?php 
                  
                        echo "<tr> <td> NIK </td> <td>" . $user_data['nik'] . "</td> </tr>";
                        echo "<tr> <td> Nama </td> <td>" . $user_data['nama'] . "</td> </tr>";
                        echo "<tr> <td> No HP </td> <td>" . $user_data['no_hp'] . "</td> </tr>";
                        echo "<tr> <td> Alamat </td> <td>" . $user_data['alamat'] . "</td> </tr>";
                        echo "<tr> <td> Jenis Vaksin </td> <td>" . $vaksin_data['type'] . "</td> </tr>";
                        echo "<tr> <td> Tanggal Vaksin </td> <td>" . $vaksin_data['date'] . "</td> </tr>";
                        echo "<tr> <td> Tempat Vaksin </td> <td>" . $vaksin_data['locations'] . "</td> </tr>";
                     ?>
                
            </tbody>
        </table>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>