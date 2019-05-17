<html>
<head>
</head>
<body>

<div class="panel panel-success">
  <div class="panel-heading">Form Data Santri</div>
  <div class="panel-body">
  <form class="form-horizontal" method="post" action="proses_inputsantri.php">
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="namalengkap">Pilih Paket</label>  
    <div class="col-md-4">
    <select class="form-control" name="pilihpaket" id="pilihpaket">
      <option value="">Pilih Paket</option>
      <?php 
      include 'config.php';
      $sql="select * from tbprogram";
      $query=mysqli_query($conn,$sql);
      while ($data=mysqli_fetch_object($query)) {
      ?>
      <option value="<?php echo $data->IdProgram ?>"><?php echo $data->ProgramStudi; ?></option>
    <?php }?>
    </select>
  </div>
</div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="namalengkap">Nama Lengkap</label>  
    <div class="col-md-5">
    <input id="namalengkap" name="namalengkap" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nama">Nama Panggilan</label>  
    <div class="col-md-4">
    <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="jeniskelamin">Jenis Kelamin</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="jeniskelamin-0">
        <input type="radio" name="jeniskelamin" id="jeniskelamin-0" value="0" checked="checked">
        Laki - Laki
        </label> 
        <label class="radio-inline" for="jeniskelamin-1">
        <input type="radio" name="jeniskelamin" id="jeniskelamin-1" value="1">
        Perempuan
        </label>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="tempatlahir">Tempat / Tanggal Lahir</label>  
    <div class="col-md-4">
    <input id="tempatlahir" name="tempatlahir" type="text" placeholder="" class="form-control input-md" required="">
    <input id="tgllahir" name="tgllahir" type="date" placeholder="" class="form-control input-md" required="">        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="anakke">Anak Ke</label>  
    <div class="col-md-1">
    <input id="anakke" name="anakke" type="text" placeholder="" class="form-control input-md" required="">
    Dari     
    <input id="dari" name="dari" type="text" placeholder="" class="form-control input-md" required="">
    Bersaudara
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="bahasa">Bahasa Sehari - Hari</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="bahasa-0">
        <input type="radio" name="bahasa" id="bahasa-0" value="Sunda" checked="checked">
        Sunda
        </label> 
        <label class="radio-inline" for="bahasa-1">
        <input type="radio" name="bahasa" id="bahasa-1" value="Indonesia">
        Indonesia
        </label> 
        <label class="radio-inline" for="bahasa-2">
        <input type="radio" name="bahasa" id="bahasa-2" value="Lainnya">
        Lainnya
        </label>
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="kebutuhankhusus">Berkebutuhan Khusus</label>
    <div class="col-md-5"> 
        <label class="radio-inline" for="kebutuhankhusus-0">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-0" value="Tidak" checked="checked">
        Tidak
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-1">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Autis">
        Autis
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-2">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Indigo">
        Indigo
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-3">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Hyper Aktif">
        Hyper Aktif
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-4">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Dhuafa">
        Dhuafa
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-5">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Yatim">
        Yatim
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-6">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Piatu">
        Piatu
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-7">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Narkoba">
        Narkoba
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-8">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="Lainnya">
        Lainnya
        </label>
    </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="sekolahterakhir">Sekolah Terakhir</label>
    <div class="col-md-4">
    <div class="radio">
        <label for="sekolahterakhir-0">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-0" value="SD / MI" checked="checked">
        SD / MI
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-1">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-1" value="SMP / MTs">
        SMP / MTs
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-2">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-2" value="SMA / SMK / MA">
        SMA / SMK / MA
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-3">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-3" value="Lainnya">
        Lainnya
        </label>
        </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nomorkk">Nama Sekolah</label>  
    <div class="col-md-4">
    <input id="namasekolah" name="namasekolah" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="namajalan">Alamat Sekolah</label>
    <div class="col-md-4">                     
        <textarea class="form-control" id="alamatsekolah" name="alamatsekolah"></textarea>
    </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="tinggaldengan">Tinggal Bersama</label>
    <div class="col-md-4">
    <div class="radio">
        <label for="tinggaldengan-0">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-0" value="Orang Tua" checked="checked">
        Orang Tua
        </label>
        </div>
    <div class="radio">
        <label for="tinggaldengan-1">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-1" value="Wali">
        Wali
        </label>
        </div>
    <div class="radio">
        <label for="tinggaldengan-2">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-2" value="Lainnya">
        Lainnya
        </label>
        </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nomorkk">Nomor Kartu Keluarga</label>  
    <div class="col-md-4">
    <input id="nomorkk" name="nomorkk" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="namajalan">Alamat Rumah</label>
    <div class="col-md-4">                     
        <textarea class="form-control" id="namajalan" name="namajalan"></textarea>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="rt">RT</label>  
    <div class="col-md-1">
    <input id="rt" name="rt" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="rw">RW</label>  
    <div class="col-md-1">
    <input id="rw" name="rw" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="desa">Kelurahan/Desa</label>  
    <div class="col-md-4">
    <input id="desa" name="desa" type="text" placeholder="" class="form-control input-md">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="kabupaten">Kabupaten/Kota</label>  
    <div class="col-md-4">
    <input id="kabupaten" name="kabupaten" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="kecamatan">Kecamatan</label>  
    <div class="col-md-4">
    <input id="kecamatan" name="kecamatan" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="provinsi">Provinsi</label>  
    <div class="col-md-4">
    <input id="provinsi" name="provinsi" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Multiple Radios
    <div class="form-group">
    <label class="col-md-4 control-label" for="penanggungjawab">Penanggung Jawab</label>
    <div class="col-md-4">
    <div class="radio-inline">
        <label for="tinggaldengan-0">
        <input type="radio" name="penanggungjawab" id="penanggungjawab-0" value="1" checked="checked" onclick="showortu()">
        Orang Tua
        </label>
      </div>
    <div class="radio-inline">
        <label for="tinggaldengan-1">
        <input type="radio" name="penanggungjawab" id="penanggungjawab-1" value="2" onclick="showwali()">
        Wali
        </label>
      </div>
    </div>
  </div> -->

