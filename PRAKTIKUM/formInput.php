<!DOCTYPE html>

<head>
    <title>Form Input Kontak</title>
</head>

<body>
    <h2>Input Kontak</h2>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JKEL</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td>
                    <input type="text" name="pesan">
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>