<?php
// include database connection file
include_once("koneksi.php");
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['alamat'];

    $result = mysqli_query($koneksi, "UPDATE users SET nama='$name',alamat='$location',no_hp='$phone' WHERE nik='$nik' ");
    
    // // Redirect to homepage to display updated user in list
    header("Location: read.php");

?>