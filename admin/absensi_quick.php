<?php
include 'config.php';

$kelas = mysqli_real_escape_string($conn, $_GET['kelas']);
$tglabsen = mysqli_real_escape_string($conn, $_GET['tglabsen']);

$query = mysqli_query($conn, "SELECT IdKelas, NamaKelas FROM tbkelas WHERE IdKelas = '$kelas'");
$data = mysqli_fetch_object($query);

// echo $kelas." & ".$tglabsen;
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3>Quick Absen Santri</h4>
        <p align="right">Kelas : <?php echo $data->NamaKelas?> Tanggal : <?php echo $tglabsen?></p>
    </div>
    <div class="panel-body">
        <table class="table table-responsive table-bordered">
            <tr>
                <th width="2%" align="center" style="text-align: center">No. </th>
                <th align="center" style="text-align: center">NIS</th>
                <th align="center" style="text-align: center">Nama Santri </th>
                <th align="center" style="text-align: center">JK</th>
                <th align="center" style="text-align: center">Aksi </th>
                <th align="center" style="text-align: center">Status Santri</th>
            </tr>
            <tr>
            <?php
            $no = 1; 
            $querysantri = mysqli_query($conn, "SELECT * FROM tbsantri WHERE IdKelas = '$kelas'");
            while($datasantri=mysqli_fetch_object($querysantri)){
            ?>
                <td><?php echo $no++?></td>
                <td><?php echo $datasantri->NIS?></td>
                <td><?php echo $datasantri->NamaLengkap?></td>
                <td><?php 
                if ($datasantri->JenisKelamin == '1'){
                    echo "L";
                }else{
                    echo "P";
                } ?></td>
                <td style="text-align: center"><button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Klik Jika Santri Hadir" style="margin-right:20px">✔️</button><button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Klik Jika Santri Tidak Hadir">❌</button></td>
                <td><?php echo $datasantri->StatusSantri?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>