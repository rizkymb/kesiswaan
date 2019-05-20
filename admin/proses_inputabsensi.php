<?php
include 'config.php';

$ID = mysqli_real_escape_string($conn, $_GET['ID']);
$absen = $_POST['absen'];
$setorayat = $_POST['setorayat'];
$surat = $_POST['surat'];
$juzsaatini = $_POST['juzsaatini'];
$targetjuz = $_POST['targetjuz'];
$keteranganabsen = $_POST['keteranganabsen'];
$tanggalabsen = $_POST['tanggalabsen'];

$selectquery = mysqli_query($conn, "SELECT * FROM tbsantri LEFT JOIN tbabsen ON tbsantri.IdSantri = tbabsen.IdSantri LEFT JOIN tbkelas
ON tbsantri.IdKelas=tbkelas.IdKelas LEFT JOIN tbprogram ON tbsantri.IdProgram = tbprogram.IdProgram LEFT JOIN tbayah ON tbsantri.IdSantri = tbayah.IdSantri
LEFT JOIN tbibu ON tbsantri.IdSantri = tbibu.IdSantri LEFT JOIN tbwali ON tbsantri.IdSantri = tbwali.IdSantri WHERE tbsantri.IdSantri=$ID");

$data = mysqli_fetch_object($selectquery);

$inputquery = mysqli_query($conn, "INSERT INTO tbabsen (IdSantri, IdAyah, IdIbu, IdWali, Absen, SetorAyat, Surat, TanggalAbsen, JuzSaatIni, TargetJuz, KeteranganAbsen)
VALUES ('$ID', '$data->IdAyah', '$data->IdIbu', '$data->IdWali', '$absen','$setorayat','$surat','$tanggalabsen','$juzsaatini','$targetjuz','$keteranganabsen')");

if ($inputquery){
    echo "<script>alert('Absen Berhasil Diinput !');
    location.href='index.php?m=absen_detail&ID=10';
    </script>";
}else{
    echo "error";
    echo $sql;
}

?>