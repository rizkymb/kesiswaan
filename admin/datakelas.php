<?php
$q = mysqli_real_escape_string($conn, $_GET['q']);
?>
<div class="panel panel-success">
        <div class="panel-heading">
        <div class="form form-inline">
            <form>
            Data Kelas
            <input type="hidden" name="m" value="datakelas">
            <input type="text" class="form-control" name="q" size="35" placeholder="Cari Kelas" value="<?php echo $q?>">
            <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        </div>
        <div class="panel-body" style="height:430px;overflow-y: auto;">
            <table class="table table-bordered table-hover">
                <tr>
                    <th width="2%" align="center" style="text-align: center">No. </th>
                    <th align="center" style="text-align: center">Kode Kelas</th>
                    <th align="center" style="text-align: center">Nama Kelas</th>
                    <th align="center" style="text-align: center">Wali</th>
                    <th align="center" style="text-align: center">Keterangan</th>
                </tr>
                <?php
                $no = 1;
                if ($q == ''){
                    $query = mysqli_query($conn, "SELECT * FROM tbkelas");
                }else{
                    $query = mysqli_query($conn, "SELECT * FROM tbkelas WHERE NamaKelas='$q' OR IdKelas='$q'");
                }
                while ($data = mysqli_fetch_object($query)) {
                if ($data->IdKelas != ''){
                ?>
                <tr class="rowHref" data-href="index.php?m=datakelas_detail&ID=<?php echo $data->IdKelas?>">
                    <td align="center" width="2%"><?php echo $no++."."?></td>
                    <td align="center" width="15%"><?php echo str_pad($data->IdKelas, 4, '0', STR_PAD_LEFT)?></td>
                    <td width="10%"><?php echo $data->NamaKelas?></td>
                    <td width="30%"></td>
                    <td  width="70%" style="text-align: center"><?php echo $data->KeteranganKelas?></td>
                </tr>
                <?php }else{?>
                    <tr>
                        <td><h3>Hasil untuk '<?php echo $q?>' Tidak Ditemukan</h3></td>
                    </tr>
                <?php }} ?>
            </table>
        </div>
    </div>

<script>
jQuery(document).ready(function($) {
    $(".rowHref").click(function() {
        window.location = $(this).data("href");
    });
});
</script>