<?php
$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$query = mysqli_query($conn, "SELECT * FROM tbprogram WHERE IdProgram = $ID");
$data = mysqli_fetch_object($query);
?>
<html>
<div class="panel panel-success">
  <div class="panel-heading">Form Edit Program</div>
  <div class="panel-body">
<form class="form-horizontal" action="proses_editprogram.php" method="post">
<fieldset>

<input type="hidden" name="ID" value="<?php echo $ID?>">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namaprogram">Nama Program Studi</label>  
  <div class="col-md-4">
  <input id="namaprogram" name="namaprogram" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo $data->ProgramStudi?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="juz">Jumlah Juz</label>  
  <div class="col-md-1">
  <input id="juz" name="juz" type="number" placeholder="" class="form-control input-md" required="" value="<?php echo $data->Juz?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ayat">Ayat Perhari</label>  
  <div class="col-md-1">
  <input id="ayat" name="ayat" type="number" placeholder="" class="form-control input-md" required="" value="<?php echo $data->AyatPerhari?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bulanperjuz">Jumlah Bulan Perjuz</label>  
  <div class="col-md-1">
  <input id="bulanperjuz" name="bulanperjuz" type="number" placeholder="" class="form-control input-md" required="" value="<?php echo $data->BulanPerjuz?>">
    
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tahun">Lama Program Studi</label>
  <div class="col-md-2">
    <div class="input-group">
      <input id="tahun" name="tahun" class="form-control" value="1" type="number" required="" readonly>
      <span class="input-group-addon">Tahun</span>
    </div>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="keterangan">Keterangan</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="keterangan" name="keterangan"><?php echo $data->Keterangan?></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Simpan</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

</html>