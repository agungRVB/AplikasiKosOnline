<!--<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<table align="right"><tr><td><input type="text" name="kos" ><input type="submit" name="cari" value="Cari"></td></tr></table>
</form>-->
<?php
    @$kos=htmlentities($_POST['kos']);

if(empty($kos) and !isset($_POST['cari'])){






      $batas=12;
            @$halaman=$_GET['halaman'];
                  if(empty($halaman)){
                        $posisi=0;
                        $halaman=1;
                   }else{
                        $posisi=($halaman - 1) * $batas;
                   }
include"config/koneksi.php";
$kolom=4;
      $sql=mysql_query("select * from kamarkos limit $posisi,$batas");
echo"<table><tr>";
$i=0;
       while($bc=mysql_fetch_array($sql)){
    if($i >= $kolom){
	echo"</tr><tr>";
	$i=0;
	}
	$i++;
        	if($bc['stts']==1){
        	     $stok="<font color=#3333CC>Kamar Siap</font>";
        	}elseif($bc['stts']==2){
        	     $stok="<blink><font color=#CC3333>Kamar Telah Dipesan</font></blink>";
        	}elseif($bc['stts']==3){
               $stok="<blink><font color=#CC3333>Kamar Telah Dihuni</font></blink>";
          }
          $harga_kos=number_format($bc['harga_kos'],0,",",".");

	           echo"<td align=center width=150><br>
  	                   $bc[nm_kamar]<br>
                    	<img src='admin/$bc[gambar]' width=130 height=120>
                        <br>
                    	<a href='index.php?menu=detail-kos&id=$bc[kd_kamar]'>
                          <input type=button value=Detail>
                      </a>
                        <br>
                          Rp. $harga_kos

                        <br>
                    	$stok
                  </td>
	               <td>
                      &nbsp;
                 </td>
	";
}
  $tamil=mysql_query("select * from kamarkos");
  $jmldata=mysql_num_rows($tamil);
  $jmlhalaman=ceil($jmldata/$batas);
        for($i=1;$i<=$jmlhalaman;$i++)

            if($i != $halaman){
                echo"<a href='$_SERVER[PHP_SELF]?halaman=$i'> $i </a>";
            }else{
                echo"<b>$i</b>";
            }
            echo"</tr></table>";






      }else{
      $kolom=3;
      $sql=mysql_query("select * from kamarkos where nm_kamar like '%@$kos%'");

      echo"<table><tr>";
    $i=0;
       while($bc=mysql_fetch_array($sql)){

        if($i >= $kolom){
          	echo"</tr><tr>";
          	$i=0;
	       }
	          $i++;
	             if ($bc['stok'] > 0){
	                $stok="<font color=#3333CC>Stok Ada</font>";
	             }else{
	                $stok="<blink><font color=#CC3333>Stok kos Habis</font></blink>";
	             }
	              echo"<td align=center width=150>
                      <br>
	                       $bc1[merek] $bc[nm_kamar]
                      <br>
	                       <img src='admin/$bc[gambar]' width=130 height=120>
                      <br>
                        	<a href='index.php?menu=detail-kos&id=$bc[kd_kamar]'>
                              <input type=button value=Detail>
                          </a>
                      <br>
	                        $stok</td>
	                    <td>
                          &nbsp;
                      </td>
	";
      }
	     echo"</tr></table>";

}
?>
