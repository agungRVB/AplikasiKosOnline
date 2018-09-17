<?php
if (isset($_POST['submit'])) {
@$tujuan  = $_POST['tujuan'];
@$tanggal = $_POST['tanggal'];
echo "$tujuan $tanggal";
?>
<!-- Main content -->
<section class="content">
  <div class="row">
          <?php// if (!$note==NULL) {
          ?><!--<div class="alert alert-info alert-dismissable" style="float:right;width:30%;margin:2px -30px 0 0;padding:0 30px 0 0;overflow:hidden">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position:relative;padding-top:7px;font-size:25px">&times;</button>
              <h4 style="padding:7px 0 0 10px"><i class="icon fa fa-info"></i><?php//  echo $note;?></h4>
            </div>--><?php
        //  }?>

    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Bus</th>
                <th>Tujuan</th>
                <th>Keberangkatan</th>
                <th>Nomor Duduk</th>
                <th>Harga</th>
                <th>keterangan</th>
                <th width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php

            $no=1;
              include 'config/koneksi.php';
              $sql1=mysql_query("SELECT * FROM tiket WHERE status='1' and tujuan='$tujuan' and tanggal='$tanggal'");
              while ($bc1=mysql_fetch_array($sql1)){
                    $sql2 = mysql_query("SELECT * FROM bus WHERE kd_bus='$bc1[kd_bus]'");
                    $bc2  = mysql_fetch_array($sql2);
                  if ($bc1['status']==1) {
                      $status="Tiket Siap";
                  }elseif ($bc1['status']==2) {
                      $status="Tiket Terpesan";
                  }
              ?><tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc2['nm_bus']; ?></td>
                  <td><?php echo $bc1['tujuan']; ?></td>
                  <td><?php echo $bc1['tanggal']." Pukul ". $bc1['jam']." WIB"; ?></td>
                  <td><?php echo $bc1['no_duduk']; ?></td>
                  <td><?php echo $bc1['harga']; ?></td>
                  <td><?php echo $status; ?></td>

                  <td align="center">
                      <a class="action" href="?menu=input-pelanggan&kd=<?php echo $bc1['kd_tiket']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                        <i class="fa fa-ticket" style="color:green;"> </i>Pesan
                      </a>
                  </td>
                </tr>
              <?php
            }
          }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
