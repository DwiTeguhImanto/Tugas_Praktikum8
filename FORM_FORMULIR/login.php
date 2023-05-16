<?php
// memulai session
session_start();
// memanggil file koneksi ke db
include "koneksi.php";

?>

<!-- form login menggyunakan table -->
<form action="" method="post">
    <table align="center">
        <tr>
            <th colspan="2" height="40">FORM LOGIN</th>
        </tr>
        <tr>
            <td width="100">Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="100">Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login" name="proseslogin"></td>
        </tr>

    </table>
</form>


<?php
// ketika tombol proseslogin diklik 
if (isset($_POST['proseslogin'])) {
    // panggil kolom sesuai form disnin menggunakan username dan password
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE 
    username = '$_POST[username]' and password = '$_POST[password]'");

    // cek data yang username dan password sesuai dengan yang dimasukkan 
    $cek = mysqli_num_rows($sql);
    if ($cek > 0) {
        $_SESSION['username'] = $_POST['username'];
        // jika iya diarahkan ke halaman index (halaman utama)
        echo "<meta http-equiv=refresh content=0;URL='index.php'>";
    } else {
        // jika tidak maka dikembalikan ke formlogin
        echo "<p align=center><b>Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}
?>