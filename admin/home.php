<?php
include 'config.php';

$querylaki = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totallaki FROM tbsantri WHERE JenisKelamin = '2'");
$queryperempuan = mysqli_query($conn, "SELECT COUNT(IdSantri) AS totalperempuan FROM tbsantri WHERE JenisKelamin = '1'");

$datalaki = mysqli_fetch_object($querylaki);
$dataperempuan = mysqli_fetch_object($queryperempuan);

?>

<center>
    <legend>DASHBOARD</legend>
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

<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Teknik", "Fisip", "Ekonomi", "Pertanian"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from mahasiswa where fakultas='teknik'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($koneksi,"select * from mahasiswa where fakultas='ekonomi'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysqli_query($koneksi,"select * from mahasiswa where fakultas='fisip'");
					echo mysqli_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($koneksi,"select * from mahasiswa where fakultas='pertanian'");
					echo mysqli_num_rows($jumlah_pertanian);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>