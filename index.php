<?php include 'header.php'; ?>

        <?php
            switch (@$_GET['menu']) {
              //pesan
              case 'pesan':
                ?>
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Pemesanan Tiket</h3>
                  </div>
                  <div class="box-body">
                    <?php include 'pesan.php'; ?>
                <?php
                break;
                //
                case 'registrasi':
                  ?>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Registrasi Pelanggan Kos</h3>
                    </div>
                    <div class="box-body">
                      <?php include 'create_registrasi.php'; ?>
                  <?php
                  break;
                //pilih tiket
                case 'pilih-tiket':
                  ?>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Pemesanan Tiket</h3>
                    </div>
                    <div class="box-body">
                      <?php include 'pilih_tiket.php'; ?>
                  <?php
                  break;
                  //
                  case 'input-pelanggan':
                    ?>
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Pemesanan Tiket</h3>
                      </div>
                      <div class="box-body">
                        <?php include 'create_pelanggan.php'; ?>
                    <?php
                    break;
                    //save-bayar
                    case 'save-bayar':
                      ?>
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title"></h3>
                        </div>
                        <div class="box-body">
                          <?php include 'save_bayar.php'; ?>
                      <?php
                      break;

                    case 'cara-pesan':
                      ?>
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Cara Pemesanan</h3>
                        </div>
                        <div class="box-body">
                        <div style="">
                            <p size='12pt'>
                                1. Jika anda belum menjadi pelanggan kami, maka registrasi dahulu <br>
                                2. Kemudian login kehalaman pelanggan, kemudian pilih dan pesan kamar <br>
                                3. Setelah itu sihakan cek in ke kamar kos dengan mendatakan diri kepada admin <br>
                                4. untuk pembayaran bulanan datap di lakukan melalui sistem kami
                            </p>
                        </div>
                      <?php
                      break;

                      case 'login':
                        ?>
                        <div class="box box-default">
                          <div class="box-header with-border">
                            <h3 class="box-title">Login</h3>
                          </div>
                          <div class="box-body">
                            <?php include 'form_login.php'; ?>
                        <?php
                        break;

                        case 'provil-kos':
                          ?>
                          <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">Provil Kos</h3>
                            </div>
                            <div class="box-body">
                              <center>
                                  <img src="images/kos.jpg" alt=""><br>
                                  <font face="times new roman" size="15pt"><b>GRIYAKU</b></font><br>
                                  Dsn Talun RT.07, RW.07, Ds. Karang Jati, Kec. Bergas, Kab. Semarang
                              </center>
                          <?php
                          break;
                        case 'detail-kos':
                          ?>
                          <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">Detail Kos</h3>
                            </div>
                            <div class="box-body">
                              <?php include 'detail_kos.php'; ?>
                          <?php
                          break;
              default:
              ?>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Beranda</h3>
                </div>
                <div class="box-body">
                  <div class="" style="font-size:14pt;">
                    <center>
                      <?php include 'grid_kos2.php'; ?>
                    </center>
                  </div>


              <?php
                break;
            }
         ?>



<?php include 'footer.php'; ?>
