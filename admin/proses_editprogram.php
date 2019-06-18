<?php
include 'config.php';

$ID = $_POST['ID'];
$namaprogram = $_POST['namaprogram'];
$juz = $_POST['juz'];
$ayat = $_POST['ayat'];
$bulanperjuz = $_POST['bulanperjuz'];
$tahun = $_POST['tahun'];
$keterangan = addslashes($_POST['keterangan']);

$query = mysqli_query($conn, "UPDATE tbprogram SET ProgramStudi = '$namaprogram', Juz = '$juz', AyatPerhari = '$ayat', BulanPerjuz = '$bulanperjuz'
, Tahun = '$tahun', Keterangan = '$keterangan' WHERE IdProgram = '$ID'");

if ($query){
    echo "<script>
    alert('Data Berhasil Diupdate !');
    location.href='index.php?m=dataprogram'
    </script>";
}
else {
    echo "<script>
    alert('Terjadi Kesalahan, Silahkan Ulangi Lagi');
    </script>";
}
?>