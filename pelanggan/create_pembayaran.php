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
          <td style="font-size:90%"><label for="exampleInputEmail1">No. Rekening</label></td><td>:</td>
          <td><input type="text" class="form-control" name="no_rekening" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Atas Nama Pengirim</label></td><td>:</td>
          <td><input type="text" class="form-control" name="atasnama_pengirim" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Kode Transfer</label></td><td>:</td>
          <td><input type="text" class="form-control" name="kd_transfer" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nominal Bayar</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nominal_bayar" placeholder="" required></td>
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
@$no_rekening          = $_POST['no_rekening'];
@$atasnama_pengirim    = $_POST['atasnama_pengirim'];
@$nominal_bayar        = $_POST['nominal_bayar'];
@$kd_transfer          = $_POST['kd_transfer'];
@$tgl_bayar            = date('d-m-Y');
@$jam_bayar            = date('H.i');

if (isset($_POST['submit'])) {
  @session_start();
      $sql1 = mysql_query("SELECT * FROM user WHERE nm_user='$_SESSION[user]' and sandi='$_SESSION[pass]'");
      $bc1  = mysql_fetch_array($sql1);

      $sql4 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc1[id_pelanggan]'");
      $bc4  = mysql_fetch_array($sql4);

      $sql2 = mysql_query("SELECT * FROM menginap WHERE id_pelanggan='$bc1[id_pelanggan]' AND stts='1'");
      $bc2  = mysql_fetch_array($sql2);

      $sql3 = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar='$bc2[kd_kamar]'");
      $bc3  = mysql_fetch_array($sql3);
      $tagihan = $bc3['harga_kos'] + $bc2['tambahan_biaya'];

  include '../config/koneksi.php';
       mysql_query("INSERT INTO pembayaran VALUES
         ('','$bc1[id_pelanggan]','$bc2[kd_inap]','$no_rekening','$atasnama_pengirim','$kd_transfer','$tgl_bayar','$jam_bayar','$tagihan','$nominal_bayar','1')");
       ?>
       <script language="javascript">
          window.location.href="?menu=tagihan";
       </script>
       <?php
}
 ?>
