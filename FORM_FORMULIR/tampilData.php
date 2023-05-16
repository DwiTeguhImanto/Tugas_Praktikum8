<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DATA FORMULIR </title>
    <style>
        .btn {
            float: right;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <h1 align="center">DATA FORMULIR </h1>
            <div class="container-fluid ">
                <table class="table" style="margin-left:auto;margin-right:auto">
                    <thead class="thead-dark">
                        <tr>
                            <th>Registrasi</th>
                            <th></th>
                        </tr>
                    </thead>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from regis");
                        foreach ($data as $row) {
        echo "
            <tr>
                <td>1. Jenis Pendaftaran</td>
                <td>" . $row['jenis_pendaftaran'] . "</td>   
            </tr>
            <tr>
                <td>2. Tanggal Masuk Sekolah</td>
                <td>" . $row['tgl_msksklh'] . "</td>
            </tr>
            <tr>
                <td>3. NIS</td>
                <td>" . $row['NIS'] . "</td>
            </tr>
            <tr>
                <td>4. Nomor Peserta Ujian</td>
                <td>" . $row['nomor_pesertaujn'] . "</td>
            </tr>
            <tr>
                <td>5. Apakah Pernah Paud</td>
                <td>" . $row['paud'] . "</td>
            </tr>
            <tr>
                <td>6. Apakah Pernah Tk</td>
                <td>" . $row['tk'] . "</td>
            </tr>
            <tr>
                <td>7. NO. Seri SKHUN Sebelumnya</td>
                <td>" . $row['skhun'] . "</td>
            </tr>
            <tr>
                <td>8. NO. Seri Ijazah Sebelumnya</td>
                <td>" . $row['ijazah'] . "</td>
            </tr>
            <tr>
                <td>9. Hobby</td>
                <td>" . $row['hobi'] . "</td>
            </tr>
            <tr>
                <td>10. Cita - Cita</td>
                <td>" . $row['cita'] . "</td>
            </tr>
                
        ";
                        }?>
        
        <thead class="thead-dark">
            <tr>
                <th>Data Pribadi</th>
                <th></th>
            </tr>
        </thead>
        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from datapribadi");
                        foreach ($data as $row) {
        echo "
            <tr>
                <td>11. Nama Lengkap</td>
                <td>" . $row['nama'] . "</td>   
            </tr>
            <tr>
                <td>12. Jenis Kelamin</td>
                <td>" . $row['jenis_kelamin'] . "</td>
            </tr>
            <tr>
                <td>13. NISN</td>
                <td>" . $row['nisn'] . "</td>
            </tr>
            <tr>
                <td>14. NIK</td>
                <td>" . $row['nik'] . "</td>
            </tr>
            <tr>
                <td>15. Tempat Lahir</td>
                <td>" . $row['tempat_lahir'] . "</td>
            </tr>
            <tr>
                <td>16. Tanggal Lahir</td>
                <td>" . $row['tgl_lahir'] . "</td>
            </tr>
            <tr>
                <td>17. Agama</td>
                <td>" . $row['agama'] . "</td>
            </tr>
            <tr>
                <td>18. Berkebutuhan Khusus</td>
                <td>" . $row['abk'] . "</td>
            </tr>
            <tr>
                <td>19. Alamat</td>
                <td>" . $row['alamat'] . "</td>
            </tr>
            <tr>
                <td>20. RT</td>
                <td>" . $row['rt'] . "</td>
            </tr>
            <tr>
                <td>21. RW</td>
                <td>" . $row['rw'] . "</td>   
            </tr>
            <tr>
                <td>22. Dusun</td>
                <td>" . $row['dusun'] . "</td>
            </tr>
            <tr>
                <td>23. Kelurahan / Desa</td>
                <td>" . $row['desa'] . "</td>
            </tr>
            <tr>
                <td>24. Kecamatan</td>
                <td>" . $row['kecamatan'] . "</td>
            </tr>
            <tr>
                <td>25. Kode Pos</td>
                <td>" . $row['kodepos'] . "</td>
            </tr>
            <tr>
                <td>26. Tempat Tinggal</td>
                <td>" . $row['tempat_tinggal'] . "</td>
            </tr>
            <tr>
                <td>27. Transportasi</td>
                <td>" . $row['transport'] . "</td>
            </tr>
            <tr>
                <td>28. No HP </td>
                <td>" . $row['nohp'] . "</td>
            </tr>
            <tr>
                <td>29. No Telepon</td>
                <td>" . $row['notelp'] . "</td>
            </tr>
            <tr>
                <td>30. Email</td>
                <td>" . $row['email'] . "</td>
            </tr>
            <tr>
                <td>31. Bantuan KPS / KPH / KIP</td>
                <td>" . $row['bantuan_kip'] . "</td>   
            </tr>
            <tr>
                <td>32. No KPS / KPH / KIP</td>
                <td>" . $row['nokip'] . "</td>
            </tr>
        ";
                        }?>

        <thead class="thead-dark">
            <tr>
                <th>Data Ayah Kandung</th>
                <th></th>
            </tr>
        </thead>
        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from d_ayah");
                        foreach ($data as $row) {
        echo "
            <tr>
                <td>33. Nama Ayah Kandung</td>
                <td>" . $row['nama_ayah'] . "</td>   
            </tr>
            <tr>
                <td>34. Tahun Lahir</td>
                <td>" . $row['tahun_lahir'] . "</td>
            </tr>
            <tr>
                <td>35. Pendidikan</td>
                <td>" . $row['pendidikan'] . "</td>
            </tr>
            <tr>
                <td>36. Pekerjaan</td>
                <td>" . $row['pekerjaan'] . "</td>
            </tr>
            <tr>
                <td>37. Penghasilan</td>
                <td>" . $row['penghasilan'] . "</td>
            </tr>
            <tr>
                <td>38. Berkebutuhan Khusus</td>
                <td>" . $row['ayah_abk'] . "</td>
            </tr>

        ";
                        }?>
        
        <thead class="thead-dark">
            <tr>
                <th>Data Ibu Kandung</th>
                <th></th>
            </tr>
        </thead>
        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from dibu");
                        foreach ($data as $row) {
        echo "
            <tr>
                <td>39. Nama Ibu Kandung</td>
                <td>" . $row['nama_ibu'] . "</td>   
            </tr>
            <tr>
                <td>40. Tahun Lahir</td>
                <td>" . $row['tahun_lahir'] . "</td>
            </tr>
            <tr>
                <td>41. Pendidikan</td>
                <td>" . $row['pendidikan'] . "</td>
            </tr>
            <tr>
                <td>42. Pekerjaan</td>
                <td>" . $row['pekerjaan'] . "</td>
            </tr>
            <tr>
                <td>43. Penghasilan</td>
                <td>" . $row['penghasilan'] . "</td>
            </tr>
            <tr>
                <td>44. Berkebutuhan Khusus</td>
                <td>" . $row['ibu_abk'] . "</td>
            </tr>

        ";
                        }?>


                </table>
                <a href="logout.php"><button class="btn btn-outline-secondary mb-3">Logout</button></a>
            </div>
        </div>
        <div class="col">

        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>