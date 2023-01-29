<?php
/**
 * using mysqli_connect for database connection
 */
$servername = "mysql";
$username = "root";
$password = "superadmin";
$dbnama = "vaksinasi";


$koneksi = new mysqli($servername, $username, $password, $dbnama);
 
?>