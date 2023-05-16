<?php

session_start();
// jika tidak ada session username yg disimpan maka akan menuju ke halaman login.
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>