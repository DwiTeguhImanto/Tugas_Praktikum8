<?php

include "session.php";
include "koneksi.php";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Formulir Data Pribadi</title>
    <style>
        #buser {
            float: right;
            margin-right: 25px;
            margin-top: 15px;
        }

        .next {
            float: right;
        }
    </style>
</head>

<body>
    <button type="button" class="btn btn-outline-secondary" id="buser">Username :
        <?php echo $_SESSION['username']; ?>
    </button><br>
    <div class="container-fluid p-5">

        <h2 align="center">FORMULIR PESERTA DIDIK</h2>
        <form method="post">
            <nav class="nav bg-dark mb-3">
                <a class="nav-link text-white" href="#">DATA PRIBADI</a>
            </nav>
            <div class="form-group">
                <label for="">11. Nama Lengkap: </label>
                <input type="text" name="nama" class="w-75">
            </div>
            <div class="form-group">
                <label for="">12. Jenis Kelamin : </label>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" /> Laki - laki
                <input class="ml-5" type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan
            </div>
            <div class="form-group">
                <label for="">13. NISN : </label>
                <input type="text" class="w-25" name="nisn">
            </div>
            <div class="form-group">
                <label for="">14. NIK : </label>
                <input type="text" class="w-25" name="nik">
            </div>
            <div class="form-group">
                <label for="">15. Tempat Lahir: </label>
                <input type="text" name="tempat_lahir" class="w-75">
            </div>
            <div class="form-group">
                <label for="">16. Tanggal Lahir : </label>
                <input type="date" class="w-10" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="">17. Agama : </label>
                <select name="agama" class="ml-2 ">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Khatolik">Khatolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">18. Berkebutuhan Khusus : </label>
                <input type="text" name="abk" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">19. Alamat Jalan : </label>
                <input type="text" name="alamat" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">20. RT : </label>
                <input type="number" name="rt" id="" class="w-10">
            </div>
            <div class="form-group">
                <label for="">21. RW : </label>
                <input type="number" name="rw" id="" class="w-10">
            </div>
            <div class="form-group">
                <label for="">22. Nama Dusun : </label>
                <input type="text" name="dusun" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">23. Nama Kelurahan/Desa : </label>
                <input type="text" name="desa" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">24. Kecamatan : </label>
                <input type="text" name="kecamatan" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">25. Kode Pos : </label>
                <input type="number" name="kodepos" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">26. Tempat Tinggal : </label>
                <input type="text" name="tempat_tinggal" id="" class="w-50">
            </div>
            <div class="form-group">
                <label for="">27. Moda Transportasi : </label>
                <input type="text" name="transport" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">28. No HP : </label>
                <input type="text" name="nohp" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">29. No Telpon : </label>
                <input type="text" name="notelp" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">30. Email Pribadi: </label>
                <input type="text" name="email" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">31. Penerima KPS/PKH/KIP : </label>
                <input type="radio" name="bantuan_kip" value="Iya" /> IYA
                <input class="ml-5" type="radio" name="bantuan_kip" value="Tidak" /> TIDAK
            </div>
            <div class="form-group">
                <label for="">32. No KPS/PKH/KIP : </label>
                <input type="text" name="nokip" id="" class="w-25">
            </div>
            <div class="form-group">
                <label for="">33. Kewarganegaraan : </label>
                <input type="radio" name="kewarganegaraan" value="Iya" /> WNI
                <input class="ml-2" type="radio" name="kewarganegaraan" value="Tidak" /> WNA
                Nama Negara :<input type="text" name="kewarganegaraan" id="" class="w-10">
            </div>

            <button type="submit" class="btn btn-primary" value="simpan" name="prosesTambah">Simpan Data</button>
            <button type="submit" class="btn btn-success next"><a href=dAyah.php
                    class="text-white">Berikutnya</a></button>
        </form>


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

<?php
if (isset($_POST['prosesTambah'])) {
    mysqli_query($koneksi, "insert into datapribadi set 
    nama = '$_POST[nama]',    
    jenis_kelamin = '$_POST[jenis_kelamin]',    
    nisn = '$_POST[nisn]',
    nik = '$_POST[nik]',    
    tempat_lahir = '$_POST[tempat_lahir]',
    tgl_lahir = '$_POST[tgl_lahir]',
    agama = '$_POST[agama]',
    abk = '$_POST[abk]',
    alamat = '$_POST[alamat]',
    rt = '$_POST[rt]',
    rw = '$_POST[rw]',
    dusun = '$_POST[dusun]',
    desa = '$_POST[desa]',
    kecamatan = '$_POST[kecamatan]',
    kodepos = '$_POST[kodepos]',
    tempat_tinggal = '$_POST[tempat_tinggal]',
    transport = '$_POST[transport]',
    nohp = '$_POST[nohp]',
    notelp = '$_POST[notelp]',
    email = '$_POST[email]',
    bantuan_kip = '$_POST[bantuan_kip]',
    nokip = '$_POST[nokip]',
    kewarganegaraan = '$_POST[kewarganegaraan]'");

    echo "<script> alert('DATA BERHASIL DITAMBAHKAN') </script>";
}
?>