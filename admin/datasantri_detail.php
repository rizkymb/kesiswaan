<?php
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    echo $ID;

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
                <h4>Jenis kelamin : <?php echo $data->JenisKelamin?></h4>
                <h4>Tempat/Tanggal lahir : <?php echo $data->TempatLahir.", ".$data->TglLahir?></h4>
                <h4>Status Santri : <?php echo $data->StatusSantri?></h4>
           </div>
        </div>
</div>
    
</div>