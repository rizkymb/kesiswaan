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
$pilihkelas=$_POST['pilihkelas'];

$namalengkapayah=$_POST['namalengkapayah'];
$tempatlahirayah=$_POST['tempatlahirayah'];
$tanggallahirayah=$_POST['tanggallahirayah'];
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
$tanggallahiribu=$_POST['tanggallahiribu'];
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
$tanggallahirwali=$_POST['tanggallahirwali'];
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

$sqlanak = "INSERT INTO tbsantri (Nama, NamaLengkap, JenisKelamin, TempatLahir, TglLahir, AnakKe, Dari, Bahasa, KebutuhanKhusus, SekolahTerakhir, NamaSekolah, AlamatSekolah, TinggalDengan, NomorKK, NamaJalan, RT, RW, Desa, Kecamatan, Kabupaten, Provinsi, IdProgram, IdKelas)
VALUES ('$nama','$namalengkap','$jeniskelamin','$tempatlahir','$tgllahir','$anakke','$dari','$bahasa','$kebutuhankhusus','$sekolahterakhir','$namasekolah','$alamatsekolah','$tinggaldengan','$nomorkk','$namajalan','$rt','$rw','$desa','$kabupaten','$kecamatan','$provinsinsi','$pilihpaket','$pilihkelas')";

$anak=mysqli_query($conn, $sqlanak);

$q=mysqli_query($conn,"SELECT IdSantri FROM tbsantri WHERE NamaLengkap='$namalengkap' AND JenisKelamin='$jeniskelamin' AND NamaJalan='$namajalan'");

$data=mysqli_fetch_object($q);

$idsantri = $data->IdSantri;

$sqlayah = "INSERT INTO tbayah ( NamaLengkapAyah, TempatLahirAyah, TanggalLahirAyah, UsiaAyah, PekerjaanAyah, PenghasilanAyah, NamaJalanAyah, RTAyah, RWAyah, DesaAyah, KecamatanAyah, KabupatenAyah, ProvinsiAyah, NoTelpAyah, NoWhatsappAyah, EmailAyah, IdSantri) 
VALUES ('$namalengkapayah','$tempatlahirayah','$tanggallahirayah','$usiaayah','$pekerjaanayah','$penghasilanayah','$namajalanayah','$rtayah','$rwayah','$desaayah','$kecamatanayah','$kabupatenayah','$provinsiayah','$notelpayah','$nowhatsappayah','$emailayah', '$idsantri')";

$sqlibu = "INSERT INTO tbibu ( NamaLengkapIbu, TempatLahirIbu, TanggalLahirIbu, UsiaIbu, PekerjaanIbu, PenghasilanIbu, NamaJalanIbu, RTIbu, RWIbu, DesaIbu, KecamatanIbu, KabupatenIbu, ProvinsiIbu, NoTelpIbu, NoWhatsappIbu, EmailIbu, IdSantri) 
VALUES ('$namalengkapibu','$tempatlahiribu','$tanggallahiribu','$usiaibu','$pekerjaanibu','$penghasilanibu','$namajalanibu','$rtibu','$rwibu','$desaibu','$kecamatanibu','$kabupatenibu','$provinsiibu','$notelpibu','$nowhatsappibu','$emailibu', '$idsantri')";


$sqlwali = "INSERT INTO tbwali ( NamaLengkapWali, TempatLahirWali, TanggalLahirWali, UsiaWali, PekerjaanWali, PenghasilanWali, NamaJalanWali, RTWali, RWWali, DesaWali, KecamatanWali, KabupatenWali, ProvinsiWali, NoTelpWali, NoWhatsappWali, EmailWali, IdSantri) 
VALUES ('$namalengkapwali','$tempatlahirwali','$tanggallahirwali','$usiawali','$pekerjaanwali','$penghasilanwali','$namajalanwali','$rtwali','$rwwali','$desawali','$kecamatanwali','$kabupatenwali','$provinsiwali','$notelpwali','$nowhatsappwali','$emailwali', '$idsantri')";

$ayah=mysqli_query($conn, $sqlayah);

$ibu=mysqli_query($conn, $sqlibu);

$wali=mysqli_query($conn, $sqlwali);

echo $sqlanak;
echo "";
echo $sqlayah;
echo "";
echo $sqlibu;
echo "";
echo $sqlwali;
?>