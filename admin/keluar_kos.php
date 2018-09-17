<?php
    include '../config/koneksi.php';
    $date = date('d-m-Y');
    mysql_query("UPDATE menginap SET tgl_keluar='$date', stts='0' WHERE kd_inap='$_GET[kd]'");
    mysql_query("UPDATE pelanggan SET stts='3' WHERE kd_inap='$_GET[plgn]'");
    mysql_query("UPDATE kamarkos SET stts='1' WHERE kd_kamar='$_GET[kmr]'");
    header('location:index.php?menu=menginap');
 ?>
