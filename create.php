<?php

include_once("koneksi.php");

$intnik = $_POST['nik'];
$varnama = $_POST['name'];
$intno_hp = $_POST['phone'];
$varlokasi_vaksin = $_POST['location'];

$simpan = "insert into data_vaksinasi values ('$intnik', '$varnama', '$intno_hp', '$varlokasi_vaksin')";
if ($koneksi->query($simpan)) {
    echo "<script> 
                    alert('SUBMIT BERHASIL'); 
                    </script>";

} else {
    echo "<script> 
                    alert('SUBMIT GAGAL'); 
                    </script>";

};
header("Location:read.php");
?>