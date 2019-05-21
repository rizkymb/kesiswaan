<?php
include 'config.php';

$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "SELECT * FROM tbsantri LEFT JOIN tbabsen ON tbsantri.IdSantri = tbabsen.IdSantri LEFT JOIN tbkelas
ON tbsantri.IdKelas=tbkelas.IdKelas LEFT JOIN tbprogram ON tbsantri.IdProgram = tbprogram.IdProgram WHERE tbsantri.IdSantri='$ID'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_object($query);

echo "Data Absen Dari ".$data->Nama;
?>

<div class="form form-inline">
    <form method="get">
    <label>Bulan : </label>
    <select class="form-control" name="bulanabs">
        <?php
        $bulan = 1;
        $jmlbulan = 12;
        while($bulan <= $jmlbulan){
        ?>
        <option value="<?php echo $bulan?>"><?php $tglobj = DateTime::createFromFormat('!m', $bulan++); $namabulan = $tglobj->format('F'); echo $namabulan ?></option>
        <?php } ?>
    </select>
    <label>Tahun : </label>
    <select class="form-control" name="tahunabs">
        <?php
        $tahun = 2000;
        $thsekarang = date('Y');
        while($tahun <= $thsekarang){
        ?>
        <option value="<?php echo $tahun?>" selected><?php echo $tahun++ ?></option>
        <?php } ?>
    </select>
    <button class="btn btn-primary" formaction="index.php?m=absenlengkap&ID=<?php echo $ID?>&bulanabs=<?php $bulanabs=$_POST['bulanabs']; echo $bulanabs;?>&tahunabs=<?php $tahunabs=$_POST['tahunabs']; echo $tahunabs;?>">Gas</button>
    </form>
</div>

<table class="table table-bordered table-hover">
                <tr style="text-align: center">
                    <th style="text-align: center" width="2%" align="center">No. </th>
                    <th style="text-align: center" align="center">Tanggal</th>
                    <th style="text-align: center" align="center">Absensi</th>
                    <th style="text-align: center" align="center">Jumlah Ayat disetor</th>
                    <th style="text-align: center" align="center">Jumlah Surat</th>
                    <th style="text-align: center" align="center">Progress Juz</th>
                    <th style="text-align: center" width="70%" align="center">Keterangan</th>
                </tr>
                <?php
                if ($bulanabs == '' || $tahunabs == ''){ 
                    $sql1 = "SELECT * FROM tbabsen WHERE IdSantri = '$ID' ORDER BY TanggalAbsen DESC";
                }else{
                    $sql1 = "SELECT * FROM tbabsen WHERE IdSantri = '$ID' AND MONTH(TanggalAbsen) = '$bulanabs' AND YEAR(TanggalAbsen) = '$tahunabs' ORDER BY TanggalAbsen DESC";
                }
                echo $sql1;
                $query1 = mysqli_query($conn, $sql1);
                $no = 1;
                while ($data1 = mysqli_fetch_object($query1)) {
                    if ($data1->Absen == '1'){
                        $absen = 'Hadir';
                    }elseif($data1->Absen == '2'){
                        $absen = 'Sakit';
                    }elseif($data1->Absen == '3'){
                        $absen = 'Izin';
                    }else{
                        $absen = 'Mbolos';
                    }
                    ?>
                <tr class="rowHref" data-href="index.php?m=absen_detail&ID=<?php echo $data1->IdSantri?>">
                    <td align="center" width="2%"><?php echo $no++."."?></td>
                    <td><?php echo $data1->TanggalAbsen?></td>
                    <td><?php echo $absen?></td>
                    <td><?php echo $data1->SetorAyat?></td>
                    <td><?php echo $data1->Surat?></td>
                    <td><?php echo $data1->JuzSaatIni?></td>
                    <td width="70%"><?php echo $data1->KeteranganAbsen?></td>
                </tr>
                <?php } ?>
            </table>