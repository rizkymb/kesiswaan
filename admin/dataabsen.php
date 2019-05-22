<?php 
include 'config.php';

$query = mysqli_query($conn, "SELECT IdKelas, NamaKelas FROM tbkelas");

?>
<center><legend>Tampil Absen</legend></center>

<form class="form" action="" method="post">
   <table align="center">
       <tr>
           <td>
                <label>Pilih Kelas</label>
                <select name="kelas" class="form-control">
                    <?php 
                    while ($data = mysqli_fetch_object($query)){
                    ?>
                    <option value="<?php echo $data->IdKelas?>"><?php echo $data->NamaKelas?></option>
                    <?php } ?>
                </select>
           </td>
       </tr>
       <tr>
           <td style="padding-top: 8px;">
                <label>Tanggal Absen</label>
                <input type="date" class="form-control" name="" size="40" value="<?php echo date('Y-m-d')?>">
           </td>
       </tr>
       <tr>
           <td style="padding-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
           </td>
       </tr>
   </table>
   

  
  </form>

  

 
