<?php
include '../config/koneksi.php';
          $id_pelanggan = $_GET['plgn'];
          $kd_kamar     = $_GET['kmr'];
          $tgl_pesan    = date('d-m-Y');
          $jam_pesan    = date('H:i:s');
      mysql_query("INSERT INTO pesankamar VALUES('','$id_pelanggan','$kd_kamar','$tgl_pesan','$jam_pesan','1')");
      mysql_query("UPDATE kamarkos SET stts='2' WHERE kd_kamar='$kd_kamar'");
      header('location:index.php?menu=pesankamar');
 ?>
