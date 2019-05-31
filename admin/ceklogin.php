<?php
include 'config.php';
$user=$_POST['user'];
$pass=hash("md5", $_POST['pass']);

$query=mysqli_query($conn,"SELECT * FROM tbuser where Username='$user' and Password='$pass'");
$data=mysqli_fetch_object($query);
if($data)
{
	$_SESSION['login']=$data->Level;
	$_SESSION['username']=$data->Username;
	header("location:index.php?m=home");
}
else
{

echo '<script>alert("KOMBINASI USERNAME ATAU PASSWORD ADA YANG SALAH TOLONG DI INGAT LAGI !!!");location.href="../?m=login"</script>';
}
?>