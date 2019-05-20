<?php
$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "SELECT * FROM tbsantri LEFT JOIN tbabsen ON tbsantri.IdSantri = tbabsen.IdSantri WHERE tbsantri.IdSantri='$ID'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_object($query);
echo $sql;
?>