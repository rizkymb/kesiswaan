<?php
include 'config.php';

$namalengkap = $_POST['namalengkap'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$anakke = $_POST['anakke'];
$dari = $_POST['dari'];
$bahasa = $_POST['bahasa'];
$kebutuhankhusus = $_POST['kebutuhankhusus'];
$sekolahterakhir = $_POST['sekolahterakhir'];
$namasekolah = $_POST['namasekolah'];
$alamatsekolah = $_POST['alamatsekolah'];
$tinggaldengan = $_POST['tinggaldengan'];
$nomorkk = $_POST['nomorkk'];
$namajalan = $_POST['namajalan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$provinsi = $_POST['provinsi'];
$pilihpaket=$_POST['pilihpaket'];

$namalengkapayah=$_POST['namalengkapayah'];
$tempatlahirayah=$_POST['tempatlahirayah'];
$usiaayah=$_POST['usiaayah'];
$pekerjaanayah=$_POST['pekerjaanayah'];
$penghasilanayah=$_POST['penghasilanayah'];
$namajalanayah=$_POST['namajalanayah'];
$rtayah=$_POST['rtayah'];
$rwayah=$_POST['rwayah'];
$desaayah=$_POST['desaayah'];
$kecamatanayah=$_POST['kecamatanayah'];
$kabupatenayah=$_POST['kabupatenayah'];
$provinsiayah=$_POST['provinsiayah'];
$notelpayah=$_POST['notelpayah'];
$nowhatsappayah=$_POST['nowhatsappayah'];
$emailayah=$_POST['emailayah'];

$namalengkapibu=$_POST['namalengkapibu'];
$tempatlahiribu=$_POST['tempatlahiribu'];
$usiaibu=$_POST['usiaibu'];
$pekerjaanibu=$_POST['pekerjaanibu'];
$penghasilanibu=$_POST['penghasilanibu'];
$namajalanibu=$_POST['namajalanibu'];
$rtibu=$_POST['rtibu'];
$rwibu=$_POST['rwibu'];
$desaibu=$_POST['desaibu'];
$kecamatanibu=$_POST['kecamatanibu'];
$kabupatenibu=$_POST['kabupatenibu'];
$provinsiibu=$_POST['provinsiibu'];
$notelpibu=$_POST['notelpibu'];
$nowhatsappibu=$_POST['nowhatsappibu'];
$emailibu=$_POST['emailibu'];

$namalengkapwali=$_POST['namalengkapwali'];
$tempatlahirwali=$_POST['tempatlahirwali'];
$usiawali=$_POST['usiawali'];
$pekerjaanwali=$_POST['pekerjaanwali'];
$penghasilanwali=$_POST['penghasilanwali'];
$namajalanwali=$_POST['namajalanwali'];
$rtwali=$_POST['rtwali'];
$rwwali=$_POST['rwwali'];
$desawali=$_POST['desawali'];
$kecamatanwali=$_POST['kecamatanwali'];
$kabupatenwali=$_POST['kabupatenwali'];
$provinsiwali=$_POST['provinsiwali'];
$notelpwali=$_POST['notelpwali'];
$nowhatsappwali=$_POST['nowhatsappwali'];
$emailwali=$_POST['emailwali'];

$anak=mysqli_query($conn, "INSERT INTO tbsantri (Nama, NamaLengkap, JenisKelamin, TempatLahir, TglLahir, AnakKe,Dari, Bahasa, KebutuhanKhusus, SekolahTerakhir, NamaSekolah, AlamatSekolah, TinggalDengan, NomorKK, NamaJalan, RT, RW, Desa, Kecamatan, Kabupaten, Provinsi, IdProgram)

VALUES ('$nama','$namalengkap','$jeniskelamin','$tempatlahir','$tgllahir','$anakke','$dari','$bahasa','$kebutuhankhusus','$sekolahterakhir','$namasekolah','$alamatsekolah','$tinggaldengan','$nomorkk','$namajalan','$rt','$rw','$desa','$kabupaten','$kecamatan','$provinsinsi','$pilihpaket')");

$q=mysql_query($conn,"SELECT IdSantri FROM tbsantri WHERE NamaLengkap='$namalengkap' AND JenisKelamin='$jeniskelamin' AND NamaJalan='$namajalan'");
$idsantri=mysqli_fetch_object($q);
$ayah=mysqli_query($conn, "INSERT INTO tbayah ( NamaLengkapAyah, TempatLahirAyah, TanggalLahirAyah, UsiaAyah, PekerjaanAyah, PenghasilanAyah, NamaJalanAyah, RTAyah, RWAyah, DesaAyah, KecamatanAyah, KabupatenAyah, ProvinsiAyah, NoTelpAyah, NoWhatsappAyah, EmailAyah, IdSantri) 
VALUES ('$namalengkapayah','$tempatlahirayah','$usiaayah','$pekerjaanayah','$penghasilanayah','$namajalanayah','$rtayah','$rwayah','$desaayah','$kecamatanayah','$kabupatenayah','$provinsiayah','$notelpayah','$nowhatsappayah','$emailayah', '$idsantri')");

$ibu=mysqli_query($conn, "INSERT INTO tbibu ( NamaLengkapIbu, TempatLahirIbu, TanggalLahirIbu, UsiaIbu, PekerjaanIbu, PenghasilanIbu, NamaJalanIbu, RTIbu, RWIbu, DesaIbu, KecamatanIbu, KabupatenIbu, ProvinsiIbu, NoTelpIbu, NoWhatsappIbu, EmailIbu, IdSantri) 
VALUES ('$namalengkapibu','$tempatlahiribu','$usiaibu','$pekerjaanibu','$penghasilanibu','$namajalanibu','$rtibu','$rwibu','$desaibu','$kecamatanibu','$kabupatenibu','$provinsiibu','$notelpibu','$nowhatsappibu','$emailibu', '$idsantri')");

$wali=mysqli_query($conn, "INSERT INTO tbwali ( NamaLengkapWali, TempatLahirWali, TanggalLahirWali, UsiaWali, PekerjaanWali, PenghasilanWali, NamaJalanWali, RTWali, RWWali, DesaWali, KecamatanWali, KabupatenWali, ProvinsiWali, NoTelpWali, NoWhatsappWali, EmailWali, IdSantri) 
VALUES ('$namalengkapwali','$tempatlahirwali','$usiawali','$pekerjaanwali','$penghasilanwali','$namajalanwali','$rtwali','$rwwali','$desawali','$kecamatanwali','$kabupatenwali','$provinsiwali','$notelpwali','$nowhatsappwali','$emailwali', '$idsantri')");
?>