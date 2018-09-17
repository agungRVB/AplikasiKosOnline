<?php
   include '../config/koneksi.php';
   $sql = mysql_query("SELECT * FROM pembayaran WHERE kd_pembayaran='$_GET[kd]'");
   $bc  = mysql_fetch_array($sql);
   if ($bc['stts']==1) {
     mysql_query("UPDATE pembayaran SET stts='2' WHERE kd_pembayaran='$_GET[kd]'");
   }elseif ($bc['stts']==2) {
     mysql_query("UPDATE pembayaran SET stts='1' WHERE kd_pembayaran='$_GET[kd]'");
   }
   header('location:index.php?menu=pembayaran');
 ?>
