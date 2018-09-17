<?php
    include '../config/koneksi.php';
        $sql =  mysql_query("SELECT * FROM menginap WHERE kd_inap='$_GET[kd]'");
        $bc  = mysql_fetch_array($sql);

    $sql2 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc[id_pelanggan]'");
    $bc2  = mysql_fetch_array($sql2);

      $sql3 = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar='$bc[kd_kamar]'");
      $bc3  = mysql_fetch_array($sql3);

    ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Data Kamar Kos</h1>
</div>
<!--<section class="content-header">
  <font size="4px">Tambah Data Kamar Kos</font>
</section>-->
<section class="content">

 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Kamar</label></td><td>:</td>
          <td><b><h4><?php echo $bc3['nm_kamar']; ?></h4></b></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Pelanggan</label></td><td>:</td>
          <td><h4><?php echo $bc2['nm_pelanggan']; ?></h4></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Tanggal Check-in</label></td><td>:</td>
          <td><h4><?php echo date('d-m-Y'); ?></h4></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Tanggal Jatuh Tempo</label></td><td>:</td>
          <td><h4><?php
          if (date('m')==12) {
            $jatuh_tempo = date('d-')."1-".(date('Y')+1);
          }else{
            $jatuh_tempo = date('d')."-".(date('m')+1)."-".date('Y');
          }

          echo $jatuh_tempo; ?></h4></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Keterangan</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="keterangan" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                <?php echo $bc['keterangan']; ?>
          </textarea></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Tambahan Biaya</label></td><td>:</td>
          <td><input type="text" value="<?php echo $bc['tambahan_biaya']; ?>" class="form-control" name="tambahan_biaya" placeholder=""></td>
          </div>
      </tr>
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Save</button> &nbsp
              <button type="reset" class="btn btn-primary" style="background:#713A3A">Reset</button> &nbsp
              <input type="button" class="btn btn-primary" style="color:white;font-weight:bold;background:#6B6B6B" value="Back" onclick="history.back(-1)" >
            </div>
        </td>
      </tr>
    </table>
    </div>
  </div>
</section>
</form>
<?php

if (isset($_POST['submit'])) {
   $kd_kamar      = $bc3['kd_kamar'];
   $id_pelanggan  = $bc2['id_pelanggan'];
   $tgl_menginap  = date('d-m-Y');
   $tambahan_biaya = $_POST['tambahan_biaya'];
   $keterangan    = $_POST['keterangan'];
  include '../config/koneksi.php';
       mysql_query("UPDATE menginap SET
         tambahan_biaya='$tambahan_biaya', keterangan='$keterangan' WHERE kd_inap='$_GET[kd]'");
         //pelanggan
      // mysql_query("UPDATE pelanggan SET stts='2' WHERE id_pelanggan='$id_pelanggan'");
         //kamar
      // mysql_query("UPDATE kamarkos SET stts='3' WHERE kd_kamar='$kd_kamar'");
         //pesan kamar
      // mysql_query("UPDATE pesankamar SET stts='2' WHERE kd_pesan='$_GET[kd]'");
       ?>
       <script language="javascript">
          window.location.href="?menu=menginap";
       </script>
       <?php
}
 ?>
