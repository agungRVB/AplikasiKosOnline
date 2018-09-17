<?php

          //$harga_kos=number_format($tagihan,0,",",".");
         ?>

<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Tagihan Bulanan</h1>
</div>

<!-- Main content -->
<section class="content">
  <div class="row">
          <!--<a href="?menu=input-pembayaran" style="color:#595757;float:right;">
          <div class="tab-pane" id="glyphicons">
            <ul class="bs-glyphicons">
              <li>
                <span class="glyphicon glyphicon-edit"></span>
                <span class="glyphicon-class">Pesan Kamar</span>
              </li>
            </ul>
          </div> /#ion-icons
        </a>-->

        <div style="width:28%;margin:5px 15px 0 5px ;padding:0 30px 0 0;overflow:hidden">
            <font size="4px" style="float:left;padding:10px;">Data Tagihan Bulanan</font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Pelanggan</th>
                <th>Kamar Pelanggan</th>
                <th>Rekening Pengirim</th>
                <th>Kode Transfer</th>
                <th>Waktu Pembayaran</th>
                <th>Tagihan</th>
                <th>Nominal Bayar</th>
                <th>Status Bayar</th>
                <th width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';


                  $sql=mysql_query("SELECT * FROM pembayaran WHERE stts !='0'");
                while ($bc=mysql_fetch_array($sql)) {

                  $sql2 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan = '$bc[id_pelanggan]'");
                  $bc2  = mysql_fetch_array($sql2);

                  $sql4 = mysql_query("SELECT * FROM menginap WHERE id_pelanggan='$bc[id_pelanggan]' AND stts='1'");
                  $bc4  = mysql_fetch_array($sql4);

                  $sql3 = mysql_query("SELECT * FROM kamarkos WHERE kd_kamar = '$bc4[kd_kamar]'");
                  $bc3  = mysql_fetch_array($sql3);
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc2['nm_pelanggan']; ?></td>
                  <td><?php echo $bc3['nm_kamar']; ?></td>
                  <td><?php echo $bc['no_rekening']."<br>a/n. ".$bc['atasnama_pengirim']; ?></td>
                  <td><?php echo $bc['kd_transfer']; ?></td>
                  <td><?php echo $bc['tgl_bayar']." ".$bc['jam_bayar']; ?></td>
                  <td><?php echo $bc['tagihan']; ?></td>
                  <td><?php echo $bc['nominal_bayar']; ?></td>
                  <td>
                      <?php
                        if ($bc['stts']==1) {
                          echo "Pembayaran Dikirim";
                        }elseif ($bc['stts']==2) {
                          echo "Pembayaran Disetujui";
                        }elseif ($bc['stts']==3) {
                          echo " ";
                        }
                      ?>
                  </td>
                  <td align="center">
                      <!---->
                      <?php
                        if ($bc['stts']==1) {?>
                          <a class="action" href="konfirmasi_pembayaran.php?kd=<?php echo $bc['kd_pembayaran']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                            <i class="fa fa-edit" style="color:green;"> </i>Konfirmasi
                          </a>
                        <?php } elseif ($bc['stts']==2) {?>
                          <a class="action" href="konfirmasi_pembayaran.php?kd=<?php echo $bc['kd_pembayaran']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                            <i class="fa fa-close" style="color:red"> </i>Batal
                          </a>
                        <?php }elseif ($bc['stts']==3) {
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
