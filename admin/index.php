<?php 
include 'config.php';
if($_SESSION['login']=='' )
      {
        header("location:../login.php");

      }
      $m = $_GET['m'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../assets/chartjs.js/Chart.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/startmin.css" rel="stylesheet">
    <link href="../assets/css/morris.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
    <title>Admin Page</title>
    <link rel="icon" href="../assets/image/component/logo.png" type="image/png">
</head>
<body style="background-color: rgb(255, 255, 255);">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="assets/image/component/logo.png" width="30"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">Input Data</li>
                      <li><a href="?m=inputprogram">Input Paket Program</a></li>
                      <li><a href="?m=inputdata">Input Data Santri</a></li>
                      <li><a href="?m=inputkelas">Input Data Kelas</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Secondary Action</li>
                      <li><a href="index.php?m=absensi">Absensi</a></li>
                      <li><a href="index.php?m=dataabsen">Detail Absensi</a></li>
                      <li><a href="index.php?m=datasantri">Data Santri</a></li>
                      <li><a href="index.php?m=datakelas">Data Kelas</a></li>
                      <li><a href="index.php?m=dataprogram">Data Program</a></li>
                    </ul>
                  </li>
                <li><a href="#">About</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp Hello <?php echo $_SESSION['username']; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Profile</a></li>
                              <li><a href="#">Projects</a></li>
                              <li><a href="#">Setting</a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">Action</li>
                              <li><a href="logout.php">Sign Out</a></li>
                            </ul>
                          </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

    <div class="container">
      <?php
      if ($m=='inputdata') {
        include 'daftarsantri.php';
      }elseif ($m=='inputprogram') {
        include 'daftarprogram.php';
      }elseif ($m=='absensi') {
        include 'absensi.php';
      }elseif ($m=='inputkelas') {
        include 'daftarkelas.php';
      }elseif ($m=='absen_detail') {
        include 'absensi_detail.php';
      }elseif ($m=='absenlengkap') {
        include 'absensi_lengkap.php';
      }elseif ($m=='dataabsen') {
        include 'dataabsen.php';
      }elseif ($m=='absensi_quick') {
        include 'absensi_quick.php';
      }elseif ($m=='datasantri') {
        include 'datasantri.php';
      }elseif ($m=='datasantri_detail') {
        include 'datasantri_detail.php';
      }elseif ($m=='datakelas') {
        include 'datakelas.php';
      }elseif ($m=='dataprogram') {
        include 'dataprogram.php';
      }elseif ($m=='dataprogram_edit') {
        include 'dataprogram_edit.php';
      }else {
        include 'home.php';
      }
      ?>
    </div>
    
</body>
</html>

