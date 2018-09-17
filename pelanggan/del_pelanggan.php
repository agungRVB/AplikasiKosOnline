<?php
include '../config/koneksi.php';
$kode = @$_GET['kd'];
   mysql_query("UPDATE pelanggan SET stts='0' WHERE id_pelanggan='$kode'");
   header('location:index.php?menu=pelanggan');
 ?>
 <!--<script language="javascript">
    window.location.href="?menu=pelanggan";
 </script>-->
