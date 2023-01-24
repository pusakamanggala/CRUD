<?php

include_once("koneksi.php");

$varusername = $_POST['username'];
$varpassword = $_POST['password'];

$save = "INSERT INTO login (username, password) values ('$varusername', '$varpassword')";
if ($koneksi->query($save)) {
    header("Location:index.html");
} else {
    echo "<script> 
                    alert('Username sudah ada, silahkan gunakan username lain'); 
                    </script>";

};

?>