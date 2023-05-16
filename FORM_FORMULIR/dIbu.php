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

    <title>Form Formulir </title>
    <style>
        #buser {
            float: right;
            margin-right: 25px;
            margin-top: 15px;
        }

        .next {
            float: right;
        }

        a {
            text-decoration: none;
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
                <a class="nav-link text-white" href="#">DATA IBU KANDUNG</a>
            </nav>
            <div class="form-group">
                <label for="">34. Nama Ibu Kandung : </label>
                <input type="text" name="nama_ibu" id="" class="w-50">
            </div>
            <div class="form-group">
                <label for="">35. Tahun Lahir : </label>
                <input type="text" name="tahun_lahir">
                <div class="form-group">
                    <label for="">36. Pendidikan : </label>
                    <input type="text" class="w-25" name="pendidikan">
                </div>
                <div class="form-group">
                    <label for="">37. Pekerjaan : </label>
                    <input type="text" class="w-25" name="pekerjaan">
                </div>
                <div class="form-group">
                    <label for="">38. Penghasilan Perbulan: </label>
                    <select name="penghasilan" class="ml-2 ">
                        <option value="Kurang Dari 500,000">Kurang Dari 500,000</option>
                        <option value="500,000 - 999,999">500,000 - 999,999</option>
                        <option value="1 juta - 1,999,999">1 juta - 1,999,999</option>
                        <option value="2 juta - 4,999,999">2 juta - 4,999,999</option>
                        <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                        <option value="Lebih Dari 20 juta">Lebih Dari 20 juta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">39. Berkebutuhan Khusus : </label>
                    <input type="text" class="w-25" name="ibu_abk">
                </div>

                <button type="submit" class="btn btn-primary" value="simpan" name="prosesTambah">Simpan Data</button>
                <button type="submit" class="btn btn-success next"><a href=tampilData.php
                        class="text-white">Selesai</a></button>
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
    mysqli_query($koneksi, "insert into dibu set 
    nama_ibu = '$_POST[nama_ibu]',    
    tahun_lahir = '$_POST[tahun_lahir]',    
    pendidikan = '$_POST[pendidikan]',
    pekerjaan = '$_POST[pekerjaan]',    
    penghasilan = '$_POST[penghasilan]',
    ibu_abk = '$_POST[ibu_abk]'");

    echo "<script> alert('DATA BERHASIL DITAMBAHKAN') </script>";
}
?>