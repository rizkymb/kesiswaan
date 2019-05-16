<?php
include 'config.php';

$namaprogram = $_POST['namaprogram'];
$juz = $_POST['juz'];
$ayat = $_POST['ayat'];
$bulanperjuz = $_POST['bulanperjuz'];
$tahun = $_POST['tahun'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO tbprogram (ProgramStudi, Juz, AyatPerhari, BulanPerjuz, Tahun, Keterangan) 
VALUES ('$namaprogram', '$juz', '$ayat', '$bulanperjuz', '$tahun', '$keterangan')";

$query = mysqli_query($conn, $sql);

if ($query){
    echo "<script>
    alert('Data Berhasil Disimpan !');
    location.href='index.php?m=inputprogram'
    </script>";
}
else {
    echo $sql;
}

?>