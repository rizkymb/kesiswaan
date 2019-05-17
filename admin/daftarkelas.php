<html>
<div class="panel panel-success">
  <div class="panel-heading">Form Data Input Kelas</div>
  <div class="panel-body">
<form class="form-horizontal" action="proses_inputkelas.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namakelas">Nama Kelas</label>  
  <div class="col-md-4">
  <input id="namakelas" name="namakelas" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="juz">Tahun Ajaran</label>  
  <div class="col-md-2">
  <input id="tahun" name="tahun" type="number" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="keterangankelas">Keterangan</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="keterangankelas" name="keterangankelas" placeholder="alasan pengelompokan, deskripsi, dll." value=""></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Simpan</button>
    <button id="batal" name="batal" class="btn btn-danger">Batal</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

</html>