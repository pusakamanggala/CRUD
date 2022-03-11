<?php
// include database connection file
include_once("koneksi.php");
    $nik = $_POST['nomor'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    $result = mysqli_query($koneksi, "UPDATE data_vaksinasi SET nama='$name',lokasi_vaksin='$location',no_hp='$phone' WHERE nik='$nik' ");
    
    // // Redirect to homepage to display updated user in list
    header("Location: read.php");

?>