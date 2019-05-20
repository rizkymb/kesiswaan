<?php
    $sql = "SELECT * FROM tbkelas";
    $query = mysqli_query($conn, $sql);
?>

<htmL>
    <p>Klik data santri untuk melihat informasi & mengolah data santri</p>
    <?php 
        while($data = mysqli_fetch_object($query)) {
    ?>
    <div class="panel panel-success">
        <div class="panel-heading"><?php echo "Kelas ".$data->NamaKelas?></div>
        <div class="panel-body" style="height:430px;overflow-y: auto;">
            <table class="table table-bordered table-hover">
                <tr>
                    <th width="2%" align="center">No. </th>
                    <th align="center">Nama Santri </th>
                    <th align="center">Status Santri</th>
                </tr>
                <?php 
                $sql1 = "SELECT * FROM tbsantri WHERE IdKelas = '$data->IdKelas'";
                $query1 = mysqli_query($conn, $sql1);

                $no = 1;
                while ($data1 = mysqli_fetch_object($query1)) {?>
                <tr class="rowHref" data-href="index.php?m=absen_detail&ID=<?php echo $data1->IdSantri?>">
                    <td align="center" width="2%"><?php echo $no++."."?></td>
                    <td width="70%"><?php echo $data1->NamaLengkap?></td>
                    <td><?php echo $data1->StatusSantri?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php } ?>
</htmL>

<script>
jQuery(document).ready(function($) {
    $(".rowHref").click(function() {
        window.location = $(this).data("href");
    });
});
</script>