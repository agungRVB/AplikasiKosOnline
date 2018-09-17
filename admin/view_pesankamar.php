<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Kelola Pemesanan Kamar</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
          <!--<a href="?menu=input-pesankamar" style="color:#595757;float:right;">
          <div class="tab-pane" id="glyphicons">
            <ul class="bs-glyphicons">
              <li>
                <span class="glyphicon glyphicon-edit"></span>
                <span class="glyphicon-class">Tambah</span>
              </li>
            </ul>
          </div><!-- /#ion-icons
        </a>-->
          <?php// if (!$note==NULL) {
          ?><!--<div class="alert alert-info alert-dismissable" style="float:right;width:30%;margin:2px -30px 0 0;padding:0 30px 0 0;overflow:hidden">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position:relative;padding-top:7px;font-size:25px">&times;</button>
              <h4 style="padding:7px 0 0 10px"><i class="icon fa fa-info"></i><?php//  echo $note;?></h4>
            </div>--><?php
        //  }?>
        <div style="width:28%;margin:5px 15px 0 5px ;padding:0 30px 0 0;overflow:hidden">
            <font size="4px" style="float:left;padding:10px;">Data Pelanggan Kos</font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Pelanggan</th>
                <th>Kamar Pesanan</th>
                <th>Tanggal pesan</th>
                <th>Status Pemesanan</th>
                <th width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';
                  $sql=mysql_query("SELECT * FROM pesankamar WHERE stts !='0' ");
                while ($bc=mysql_fetch_array($sql)) {
                  $sql2 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan = '$bc[id_pelanggan]'");
                  $bc2  = mysql_fetch_array($sql2);

                  $sql3 = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar = '$bc[kd_kamar]'");
                  $bc3  = mysql_fetch_array($sql3);
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc2['nm_pelanggan']; ?></td>
                  <td><?php echo $bc3['nm_kamar']; ?></td>
                  <td><?php echo $bc['tgl_pesan']." ".$bc['tgl_pesan']; ?></td>
                  <td>
                    <?php
                      if ($bc['stts']==1) {
                        echo "Booking Kamar";
                      }elseif ($bc['stts']==2) {
                        echo "Pesanan Cek-in";
                      }elseif ($bc['stts']==3) {
                        echo "Pesanan Batal";
                      }
                    ?>
                  </td>
                  <td align="center">
                    <?php
                      if ($bc['stts']==1) {?>
                        <a class="action" href="?menu=input-menginap&kd=<?php echo $bc['kd_pesan']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                          <i class="fa fa-edit" style="color:green;"> </i>Cek-In
                        </a>
                        <a class="action" href="batal_booking.php?kd=<?php echo $bc['kd_pesan'];?>&kmr=<?php echo $bc['kd_kamar'];?>" style="padding:2.3px 4px 2.3px 8px;" >
                          <i class="fa fa-close" style="color:red"> </i>Batal
                        </a>
                      <?php } elseif ($bc['stts']==2) {
                        echo " ";
                      }elseif ($bc['stts']==3) {
                        echo " ";
                      }
                    ?>
                  </td>
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
