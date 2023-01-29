<?php

include_once("koneksi.php");

$varlocations = $_POST['locations'];


$simpan = "INSERT INTO locations (nama_lokasi)  values ('$varlocations')";
if ($koneksi->query($simpan)) {
                    header("Location:add_locations.php");
} else {
    echo "<script> 
                    alert('SUBMIT GAGAL'); 
                    </script>";

};

?>