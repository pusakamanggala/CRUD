<?php

include_once("koneksi.php");

$intnik = $_POST['nik'];
$varnama = $_POST['name'];
$intno_hp = $_POST['phone'];
$varalamat = $_POST['alamat'];

$simpan = "insert into users values ('$intnik', '$varnama', '$varalamat', '$intno_hp', 0)";
if ($koneksi->query($simpan)) {
    echo "<script> 
                    alert('SUBMIT BERHASIL'); 
                    </script>";
                    header("Location:read.php");
} else {
    echo "<script> 
                    alert('NIK SUDAH TERDAFTAR'); 
                    </script>";

};

?>