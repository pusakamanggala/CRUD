<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$nik = $_GET['nik'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM users WHERE nik=$nik");
 
// After delete redirect to Home, so that latest user list will be displayed.


if($result){
    echo "<script> 
                    alert('DELETE BERHASIL'); 
                    </script>";
                    header("Location:read.php");
} else {
    echo "<script> 
                    alert('SERTIFIKAT SUDAH TERGENERATE | DATA TIDAK BISA DIHAPUS'); 
                    </script>";
                
};
?>