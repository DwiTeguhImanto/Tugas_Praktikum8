<h2>List Kontak</h2>
<a href="formInput.php">Tambah Data Kontak</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jkel</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
    </tr>

    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "select * from kontak");
    $no = 1;
    foreach ($kontak as $row) {
        echo "<tr>
        <td>$no</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $row['jkel'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['alamat'] . "</td>
        <td>" . $row['kota'] . "</td>
        <td>" . $row['pesan'] . "</td>
        </tr>";
        $no++;
    }
    ?>
</table>