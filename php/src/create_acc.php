<?php

include_once("koneksi.php");

$varusername = $_POST['username'];
$varpassword = $_POST['password'];

$save = "INSERT INTO login values ('','$varusername', '$varpassword')";
if ($koneksi->query($save)) {
    echo "<script> 
                    alert('SUBMIT BERHASIL'); 
                    </script>";

} else {
    echo "<script> 
                    alert('SUBMIT GAGAL'); 
                    </script>";

};
header("Location:index.html");
?>