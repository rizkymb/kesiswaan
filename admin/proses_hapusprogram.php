<?php
include 'config.php';
$ID = mysqli_real_escape_string($conn, $_GET['ID']);
$query = mysqli_query($conn, "DELETE FROM tbprogram WHERE IdProgram = $ID");
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus !');
    location.href='index.php?m=dataprogram'
    </script>";
}
else {
    echo "<script>
    alert('Terjadi Kesalahan, Silahkan Ulangi Lagi');
    </script>";
}
?>