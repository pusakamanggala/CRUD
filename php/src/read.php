<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM users");


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

    <link rel="stylesheet" href="style.css">

    <title>Data Peserta Vaksin</title>
</head>

<body class="w-100 h-100 bg-info d-flex justify-content-center flex-column align-items-center">
<h1 class="m-5">Data Peserta Vaksin</h1>
    <div class="w-75 p-4 bg-white rounded">
        <div class="justify-content-end w-100 d-flex flex-row">
            <a class="m-1" target="_blank" href="export_excel.php">EXPORT KE EXCEL </a>
            
            <p class="m-1"> | </p>
            <a  class="m-1" target="_blank" href="export_pdf.php"> EXPORT KE PDF</a>
        </div>
        
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1;
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $user_data['nik'] . "</td>";
                        echo "<td>" . $user_data['nama'] . "</td>";
                        echo "<td>" . $user_data['no_hp'] . "</td>";
                        echo "<td>" . $user_data['alamat'] . "</td>";
                        echo "<td><a href='update.php?nik=$user_data[nik]'>Edit</a> | <a href='delete.php?nik=$user_data[nik]'>Delete</a> | <a href='read_sertif.php?nik=$user_data[nik]'>Sertifikat</a> </td></tr> ";

                    } ?>
                
            </tbody>
        </table>
        <form method="get" action="regist_vaksin.php">
    <div class="container">
        <input class="view" type='submit' value='Tambah Data Baru'></td>
    </div>
</form>
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
<footer class="bg-info text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: white;">
  @Copyright by 20552011283_Dhia Dzulfiqar Wahdini_Kelas
  </div>
  <!-- Copyright -->
</footer>
</html>