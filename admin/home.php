<?php
include 'config.php';

$querylaki = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totallaki FROM tbsantri WHERE JenisKelamin = '2'");
$queryperempuan = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totalperempuan FROM tbsantri WHERE JenisKelamin = '1'");

$datalaki = mysqli_fetch_object($querylaki);
$dataperempuan = mysqli_fetch_object($queryperempuan);

?>

<center>
    <legend>Selamat Datang</legend>
    <br>
</center>

<div class="row">
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Jumlah Siswa Siswi</div>
            <div class="panel-body">
                <p>Laki Laki : <?php echo $datalaki->totallaki; ?></p>
                <p>Peremupuan : <?php echo $dataperempuan->totalperempuan; ?></p>
                <p>Total : <?php $totalsantri = $datalaki->totallaki + $dataperempuan->totalperempuan ; echo $totalsantri?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
            <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Jumlah Kelas</div>
                    <div class="panel-body">
                            <p>Jumlah Golongan :</p>
                            <p>Kelas Khusus :</p>
                            <p>Total :</p>
                        </div>
                </div>
    </div>
    <div class="col-md-3">
            <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Jumlah Staff</div>
                    <div class="panel-body">
                            <p>Jumlah Staff :</p>
                            <p>Jumlah Pengajar :</p>
                            <p>Total :</p>
                        </div>
                </div>
    </div>
    <div class="col-md-3">
            <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Jumlah Tahfidz</div>
                    <div class="panel-body">
                            <p>Jumlah Hafidz Laki Laki :</p>
                            <p>Jumlah Hafidz Perempuan :</p>
                            <p>Total :</p>
                        </div>
                </div>
    </div>    
</div>

