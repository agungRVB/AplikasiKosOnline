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
          <td style="font-size:90%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_user" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
          <td><input type="text" class="form-control" name="sandi" placeholder="" required></td>
        </div>
      </tr>
      <tr>
            <div class="form-group">
              <td style="font-size:90%"><label for="exampleInputEmail1">Hak Akses</label></td><td>:</td>
              <td><div>
                  <select name="hak_akses"  class="form-control select2" required style="width:100%;">
                    <option value="1"> Admin </option>
                    <option value="3"> Pemilik </option>
                  </select>
                  <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
                  </div>
              </td>
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
@$nm_user    = $_POST['nm_user'];
@$sandi      = $_POST['sandi'];
@$hak_akses  = $_POST['hak_akses'];

if (isset($_POST['submit'])) {
  include '../config/koneksi.php';
       mysql_query("INSERT INTO user VALUES ('','','$nm_user','$sandi','$hak_akses','1')");
       ?>
       <script language="javascript">
          window.location.href="?menu=user";
       </script>
       <?php
}
 ?>
