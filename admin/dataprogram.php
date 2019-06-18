<?php
include 'config.php';

$query = mysqli_query($conn, "SELECT * FROM tbprogram");

?>

<div class="panel panel-success">
    <div class="panel-heading">Daftar Program Studi Pesantren Mifathul Ul'um</div>
    <div class="panel-body">
        <table class="table table-bordered table-hover">
            <tr style="text-align: center">
                <th style="text-align: center" width="2%" align="center">No. </th>
                <th style="text-align: center" align="center">Nama Program Studi</th>
                <th style="text-align: center" align="center">Target Juz (Dalam 1 Tahun)</th>
                <th style="text-align: center" align="center">Ayat Disetor Perhari</th>
                <th style="text-align: center" align="center">Juz Dihafalkan Perbulan</th>
                <th style="text-align: center" width="40%" align="center">Keterangan</th>
                <th style="text-align: center" width="20%" align="center">Aksi</th>
            </tr>
            <?php
                $no = 1;
                while ($data = mysqli_fetch_object($query)) {
                    ?>
            <tr>
                <td align="center" width="2%"><?php echo $no++."."?></td>
                <td><?php echo $data->ProgramStudi?></td>
                <td style="text-align: center"><?php echo $data->Juz?></td>
                <td style="text-align: center"><?php echo $data->AyatPerhari?></td>
                <td style="text-align: center"><?php echo $data->BulanPerjuz?></td>
                <td><?php echo $data->Keterangan?></td>
                <td style="text-align: center"><a href="index.php?m=dataprogram_edit&ID=<?php echo $data->IdProgram?>"><button class="btn btn-warning">Edit</button><a href="proses_hapusprogram.php?ID=<?php echo $data->IdProgram?>" onclick="return confirm('Yakin Hapus Data Ini ?')">&nbsp;<button class="btn btn-danger">Hapus</button></a></td>
            </tr>
            <?php } ?>
        </table>
    </div>