<!-- <script>
  var detachx = $('#formwali').detach();
  var detachy = $('#formortu').detach();

  function showortu(detachy){
  var x = document.getElementById('formortu');
  var y = document.getElementById('formwali');

  $('#formortu').append(detachy);
  x.style.display ='block';
  y.parentNode.removeChild(y);
  }
  function showwali(detachx){
  var x = document.getElementById('formortu');
  var y = document.getElementById('formwali');

  $('#formwali').append(detachx);
  y.style.display ='block';
  x.parentNode.removeChild(x);
  }
</script> -->

<div id="forms"></div>
<div id="formortu">
  <div class="panel-heading">Form Data Orang Tua Santri : Ayah</div>
  <div class="panel-body">
  <form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namalengkapayah">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="namalengkapayah" name="namalengkapayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="col-md-4 control-label" for="jeniskelamin">Jenis Kelamin</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="jeniskelamin-0">
        <input type="radio" name="jeniskelamin" id="jeniskelamin-0" value="1" checked="checked">
        Laki - Laki
        </label> 
        <label class="radio-inline" for="jeniskelamin-1">
        <input type="radio" name="jeniskelamin" id="jeniskelamin-1" value="2">
        Perempuan
        </label>
    </div>
    </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempatlahirayah">Tempat / Tanggal Lahir</label>  
  <div class="col-md-4">
  <input id="tempatlahirayah" name="tempatlahirayah" type="text" placeholder="" class="form-control input-md">
  <input id="tgllahirayah" name="tgllahirayah" type="date" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usiaayah">Usia</label>  
  <div class="col-md-4">
  <input id="usiaayah" name="usiaayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaanayah">Pekerjaan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="pekerjaanayah-0">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-0" value="Wiraswasta" checked="checked">
      Wiraswasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-1">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-1" value="Pegawai Swasta">
      Pegawai Swasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-2">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-2" value="Pedagang / Buruh">
      Pedagang / Buruh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-3">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-3" value="Guru / Mubaligh">
      Guru / Mubaligh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-4">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-4" value="PNS">
      PNS
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-5">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-5" value="TNI / Polri">
      TNI / Polri
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-6">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-6" value="Pensiunan">
      Pensiunan
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanayah-7">
      <input type="radio" name="pekerjaanayah" id="pekerjaanayah-7" value="Lainnya">
      Lainnya
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penghasilanayah">Penghasilan Bulanan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="penghasilanayah-0">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-0" value="1 - 3 Juta" checked="checked">
      1 - 3 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanayah-1">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-1" value="3 - 5 Juta">
      3 - 5 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanayah-2">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-2" value="Di Atas 5 Juta">
      DI Atas 5 Juta
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="namajalanayah">Alamat Rumah</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="namajalanayah" name="namajalanayah"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rtayah">RT</label>  
  <div class="col-md-1">
  <input id="rtayah" name="rtayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rwayah">RW</label>  
  <div class="col-md-1">
  <input id="rwayah" name="rwayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="desaayah">Kelurahan / Desa</label>  
  <div class="col-md-4">
  <input id="desaayah" name="desaayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kecamatanayah">Kecamatan</label>  
  <div class="col-md-4">
  <input id="kecamatanayah" name="kecamatanayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kabupatenayah">Kabupaten</label>  
  <div class="col-md-4">
  <input id="kabupatenayah" name="kabupatenayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="provinsiayah">Provinsi</label>  
  <div class="col-md-4">
  <input id="provinsiayah" name="provinsiayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="notelpayah">No. Telepon</label>  
  <div class="col-md-4">
  <input id="notelpayah" name="notelpayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nowhatsappayah">No. Whatsapp</label>  
  <div class="col-md-4">
  <input id="nowhatsappayah" name="nowhatsappayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailayah">Email</label>  
  <div class="col-md-4">
  <input id="emailayah" name="emailayah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

