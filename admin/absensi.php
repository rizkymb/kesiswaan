<?php
    $sql = "SELECT * FROM tbkelas";
    $query = mysqli_query($conn, $sql);
?>

<htmL>
    <?php 
        while($data = mysqli_fetch_object($query)) {
    ?>
    <div class="panel panel-success">
        <div class="panel-heading"><?php echo "Kelas ".$data->NamaKelas?></div>
        <div class="panel-body" style="height:430px;overflow-y: auto;">
            <table class="table table-hover">
                <tr>
                    <td width="2%" align="center">No. </td>
                    <td align="center">Nama Santri </td>
                    <td align="center">Status Santri</td>
                </tr>
                <?php 
                $sql1 = "SELECT * FROM tbsantri WHERE IdKelas = '$data->IdKelas'";
                $query1 = mysqli_query($conn, $sql1);

                $no = 1;
                while ($data1 = mysqli_fetch_object($query1)) {?>
                <tr>
                    <td align="center"><?php echo $no++."."?></td>
                    <td><?php echo $data1->NamaLengkap?></td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php } ?>
</htmL>