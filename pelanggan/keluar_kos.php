<?php
    include '../config/koneksi.php';
    $date = date('d-m-Y');
    mysql_query("UPDATE menginap SET stts='0' WHERE kd_inap='$_GET[kd]'");
    mysql_query("UPDATE kamarkos SET stts='1' WHERE kd_kamar='$_GET[kmr]'");
    header('location:index.php?menu=menginap');
 ?>
