<?php
// menjalankan session
session_start();
// menghapus session yang ada 
session_destroy();
// mengarahkan ke halaman login 
header("location:login.php");

?>