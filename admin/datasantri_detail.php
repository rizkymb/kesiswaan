<?php
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);

    $query = mysqli_query($conn, "SELECT * FROM tbsantri INNER JOIN tbkelas ON tbkelas.IdKelas=tbsantri.IdKelas WHERE IdSantri='$ID'");
    $data = mysqli_fetch_object($query);
?>

<div class="container">
  
<div class="panel panel-success">
        <div class="panel-heading">
            Profile Santri
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <img src="../assets/component/profile.png">
            </div>
           <div class="col-md-9">
                <h4>Nama : <?php echo $data->NamaLengkap?></h4>
                <h4>Kelas : <?php echo $data->NamaKelas?></h4>
                <h4>NIS  : <?php echo $data->NIS?></h4>
                <h4>Jenis kelamin : <?php
                if ($data->JenisKelamin == 1){
                 echo "Laki-Laki";
                }else{
                    echo "Perempuan";
                }?></h4>
                <h4>Tempat/Tanggal lahir : <?php echo $data->TempatLahir.", ".date_format( new DateTime($data->TglLahir), 'd M Y')?></h4>
                <h4>Status Santri : <?php echo $data->StatusSantri?></h4>
           </div>
        </div>
</div>
    
</div>