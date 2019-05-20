<?php
$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "SELECT * FROM tbsantri LEFT JOIN tbabsen ON tbsantri.IdSantri = tbabsen.IdSantri LEFT JOIN tbkelas
ON tbsantri.IdKelas=tbkelas.IdKelas LEFT JOIN tbprogram ON tbsantri.IdProgram = tbprogram.IdProgram WHERE tbsantri.IdSantri='$ID'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_object($query);

if ($data->JenisKelamin == '1'){
    $jk = 'Laki-Laki';
}else{
    $jk = 'Perempuan';
}
?>

<html>
<div class="panel panel-success">
  <div class="panel-heading">Data Santri</div>
  <div class="panel-body">
      <table class="table table-striped table-responsive table-bordered">
        <tr>
            <td width="50%">Nama Lengkap</td>
            <td><?php echo $data->NamaLengkap?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><?php echo $data->NamaKelas?></td>
        </tr>
        <tr>
            <td>Program Yang Ditempuh</td>
            <td><?php echo $data->ProgramStudi?></td>
        </tr>
        <tr>
            <td>Status Santri</td>
            <td><?php
            if($data->StatusSantri == 'Aman'){ 
                echo "<font color='green'>".$data->StatusSantri."</font>";
            }elseif($data->StatusSantri == 'Waspada'){
                echo "<font color='yellow'>".$data->StatusSantri."</font>";
            }else{
                echo "<font color='red'>".$data->StatusSantri."</font>";
            }?></td>
        </tr>
      </table>
  </div>
  <div class="panel-heading"></div>
  <div class="panel-body">
  <form class="form-horizontal" method="post" action="proses_inputabsensi.php?ID=<?php echo $ID?>">
        <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label">Tanggal</label>  
            <div class="col-md-4">
                <input id="tanggalabsen" name="tanggalabsen" type="date" class="form-control" placeholder="" value="<?php echo date('Y-m-d');?>" required="">
                
            </div>
        </div>

        <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Absensi</label>
        <div class="col-md-4">
            <select id="absen" name="absen" class="form-control">
            <option value="1">Hadir</option>
            <option value="2">Sakit</option>
            <option value="3">Izin</option>
            <option value="4">Tanpa Keterangan</option>
            </select>
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Jumlah Ayat Yang Disetor</label>  
            <div class="col-md-4">
                <input id="setorayat" name="setorayat" type="number" placeholder="" class="form-control" required="">
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Jumlah Surat</label>  
            <div class="col-md-4">
                <input id="surat" name="surat" type="number" placeholder="" class="form-control" required="">
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Progress Juz Saat Ini</label>  
            <div class="col-md-4">
                <input id="juzsaatini" name="juzsaatini" type="number" placeholder="" class="form-control" required="">
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Target Juz</label>  
            <div class="col-md-3">
                <div class="input-group">
                    <input id="targetjuz" name="targetjuz" type="number" placeholder="" class="form-control" required="" value="<?php echo $data->Juz?>" readonly="">
                    <span class="input-group-addon">dalam 1 tahun</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Keterangan</label>  
            <div class="col-md-4">
                <textarea id="keteranganabsen" name="keteranganabsen" placeholder="Masukkan keterangan absensi jika santri tidak hadir" class="form-control">
        </textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-8">
                <button id="submit" type="submit" name="submit" class="btn btn-success">Gas</button>
                <button id="reset" type="reset" name="reset" class="btn btn-danger">Batal</button>
            </div>
        </div>
        </fieldset>
    </form>
  </div>
  <div class="panel-heading">Laporan Absensi Siswa</div>
  <div class="panel-body">
  <table class="table table-bordered table-hover">
                <tr>
                    <th width="2%" align="center">No. </th>
                    <th align="center">Tanggal</th>
                    <th align="center">Absensi</th>
                    <th align="center">Jumlah Ayat disetor</th>
                    <th align="center">Jumlah Surat</th>
                    <th align="center">Progress Juz</th>
                    <th align="center">Keterangan</th>
                </tr>
                <?php 
                $sql1 = "SELECT * FROM tbabsen WHERE IdSantri = '$ID' ORDER BY TanggalAbsen DESC LIMIT 5";
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
                    <td width="70%"><?php echo $data1->TanggalAbsen?></td>
                    <td><?php echo $absen?></td>
                    <td><?php echo $data1->SetorAyat?></td>
                    <td width="70%"><?php echo $data1->Surat?></td>
                    <td><?php echo $data1->JuzSaatIni?></td>
                    <td><?php echo $data1->KeteranganAbsen?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="7" style="padding:20px; hover:none;"><p align="right"><button id="selengkapnya" name="selengkapnya" class="btn btn-success btn-xs" style="padding:5px;">Lihat Data Selengkapnya</button></p></td>
                </tr>
            </table>
  </div>
</div>
</html>