<?php 
include 'config.php';
$q = mysqli_real_escape_string($conn, $_GET['q']);
if ($q!=''){
    $query = mysqli_query($conn, "SELECT * FROM tbsantri INNER JOIN tbkelas ON tbsantri.IdKelas=tbkelas.IdKelas WHERE NIS LIKE'%$q%' OR NamaLengkap LIKE'%$q%' OR NamaKelas LIKE'%$q%'OR Nama LIKE'%$q%'");
}else{
    $query = mysqli_query($conn, "SELECT * FROM tbsantri INNER JOIN tbkelas ON tbsantri.IdKelas=tbkelas.IdKelas");
}
?>

<div class="panel panel-success">
        <div class="panel-heading">
        <div class="form form-inline">
            <form>
            Data Murid
            <input type="hidden" name="m" value="datasantri">
            <input type="text" class="form-control" name="q" size="35" placeholder="Cari Data Murid (Masukkan NIS, Nama, dll.)">
            <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        </div>
        <div class="panel-body" style="height:430px;overflow-y: auto;">
            <table class="table table-bordered table-hover">
                <tr>
                    <th width="2%" align="center" style="text-align: center">No. </th>
                    <th align="center" style="text-align: center">NIS</th>
                    <th align="center" style="text-align: center">Nama Santri </th>
                    <th align="center" style="text-align: center">Kelas</th>
                    <th align="center" style="text-align: center">Status Santri</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_object($query)) {?>
                <tr class="rowHref" data-href="index.php?m=absen_detail&ID=<?php echo $data->IdSantri?>">
                    <td align="center" width="2%"><?php echo $no++."."?></td>
                    <td align="center" width="15%"><?php echo $data->NIS?></td>
                    <td width="70%"><?php echo $data->NamaLengkap?></td>
                    <td width="70%"><?php echo $data->NamaKelas?></td>
                    <td style="text-align: center"><?php echo $data->StatusSantri?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