</fieldset>

  </div>
  <div class="panel-heading">Form Data Orang Tua Santri : Ibu</div>
  <div class="panel-body">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namalengkapibu">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="namalengkapibu" name="namalengkapibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempatlahiribu">Tempat / Tanggal Lahir</label>  
  <div class="col-md-4">
  <input id="tempatlahiribu" name="tempatlahiribu" type="text" placeholder="" class="form-control input-md">
  <input id="tgllahiribu" name="tgllahiribu" type="date" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usiaibu">Usia</label>  
  <div class="col-md-4">
  <input id="usiaibu" name="usiaibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaanibu">Pekerjaan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="pekerjaanibu-0">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-0" value="Ibu Rumah Tangga" checked="checked">
      Ibu Rumah Tangga
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-1">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-1" value="Wiraswasta">
      Wiraswasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-2">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-2" value="Pegawai Swasta">
      Pegawai Swasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-3">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-3" value="Pedagang / Buruh">
      Pedagang / Buruh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-4">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-4" value="Guru / Mubaligh">
      Guru / Mubaligh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-5">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-5" value="PNS / TNI / Polri">
      PNS / TNI / Polri
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-6">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-6" value="Pensiunan">
      Pensiunan
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanibu-7">
      <input type="radio" name="pekerjaanibu" id="pekerjaanibu-7" value="Lainnya">
      Lainnya
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penghasilanayah">Penghasilan Bulanan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="penghasilanayah-0">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-0" value="1 - 3 Juta" checked="checked">
      1 - 3 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanayah-1">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-1" value="3 - 5 Juta">
      3 - 5 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanayah-2">
      <input type="radio" name="penghasilanayah" id="penghasilanayah-2" value="DI Atas 5 Juta">
      DI Atas 5 Juta
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="namajalanibu">Alamat Rumah</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="namajalanibu" name="namajalanibu"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rtibu">RT</label>  
  <div class="col-md-1">
  <input id="rtibu" name="rtibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rwibu">RW</label>  
  <div class="col-md-1">
  <input id="rwibu" name="rwibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="desaibu">Kelurahan / Desa</label>  
  <div class="col-md-4">
  <input id="desaibu" name="desaibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kecamatanibu">Kecamatan</label>  
  <div class="col-md-4">
  <input id="kecamatanibu" name="kecamatanibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kabupatenibu">Kabupaten</label>  
  <div class="col-md-4">
  <input id="kabupatenibu" name="kabupatenibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="provinsiibu">Provinsi</label>  
  <div class="col-md-4">
  <input id="provinsiibu" name="provinsiibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="notelpibu">No. Telepon</label>  
  <div class="col-md-4">
  <input id="notelpibu" name="notelpibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nowhatsappibu">No. Whatsapp</label>  
  <div class="col-md-4">
  <input id="nowhatsappibu" name="nowhatsappibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailibu">Email</label>  
  <div class="col-md-4">
  <input id="emailibu" name="emailibu" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

