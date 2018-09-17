<?php
include_once 'header.php';


    switch (@$_GET['menu']) {


          case 'user':
            include 'laporan_user.php';
            break;
          case 'input-user':
            include 'create_user.php';
            break;
          case 'edit-user':
            include 'update_user.php';
            break;

          case 'kamarkos':
            include 'laporan_kamarkos.php';
            break;
          case 'input-kamarkos':
            include 'create_kamarkos.php';
            break;
          case 'edit-kamarkos':
            include 'update_kamarkos.php';
            break;

          case 'pelanggan':
            include 'laporan_pelanggan.php';
            break;
          case 'input-pelanggan':
            include 'create_pelanggaln.php';
            break;
          case 'edit-pelanggan':
            include 'update_pelanggan.php';
            break;

          case 'pesankamar':
            include 'laporan_pesankamar.php';
            break;
          case 'input-pesankamar':
            include 'create_pesankamar.php';
            break;
          case 'edit-pesankamar':
            include 'update_pesankamar.php';
            break;

          case 'menginap':
            include 'laporan_menginap.php';
            break;
          case 'input-menginap':
            include 'create_menginap.php';
            break;
          case 'edit-menginap':
            include 'update_menginap';
            break;

          case 'pembayaran':
            include 'laporan_pembayaran.php';
            break;
          case 'input-pembayaran':
            include 'create_pembayaran.php';
            break;
          case 'edit-pembayaran':
            include 'update_pembayaran.php';
            break;


      default:
      ?>
      <!--<center><img src="../images/logolebahpandu.png" width="500px" height="500px"></center>-->
      <?php
        break;
    }
include_once 'footer.php';
 ?>
