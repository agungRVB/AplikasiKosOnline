<?php

	include 'koneksi.php';
  if(isset($_POST['log'])) {
    $nama_user  = @$_POST['user'];
    $pswd       = @$_POST['pass'];

    //$enkrip     = md5($pswd);

    $sql  = mysql_query("SELECT * FROM user WHERE nm_user='$nama_user' and sandi='$pswd'");
    $row  = mysql_fetch_row($sql);
	  $bc		= mysql_fetch_array($sql);
	//	echo "asdasdsad";

      if($row > 0){
        session_start();
        $_SESSION['user']	= $nama_user;
        $_SESSION['pass']	= $pswd;

				$_SESSION['pelanggan'] = $bc['id_pelanggan'];
				echo $_SESSION['pelanggan'];
				//echo $_SESSION['user'];
				//echo $_SESSION['pass'];
		//	}}
		//$_SESSION['akses']	= '$bc[akses]';
            if ($row[4]==1) {
              header('Location:../admin/');
            }elseif ($row[4]==2) {
              header('Location:../pelanggan/');
      			}elseif ($row[4]==3) {
      				header('Location:../pemilik/');
      			}

  }else{
		echo '<script language="javascript">
	           alert ("USERNAME ATAU PASSWORD YANG ANDA MASUKAN SALAH");
	           </script>';

?>
<script type="text/javascript">
window.location ="../index.php?indek=login" ;
</script>
<?php
	}
}
 ?>
