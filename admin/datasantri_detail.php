<?php
    include 'config.php';

    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    echo $ID;
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
                <h4>Nama :</h4>
                <h4>Kelas :</h4>
                <h4>NIS  :</h4>
                <h4>Jenis kelamin :</h4>
                <h4>Tempat Tanggal lahir :</h4>
                <h4>Nama Orang Tua/Wali :</h4>
                <h4>Status Santri :</h4>
           </div>
        </div>
</div>
    
</div>