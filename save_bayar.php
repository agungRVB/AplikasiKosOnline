<?php
include 'config/koneksi.php';
//$kd_bus          = $_POST['kd_bus'];
$kd_tiket        = $_POST['kd_tiket'];
$tanggal         = date("d/m/Y");
$rekening_asal   = $_POST['rekening_asal'];
$bank_tujuan     = $_POST['bank_tujuan'];
$total           = $_POST['total'];
$no_ktp          = $_POST['no_ktp'];

       if (isset($_POST['submit'])) {
          mysql_query("INSERT INTO pembayaran(kd_bayar, no_ktp, kd_tiket, tanggal, rek_asal, bank_tujuan, total, status)
          VALUES ('','$no_ktp','$kd_tiket','$tanggal','$rekening_asal','$bank_tujuan','$total','1')");

          mysql_query("UPDATE tiket SET status='3' WHERE kd_tiket='$kd_tiket'");

          ?>

               <div align='center'>
                    <center><b>PEMESANAN TIKET ANDA BERHASI <br> <a href="index.php">Kembali ke halama utama</a></b></center>
               </div>
          <?php
      }
 ?>
