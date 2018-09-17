
<!-- Main content -->
<section class="content">
  <div class="row">


          <?php// if (!$note==NULL) {
          ?><!--<div class="alert alert-info alert-dismissable" style="float:right;width:30%;margin:2px -30px 0 0;padding:0 30px 0 0;overflow:hidden">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position:relative;padding-top:7px;font-size:25px">&times;</button>
              <h4 style="padding:7px 0 0 10px"><i class="icon fa fa-info"></i><?php//  echo $note;?></h4>
            </div>--><?php
        //  }?>
          <div style="width:28%;margin:5px 15px 0 5px ;padding:0 30px 0 0;overflow:hidden">
            <font size="4px" style="float:left;padding:10px;">Data Pembayaran</font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Atas Nama</th>
                <th>Tiket</th>
                <th>Tanggal Pembayaran</th>
                <th>No. Rekening</th>
                <th>Bank Tujuan</th>
                <th>Jumlah Transver</th>
                <th>keterangan</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no=1;
              include 'config/koneksi.php';
              $sql1=mysql_query("SELECT * FROM pembayaran");
              while ($bc1=mysql_fetch_array($sql1)){
                  //tiket
                    $sql2 = mysql_query("SELECT * FROM tiket WHERE kd_tiket='$bc1[kd_tiket]'");
                    $bc2  = mysql_fetch_array($sql2);
                  //bus
                    $sql3 = mysql_query("SELECT * FROM bus WHERE kd_bus='$bc2[kd_bus]'");
                    $bc3  = mysql_fetch_array($sql3);
                  //pelanggan
                    $sql4 = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$bc1[no_ktp]'");
                    $bc4  = mysql_fetch_array($sql4);

                  if ($bc1['status']==1) {
                      $status="Belum Tervalidasi";
                  }elseif ($bc1['status']==2) {
                      $status="Tervalidasi";
                  }

                  if ($bc1['bank_tujuan']==1) {
                    $bank = "Bank BCA";
                  }elseif ($bc1['bank_tujuan']==2) {
                    $bank = "Bank Mandiri";
                  }elseif ($bc1['bank_tujuan']==3) {
                    $bank = "Bank BRI";
                  }elseif ($bc1['bank_tujuan']==4) {
                    $bank = "Bank BNI";
                  }
              ?><tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc4['nm_pelanggan']."<br>".$bc4['no_ktp']; ?></td>
                  <td><?php echo $bc3['nm_bus']."<br>".$bc2['tujuan']."<br>".$bc2['tanggal']."<br>".$bc2['jam']; ?></td>
                  <td><?php echo $bc1['tanggal'];?></td>
                  <td><?php echo $bc1['rek_asal']; ?></td>
                  <td><?php echo $bank; ?></td>
                  <td><?php echo $bc1['total']; ?></td>
                  <td><?php echo $status; ?></td>


                </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