</fieldset>

  </div>
</div>

<div id="formwali" style="">
  <div class="panel-heading">Form Data Orang Tua Santri : Wali</div>
  <div class="panel-body">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namalengkapwali">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="namalengkapwali" name="namalengkapwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="col-md-4 control-label" for="jeniskelamin">Jenis Kelamin</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="jeniskelamin-0">
        <input type="radio" name="jeniskelaminwali" id="jeniskelaminwali-0" value="0" checked="checked">
        Laki - Laki
        </label> 
        <label class="radio-inline" for="jeniskelamin-1">
        <input type="radio" name="jeniskelaminwali" id="jeniskelaminwali-1" value="1">
        Perempuan
        </label>
    </div>
    </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempatlahirwali">Tempat / Tanggal Lahir</label>  
  <div class="col-md-4">
  <input id="tempatlahirwali" name="tempatlahirwali" type="text" placeholder="" class="form-control input-md" >
  <input id="tgllahirwali" name="tgllahirwali" type="date" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usiawali">Usia</label>  
  <div class="col-md-4">
  <input id="usiawali" name="usiawali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaanwali">Pekerjaan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="pekerjaanwali-0">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-0" value="Ibu Rumah Tangga" checked="checked">
      Ibu Rumah Tangga
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-1">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-1" value="Wiraswasta">
      Wiraswasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-2">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-2" value="Pegawai Swasta">
      Pegawai Swasta
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-3">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-3" value="Pedagang / Buruh">
      Pedagang / Buruh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-4">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-4" value="Guru / Mubaligh">
      Guru / Mubaligh
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-5">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-5" value="PNS / TNI / Polri">
      PNS / TNI / Polri
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-6">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-6" value="Pensiunan">
      Pensiunan
    </label>
	</div>
  <div class="radio">
    <label for="pekerjaanwali-7">
      <input type="radio" name="pekerjaanwali" id="pekerjaanwali-7" value="Lainnya">
      Lainnya
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penghasilanwali">Penghasilan Bulanan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="penghasilanwali-0">
      <input type="radio" name="penghasilanwali" id="penghasilanwali-0" value="1 - 3 Juta" checked="checked">
      1 - 3 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanwali-1">
      <input type="radio" name="penghasilanwali" id="penghasilanwali-1" value="3 - 5 Juta">
      3 - 5 Juta
    </label>
	</div>
  <div class="radio">
    <label for="penghasilanwali-2">
      <input type="radio" name="penghasilanwali" id="penghasilanwali-2" value="DI Atas 5 Juta">
      DI Atas 5 Juta
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="namajalanwali">Alamat Rumah</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="namajalanwali" name="namajalanwali"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rtwali">RT</label>  
  <div class="col-md-1">
  <input id="rtwali" name="rtwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rwwali">RW</label>  
  <div class="col-md-1">
  <input id="rwwali" name="rwwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="desawali">Kelurahan / Desa</label>  
  <div class="col-md-4">
  <input id="desawali" name="desawali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kecamatanwali">Kecamatan</label>  
  <div class="col-md-4">
  <input id="kecamatanwali" name="kecamatanwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="notelpwali">No. Telepon</label>  
  <div class="col-md-4">
  <input id="notelpwali" name="notelpwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nowhatsappwali">No. Whatsapp</label>  
  <div class="col-md-4">
  <input id="nowhatsappwali" name="nowhatsappwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kabupatenwali">Kabupaten</label>  
  <div class="col-md-4">
  <input id="kabupatenwali" name="kabupatenwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="provinsiwali">Provinsi</label>  
  <div class="col-md-4">
  <input id="provinsiwali" name="provinsiwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="notelpibu">No. Telepon</label>  
  <div class="col-md-4">
  <input id="notelpibu" name="notelpwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nowhatsappibu">No. Whatsapp</label>  
  <div class="col-md-4">
  <input id="nowhatsappibu" name="nowhatsappwali" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailibu">Email</label>  
  <div class="col-md-4">
  <input id="emailibu" name="emailibu" type="text" placeholder="" class="form-control input-md" >   
  </div>
</div>
</div>
</div>
</fieldset>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-success">Daftar</button>
  </div>
</div>
</form>

</div>
</body>
</html>