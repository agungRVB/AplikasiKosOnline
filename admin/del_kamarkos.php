<?php
include '../config/koneksi.php';
   mysql_query("UPDATE kamarkos SET stts='0' WHERE kd_kamar='@$_GET[kd]'");
 ?>
 <script language="javascript">
    window.location.href="?menu=kamarkos";
 </script>
