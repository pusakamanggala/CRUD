<?php
/**
 * using mysqli_connect for database connection
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbnama = "vaksinasi";


$koneksi = new mysqli($servername, $username, $password, $dbnama);
 
?>