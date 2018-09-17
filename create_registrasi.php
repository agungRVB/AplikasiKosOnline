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
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama </label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_pelanggan" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">No. Induk KTP </label></td><td>:</td>
          <td><input type="text" class="form-control" name="nik_pelanggan" placeholder="" required></td>
        </div>
      </tr>

      <tr>
            <div class="form-group">
              <td style="font-size:90%"><label for="exampleInputEmail1">Jenis Kelamin</label></td><td>:</td>
              <td><div>
                  <select name="jk_pelanggan"  class="form-control select2" required style="width:100%;">
                    <option value="l"> Laki-laki </option>
                    <option value="p"> Peremupan </option>
                  </select>
                  <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
                  </div>
              </td>
              </div>
          </tr>
          <tr>
            <div class="form-group">
              <td style="font-size:90%"><label for="exampleInputEmail1">Nomer Telepon </label></td><td>:</td>
              <td><input type="text" class="form-control" name="no_telp" placeholder="" required></td>
            </div>
          </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Alamat</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="alamat_pelanggan" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Pekerjaan </label></td><td>:</td>
          <td><input type="text" class="form-control" name="pekerjaan_pelanggan" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Username </label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_user" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password </label></td><td>:</td>
          <td><input type="text" class="form-control" name="sandi" placeholder="" required></td>
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
@$nm_pelanggan           = $_POST['nm_pelanggan'];
@$nik_pelanggan          = $_POST['nik_pelanggan'];
@$no_telp                = $_POST['no_telp'];
@$jk_pelanggan           = $_POST['jk_pelanggan'];
@$alamat_pelanggan       = $_POST['alamat_pelanggan'];
@$pekerjaan_pelanggan    = $_POST['pekerjaan_pelanggan'];
@$nm_user                = $_POST['nm_user'];
@$sandi                  = $_POST['sandi'];

if (isset($_POST['submit'])) {
  include 'config/koneksi.php';
  $sql3 = mysql_query("SELECT max(id_pelanggan) as id_pelanggan FROM pelanggan");
        $bc3  = mysql_fetch_array($sql3);
        @$id_pelanggan = $bc3['id_pelanggan'] + 1;
        echo "$id_pelanggan";


         mysql_query("INSERT INTO pelanggan VALUES
           ('','$nm_pelanggan','$jk_pelanggan','$nik_pelanggan','$no_telp','$alamat_pelanggan','$pekerjaan_pelanggan','1')");

         mysql_query("INSERT INTO user VALUES
           ('','$id_pelanggan','$nm_user','$sandi','2','1')");
}
 ?>
