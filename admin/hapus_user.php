<?php
   include '../config/koneksi.php';
   mysql_query("UPDATE user SET stts='0' WHERE id_user='$_GET[kd]'");
 ?>
 <script language="javascript">
    window.location.href="index.php?menu=user";
 </script>
