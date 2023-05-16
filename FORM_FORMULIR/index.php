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
            <div class="form-group">
                <label for="">Tanggal : </label>
                <input type="" name="tgl_formulir" value="<?php echo date("d-m-Y"); ?>">
            </div>
            <nav class="nav bg-dark mb-3">
                <a class="nav-link text-white" href="#">REGISTRASI PESERTA DIDIK</a>
            </nav>
            <div class="form-group">
                <label for="">1. Jenis Pendaftaran : </label>
                <select name="jenis_pendaftaran" class="ml-2 ">
                    <option value="siswabaru">Siswa Baru</option>
                    <option value="pindahan">Pindahan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">2. Tanggal Masuk Sekolah : </label>
                <input type="date" class="w-10" name="tgl_msksklh">
            </div>
            <div class="form-group">
                <label for="">3. NIS : </label>
                <input type="text" class="w-25" name="nis">
            </div>
            <div class="form-group">
                <label for="">4. Nomor Peserta Ujian : </label>
                <input type="text" class="w-25" name="nomor_pesertaujn">
            </div>
            <div class="form-group">
                <label for="">5. Apakah Pernah Paud : </label>
                <input type="radio" name="paud" value="Iya" /> IYA
                <input class="ml-5" type="radio" name="paud" value="Tidak" /> TIDAK
            </div>
            <div class="form-group">
                <label for="">6. Apakah Pernah TK : </label>
                <input type="radio" name="tk" value="Iya" /> IYA
                <input class="ml-5" type="radio" name="tk" value="Tidak" /> TIDAK
            </div>
            <div class="form-group">
                <label for="">7. No Seri SKHUN Sebelumnya : </label>
                <input type="text" class="w-25" name="skhun">
            </div>
            <div class="form-group">
                <label for="">8. No Seri IJAZAH Sebelumnya : </label>
                <input type="text" class="w-25" name="ijazah">
            </div>
            <div class="form-group">
                <label for="">9. Hobby : </label>
                <select name="hobi" class="ml-2 ">
                    <option value="Olahraga">Olahraga</option>
                    <option value="Kesenian">Kesenian</option>
                    <option value="Membaca">Membaca</option>
                    <option value="Menulis">Menulis</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">10. Cita - cita : </label>
                <select name="cita" class="ml-2 ">
                    <option value="PNS">PNS</option>
                    <option value="TNI/POLRI">TNI/POLRI</option>
                    <option value="Guru/Dosen">Guru/Dosen</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Politikus">Politikus</option>
                    <option value="Wiraswasta">wiraswasta</option>
                    <option value="Seniman">Seniman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" value="simpan" name="prosesTambah">Simpan Data</button>
            <button type="submit" class="btn btn-success next"><a href=dPribadi.php
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
    mysqli_query($koneksi, "insert into regis set 
    jenis_pendaftaran = '$_POST[jenis_pendaftaran]',    
    tgl_msksklh = '$_POST[tgl_msksklh]',    
    nis = '$_POST[nis]',
    tgl_formulir = '$_POST[tgl_formulir]',    
    nomor_pesertaujn = '$_POST[nomor_pesertaujn]',
    paud = '$_POST[paud]',
    tk = '$_POST[tk]',
    skhun = '$_POST[skhun]',
    ijazah = '$_POST[ijazah]',
    hobi = '$_POST[hobi]',
    cita = '$_POST[cita]'");
    echo "<script> alert('DATA BERHASIL DITAMBAHKAN') </script>";
}

?>