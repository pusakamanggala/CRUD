<?php

include_once("koneksi.php");

$varnik = $_POST['nik'];
$intbatch = $_POST['batch'];
$vardate = $_POST['date'];
$varlocation = $_POST['location'];
$vartype = $_POST['type'];

// $simpan = "INSERT into vaksin values ('', '$varnik', '$vartype', '$vardate', '$intbatch', '$varlocation')";

$simpan = "INSERT INTO vaksin ( nik, type, date, batch, locations_id ) VALUES ('$varnik', '$vartype', '$vardate', '$intbatch', '$varlocation')";


if ($koneksi->query($simpan)) {
    $updateStatus = mysqli_query($koneksi, "UPDATE users SET status_sertif= 1 WHERE nik='$varnik' ");
    header("Location:read_sertif.php?nik=$varnik");
} else {
    echo "<script> alert('NIK TIDAK DITEMUKAN ATAU SERTIFIKAT SUDAH DIBUAT'); </script>";

};

?>