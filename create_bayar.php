<?php
include"config/koneksi.php";
$nama          = $_POST['nama'];
$no_ktp        = $_POST['no_ktp'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp       = $_POST['no_telp'];
$tiket         = $_POST['tiket'];
@$tiket2       = $tiket;
//echo $tiket;
$tanggal       = date("d/m/Y");
$sql1          = mysql_query("SELECT * FROM tiket WHERE kd_tiket='$tiket2'");
@$bc1          = mysql_fetch_array($sql1);
$bus           = $bc1['kd_bus'];

      if(isset($_POST['submit'])){
        //input ke tabel pelanggan
          mysql_query("INSERT INTO pelanggan(id_pelanggan, no_ktp, nm_pelanggan, alamat, jns_kelamin, no_telp, status)
          VALUES ('','$no_ktp','$nama','$alamat','$jenis_kelamin','$no_telp','1')");
        //input ke tabel pesan
          mysql_query("INSERT INTO pesan(kd_pesan, kd_tiket, no_ktp, kd_bus, tanggal, status)
          VALUES ('','$tiket','$no_ktp','$bus','$tanggal','1')");
        //merubah status pesan di tabel tiket
          mysql_query("UPDATE tiket SET status='2' WHERE kd_tiket='$tiket'");
      }
 ?>
<form action="?menu=save-bayar" method="post">
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Nama Pemesan</label></td><td>:</td>
          <td><b>
            <?php
                  $sql2  = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$_POST[no_ktp]'");
                  $bc2  = mysql_fetch_array($sql2);
                  echo $bc2['nm_pelanggan'];

           ?></b><input type="hidden" name="no_ktp" value="<?php echo $bc2['no_ktp'];?>"></td>
          </div>
      </tr>
      <input type="hidden" name="tiket" value="<?php echo $bc['kd_tiket']; ?>">
      <tr><div class="form-group">
          <td style="font-size:90%" valign="top" width="15%"><label for="exampleInputEmail1">Tiket</label></td><td valign="top">:</td>
          <td><b>
            <?php
                  $sql3     = mysql_query("SELECT * FROM tiket WHERE kd_tiket='$_POST[tiket]'");
                  $bc3      = mysql_fetch_array($sql3);
                  $harga    = number_format($bc3['harga'],0,".",".");

                        $sql4     = mysql_query("SELECT * FROM bus WHERE kd_bus='$bc3[kd_bus]'");
                        $bc4      = mysql_fetch_array($sql4);

                  echo "Bus ".$bc4['nm_bus']." Tujuan ".$bc3['tujuan']." Keberangkatan ".$bc3['tanggal']." Pukul ".$bc3['jam']." WIB <br> Harga Tiket Rp ".$harga;
            ?>
            </b>
            <input type="hidden" name="kd_tiket" value="<?php echo $bc3['kd_tiket'];?>">
         </td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Rekening Asal</label></td><td>:</td>
          <td><input type="text" class="form-control" name="rekening_asal" placeholder="" required></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Bank Tujuan</label></td><td>:</td>
          <td><div>
              <select name="bank_tujuan"  class="form-control select2" required style="width:100%;">
                  <option value="0"> Pilih Bank Tujuan Pembayaran</option>
                  <option value="1">Bank BCA</option>
                  <option value="2">Bank Mandiri</option>
                  <option value="3">Bank BRI</option>
                  <option value="4">Bank BNI</option>
              </select>
              </div>
          </td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Total Uang</label></td><td>:</td>
          <td><input type="text" class="form-control" name="total" placeholder="" required></td>
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
