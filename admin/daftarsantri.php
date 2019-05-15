<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
    <link rel="icon" href="../assets/image/component/logo.png" type="image/png">
</head>
<body>
    <form class="form-horizontal">
    <fieldset>

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
    <label class="col-md-4 control-label" for="tempatlahir">Tempat / Tanggal Lahir</label>  
    <div class="col-md-4">
    <input id="tempatlahir" name="tempatlahir" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="anakke">Anak Ke</label>  
    <div class="col-md-1">
    <input id="anakke" name="anakke" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="bahasa">Bahasa Sehari - Hari</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="bahasa-0">
        <input type="radio" name="bahasa" id="bahasa-0" value="1" checked="checked">
        Sunda
        </label> 
        <label class="radio-inline" for="bahasa-1">
        <input type="radio" name="bahasa" id="bahasa-1" value="2">
        Indonesia
        </label> 
        <label class="radio-inline" for="bahasa-2">
        <input type="radio" name="bahasa" id="bahasa-2" value="3">
        Lainnya
        </label>
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="kebutuhankhusus">Berkebutuhan Khusus</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="kebutuhankhusus-0">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-0" value="1" checked="checked">
        Tidak
        </label> 
        <label class="radio-inline" for="kebutuhankhusus-1">
        <input type="radio" name="kebutuhankhusus" id="kebutuhankhusus-1" value="2">
        Ya
        </label>
    </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="mondok">Pernah Mondok Di Pesantren</label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="mondok-0">
        <input type="radio" name="mondok" id="mondok-0" value="1" checked="checked">
        Tidak
        </label> 
        <label class="radio-inline" for="mondok-1">
        <input type="radio" name="mondok" id="mondok-1" value="2">
        Ya
        </label>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="namapesantren">Nama Pesantren</label>  
    <div class="col-md-4">
    <input id="namapesantren" name="namapesantren" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="alamatpesantren">Alamat Pesantren</label>
    <div class="col-md-4">                     
        <textarea class="form-control" id="alamatpesantren" name="alamatpesantren"></textarea>
    </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="sekolahterakhir">Sekolah Terakhir</label>
    <div class="col-md-4">
    <div class="radio">
        <label for="sekolahterakhir-0">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-0" value="1" checked="checked">
        SD / MI
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-1">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-1" value="2">
        SMP / MTs
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-2">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-2" value="3">
        SMA / SMK / MA
        </label>
        </div>
    <div class="radio">
        <label for="sekolahterakhir-3">
        <input type="radio" name="sekolahterakhir" id="sekolahterakhir-3" value="4">
        Lainnya
        </label>
        </div>
    </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="tinggaldengan">Tinggal Bersama</label>
    <div class="col-md-4">
    <div class="radio">
        <label for="tinggaldengan-0">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-0" value="1" checked="checked">
        Orang Tua
        </label>
        </div>
    <div class="radio">
        <label for="tinggaldengan-1">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-1" value="2">
        Wali
        </label>
        </div>
    <div class="radio">
        <label for="tinggaldengan-2">
        <input type="radio" name="tinggaldengan" id="tinggaldengan-2" value="3">
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

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-success">Daftar</button>
    </div>
    </div>

    </fieldset>
    </form>
</body>
</html>