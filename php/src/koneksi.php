<?php
/**
 * using mysqli_connect for database connection
 */
$servername = "mysql";
$username = "admin";
$password = "admin";
$dbnama = "vaksinasi";


$koneksi = new mysqli($servername, $username, $password, $dbnama);
 
?>