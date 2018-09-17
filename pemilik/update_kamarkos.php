<?php
   include '../config/koneksi.php';
   $sql1 = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar = '$_GET[kd]'");
   $bc1  = mysql_fetch_array($sql1);
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
          <td><img src="<?php echo $bc1['gambar']; ?>" width="100px" height="100px"></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Kamar</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc1['nm_kamar']; ?>" name="nm_kamar" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Fasilitas</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="fasilitas" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  <?php echo $bc1['fasilitas']; ?>
              </textarea>
          </td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Gambar Kos</label></td><td>:</td>
          <td><input type="file" name="gambar" placeholder="" ></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Harga Kos</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc1['harga_kos']; ?>" name="harga_kos" placeholder="" required></td>
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
@$nm_kamar    = $_POST['nm_kamar'];
@$fasilitas   = $_POST['fasilitas'];
@$harga_kos   = $_POST['harga_kos'];
@$plat_nmr    = $_POST['gambar'];
if (isset($_POST['submit'])) {



    $tipe_file=$_FILES['gambar']['type'];
    $lokasifile=$_FILES['gambar']['tmp_name'];
    $namafile=trim($_FILES['gambar']['name']);
    $ukurangambar=$_FILES['gambar']['size'];
                     //untuk memilih tipe file untuk masuk ke direktory
       /*if($tipe_file != "image/gif" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/jpg" and
            $tipe_file != "image/png"){
      echo"file yang di masukan bukan file gambar";
    }else{*/
 $acak=rand(0000,9999);
 $namaupload=$acak.$namafile;
 $direktori="upload_imgkos/$namaupload";
 move_uploaded_file($lokasifile,"$direktori");



  include '../config/koneksi.php';
  if (empty($namafile)) {
        mysql_query("UPDATE kamarkos SET nm_kamar='$nm_kamar', harga_kos='$harga_kos', fasilitas='$fasilitas' WHERE kd_kamar='$_GET[kd]'");
  }else{
        mysql_query("UPDATE kamarkos SET nm_kamar='$nm_kamar', harga_kos='$harga_kos', fasilitas='$fasilitas', gambar='$direktori' WHERE kd_kamar='$_GET[kd]'");
}
      ?>
       <script language="javascript">
          window.location.href="?menu=kamarkos";
       </script>
       <?php
}
 ?>
