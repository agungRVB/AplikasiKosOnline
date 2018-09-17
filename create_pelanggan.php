<?php
    include 'config/koneksi.php';
        $sql  = mysql_query("SELECT * FROM tiket WHERE kd_tiket='$_GET[kd]'");
        $bc   = mysql_fetch_array($sql);
 ?>
<form action="?menu=bayar-tiket" method="post">
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Nama</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nama" placeholder="" required></td>
          </div>
      </tr>
      <input type="hidden" name="tiket" value="<?php echo $bc['kd_tiket']; ?>">
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Nomer KTP</label></td><td>:</td>
          <td><input type="text" class="form-control" name="no_ktp" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Alamat</label></td><td>:</td>
          <td><input type="text" class="form-control" name="alamat" placeholder="" required></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Jenis Kelamin</label></td><td>:</td>
          <td><div>
              <select name="jenis_kelamin"  class="form-control select2" required style="width:100%;">
                  <option value="0"> Jenis Kelamin</option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
              </select>
              </div>
          </td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Nomor Telepon</label></td><td>:</td>
          <td><input type="text" class="form-control" name="no_telp" placeholder="" required></td>
          </div>
      </tr>
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-money"></i> &nbsp Pembayaran <i class="fa fa-long-arrow-right"></i> </button> &nbsp
              <!--<button type="reset" class="btn btn-primary" style="background:#713A3A">Reset</button> &nbsp
              <input type="button" class="btn btn-primary" style="color:white;font-weight:bold;background:#6B6B6B" value="Back" onclick="history.back(-1)" >-->
            </div>
        </td>
      </tr>
    </table>
    </div>
  </div>
</section>
</form>
