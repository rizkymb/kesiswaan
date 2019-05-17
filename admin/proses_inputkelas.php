<?php
include 'config.php';

$namakelas = $_POST['namakelas'];
$tahun = $_POST['tahun'];
$keterangankelas = $_POST['keterangankelas'];

$sql = "INSERT INTO tbkelas (NamaKelas, TahunKelas, KeteranganKelas) VALUES ('$namakelas','$tahun', '$keterangankelas')";

$query = mysqli_query($conn, $sql);

if ($query){
    echo "<script>alert('Kelas Berhasil Diinput !');
    location.href='index.php?m=inputkelas';
    </script>";
}else{
    echo $sql;
}
?>