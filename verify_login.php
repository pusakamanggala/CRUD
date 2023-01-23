<?php 
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

if($login -> num_rows > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:regist_vaksin.php");
}else{

    header("location:index.html");
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
}


?>