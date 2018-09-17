<?php
include 'config/koneksi.php';
  $sql = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar='$_GET[id]'");
  $bc  = mysql_fetch_array($sql);
 ?>
<center>
<table>
  <tr>
    <td align=center>
      <h3><?php echo $bc['nm_kamar']; ?></h3>
    </td>
  </tr>
  <tr>
    <td align=center>
      <img src="admin/<?php echo $bc['gambar']; ?>" width="400px" height="300px" alt="">
    </td>
  </tr>
  <tr>
    <td align=center>

      <?php
      $harga_kos=number_format($bc['harga_kos'],0,",",".");
      echo "Rp ". $harga_kos; ?>
    </td>
  </tr>

  <tr>
    <td>
      Fasilitas : <br>
        <p><?php echo $bc['fasilitas'];?></p>
    </td>
  </tr>
  <tr>
    <td align=center>
      <a href="?menu=login"><input type="button" name="" value="Booking"></a>
    </td>
  </tr>
</table>
</center>
