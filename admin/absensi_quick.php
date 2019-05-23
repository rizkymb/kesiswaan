<?php
include 'config.php';

$kelas = mysqli_real_escape_string($conn, $_GET['kelas']);
$tglabsen = mysqli_real_escape_string($conn, $_GET['tglabsen']);

$query = mysqli_query($conn, "SELECT IdKelas, NamaKelas FROM tbkelas WHERE IdKelas = '$kelas'");
$data = mysqli_fetch_object($query);

// echo $kelas." & ".$tglabsen;
?>

<div class="container">
<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>
<input id ="printbtn" type="button" value="Print this page" onclick="window.print();" >
</div>
<br>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3>Detail Absen Santri</h4>
        <p align="right">Kelas : <?php echo $data->NamaKelas?> Tanggal : <?php echo $tglabsen?></p>
    </div>
    <div class="panel-body">
        <table class="table table-responsive table-bordered table-hover">
            <tr>
                <th width="2%" align="center" style="text-align: center">No. </th>
                <th align="center" style="text-align: center">NIS</th>
                <th align="center" style="text-align: center">Nama Santri </th>
                <th align="center" style="text-align: center">JK</th>
                <th align="center" style="text-align: center">Status Santri</th>
                <th align="center" style="text-align: center">Kehadiran</th>
                <th align="center" style="text-align: center">Keterangan</th>
                <th align="center" style="text-align: center">Ayat Disetor</th>
                <th align="center" style="text-align: center">Surat</th>
                <th align="center" style="text-align: center">Progress Juz Saat Ini</th>
                <th align="center" style="text-align: center">Target Juz</th>
            </tr>
            <?php
            $no = 1; 
            $querysantri = mysqli_query($conn, "SELECT * FROM tbsantri WHERE IdKelas = '$kelas'");
            while($datasantri=mysqli_fetch_object($querysantri)){
            ?>
            <tr class="rowHref" data-href="index.php?m=absen_detail&ID=<?php echo $datasantri->IdSantri?>">
                <td><?php echo $no++?></td>
                <td><?php echo $datasantri->NIS?></td>
                <td><?php echo $datasantri->NamaLengkap?></td>
                <td><?php 
                if ($datasantri->JenisKelamin == '1'){
                    echo "L";
                }else{
                    echo "P";
                } ?></td>
                <td><?php echo $datasantri->StatusSantri?></td>
                <td align="center">
                <?php
                $IdSantri = $datasantri->IdSantri;
                $checkabsenquery = mysqli_query($conn, "SELECT * FROM tbsantri INNER JOIN tbabsen ON tbabsen.IdSantri=tbsantri.IdSantri WHERE tbsantri.IdSantri = '$IdSantri' AND IdKelas = '$kelas' AND TanggalAbsen = '$tglabsen'");
                $datacheck = mysqli_fetch_object($checkabsenquery);
                if ($datacheck->Absen == '1'){
                ?><span data-toogle="tooltip" data-placement="top" title="Siswa Ini Hadir Hari Ini">✔️</span><?php }elseif($datacheck->NamaLengkap == ""){?><span data-toogle="tooltip" data-placement="top" title="Absen Siswa Ini Belum Diinput">❔</span><?php } else {?><span data-toogle="tooltip" data-placement="top" title="Siswa Ini Tidak Hadir Hari Ini">❌</span><?php }?></td>
                <td><?php if ($datacheck->NamaLengkap || $datacheck->KeteranganAbsen != ""){ echo $datacheck->KeteranganAbsen; } else {echo "-";}?></td>
                <td><?php if ($datacheck->NamaLengkap || $datacheck->SetorAyat != ""){ echo $datacheck->SetorAyat; } else {echo "-";}?></td>
                <td><?php if ($datacheck->NamaLengkap || $datacheck->Surat != ""){ echo $datacheck->Surat; } else {echo "-";}?></td>
                <td><?php if ($datacheck->NamaLengkap || $datacheck->JuzSaatIni != ""){ echo $datacheck->JuzSaatIni; } else {echo "-";}?></td>
                <td><?php if ($datacheck->NamaLengkap || $datacheck->TargetJuz != ""){ echo $datacheck->TargetJuz; } else {echo "-";}?></td>
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

<script>
jQuery(document).ready(function($) {
    $(".rowHref").click(function() {
        window.location = $(this).data("href");
    });
});
</script>