<?php
include 'config.php';

$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$bulanabs = $_GET['bulanabs'];
$tahunabs = $_GET['tahunabs'];

$sql = "SELECT * FROM tbsantri LEFT JOIN tbabsen ON tbsantri.IdSantri = tbabsen.IdSantri LEFT JOIN tbkelas
ON tbsantri.IdKelas=tbkelas.IdKelas LEFT JOIN tbprogram ON tbsantri.IdProgram = tbprogram.IdProgram WHERE tbsantri.IdSantri='$ID'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_object($query);

echo "Data Absen Dari ".$data->Nama;
?>

<div class="form form-inline">
    <form>
    <input type="hidden" name="m" value="absenlengkap">
    <input type="hidden" name="ID" value="<?php echo $ID?>">
    <label>Bulan : </label>
    <select class="form-control" name="bulanabs">
        <?php
        $namabulan = array("decoy","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        for ($index = 1; $index <= 12 ; $index++){?>
            <option value="<?php echo $index ?>"<?=$index == $bulanabs?'selected="selected"':'';?>><?php echo $namabulan[$index]?></option>
        <?php }?>
    </select>
    <label>Tahun : </label>
    <select class="form-control" name="tahunabs">
        <?php
        $tahun = 2000;
        $thsekarang = date('Y');
        while($tahun <= $thsekarang){
        ?>
        <option value="<?php echo $tahun?>"<?=$tahun == $tahunabs?'selected="selected"':'';?>><?php echo $tahun++ ?></option>
        <?php } ?>
    </select>
    <button type="submit" class="btn btn-primary">Gas</button>
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