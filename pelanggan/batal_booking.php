<?php
    include '../config/koneksi.php';
    mysql_query("UPDATE pesankamar SET stts='3' WHERE kd_pesan='$_GET[kd]'");
    mysql_query("UPDATE kamarkos SET stts='1' WHERE kd_kamar='$_GET[kmr]'");
    header('location:index.php?menu=pesankamar');
 ?>
