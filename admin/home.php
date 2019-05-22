<?php
include 'config.php';

$querylaki = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totallaki FROM tbsantri WHERE JenisKelamin = '1'");
$queryperempuan = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totalperempuan FROM tbsantri WHERE JenisKelamin = '2'");

$datalaki = mysqli_fetch_object($querylaki);
$dataperempuan = mysqli_fetch_object($queryperempuan);

?>

<center>
    <legend>أهلا وسهلا</legend>
    <br>
</center>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php $totalsantri = $datalaki->totallaki + $dataperempuan->totalperempuan ; echo $totalsantri?>
                        </div>
                        <div>Total Murid</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left">
                    Laki Laki : <b><?php echo $datalaki->totallaki; ?></b>
                </span>
                <span class="pull-right">
                    Perempuan : <b><?php echo $dataperempuan->totalperempuan; ?></b>
                </span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-home fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Total Kelas</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left">
                    Golongan :
                </span>
                <span class="pull-right">
                    Khusus :
                </span>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-briefcase fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">124</div>
                        <div>Total Staff</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left">
                    Staff :
                </span>
                <span class="pull-right">
                    Pengajar :
                </span>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-education fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Total Hafiz</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left">
                    Hafiz :
                </span>
                <span class="pull-right">
                    Hafizah :
                </span>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>