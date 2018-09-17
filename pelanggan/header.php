<?php
  //if ($this->session->userdata('username')==null) {
  //  redirect('');
//  }else{
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>.::Kos Online::.</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../style/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../style/admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../style/admin/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../style/admin/dist/css/skins/_all-skins.min.css">
    <!==============================================================>
    <!-- daterange picker -->
    <link rel="stylesheet" href="../style/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../style/admin/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../style/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../style/admin/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../style/admin/plugins/select2/select2.min.css">
    <!==============================================================>
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="../style/admin/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../style/admin/plugins/fullcalendar/fullcalendar.print.css" media="print">

    <script src="../style/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/dist/sweetalert.css">

    <style type="text/css">
     ul li ul li{
      background: #fff;
      border-bottom:1px solid #eee;
      padding-top: 10px;
     }
     ul li ul li.tahun_projek{
      background: #fff;
      border-bottom:none;
      padding: 5px 0;
      border-top:1px solid #fff;
     }
     ul li ul li a{
      width:100px;
     }
     ul li ul li a i{
      color: #0E82F9;
     }
     ul li ul li span{
      color: #3C64A6;
      font-weight: bold;
     }
     .filter_tahun{
      padding: 10px 15px 10px 18px;
      color:#322283;
     }
     ul li ul li a.ket{
      float:right;
      transition:ease-in 0.1s;
      padding: 2px 20px;
      border-radius: 4px;
      margin-top: -5px;
      width: 15%
     }
     ul li ul li a.ket:hover{
      margin-right: 10px;
      background:#D7F6FF;
      font-weight: bold;
     }
     ul li ul li.tahun_projek span{
      color:#0572A0;
      font-weight: bold;
      padding-left:0;
     }
     ul li ul li.tahun_projek a{
      margin:10px 10px 0 10px;
      width: 98%;
      border-radius:5px;
      background:#D7F6FF;
      border-left: 2px solid #A0C0FF;
      border-bottom: 3px solid #A0C0FF;
     }
     #out a{
       transition:ease-out 0.2s ;
       margin:13px 15px 0 0;
       padding:0;
     }
     #out a:hover{
       background: red;
       border-radius:12px 0 12px 12px;
       padding: 4px 20px;
       font-weight: bold;
     }
     a.opsi_admin{
      background: none;
      font-style: italic;
      font-size: 85%;
      margin-left: -10px;
      padding:2px 5px;
      border: none;
      transition:ease-out 0.2s;
     }
     a.opsi_admin:hover{
      margin-left: -4px;
      background: #E4AC00;
      padding:2px 5px;
      border-radius: 5px
     }
     .jeda{
      color:#394962;
     }
     a#note:hover{
      color:red;
     }
     @-webkit-keyframes color {
         0% { background-color: #DA0000; }
        50% { background-color: #DA0000; }
        100% { background-color: #DA0000; }
     }
     @-moz-keyframes color {
         0% { background-color: yellow; }
        50% { background-color: yellow; }
        100% { background-color: yellow; }
     }
     @keyframes color {
         0% { background-color: #DA0000; }
        50% { background-color: yellow; }
        100% { background-color: red; }
     }
     .ok_1{
      position: relative;
      width: 170px;
      border-radius: 2px 0 0 2px;
      padding: 2px 7px 0 7px;
      left: -7px;
      height:23px;
      top:-2px;
      animation: color 1s linear  0s infinite alternate running;
     }
     .ok_2{
      position: relative;
      width: 30px;
      border-radius: 0 2px 2px 0;
      padding: 2px 7px 0 7px;
      left: -4px;
      height:23px;
      top:-2px;
      animation: color 1s linear  0s infinite alternate running;
     }
     .ok_1:hover, .ok_2:hover{
      -moz-animation: color 0s linear  0s infinite alternate running;
     }
     .bs-glyphicons {
        margin:-10px 0 0 0 ;
        padding-right: 16px;
        list-style: none;
        overflow: hidden;
      }
      .bs-glyphicons li {
        float: left;
        transition:ease-out 0.2s ;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border-radius: 20px 20px 0 0;
      }
      .bs-glyphicons .glyphicon {
        font-size: 24px;
      }
      .bs-glyphicons .glyphicon-class {
        display: block;
        transition:ease-out 0.5s ;
        padding-top: 3px;
        color:#266CBA;
        font-weight: bold;
        text-align: center;
        word-wrap: break-word; /* Help out IE10+ with class names */
      }
      .bs-glyphicons li:hover{
        background-color: rgba(86,61,124,.1);
        color:#266CBA;
        padding-left: 15px;
        padding-right: 15px;
      }
      .action{
        transition:ease-out 0.2s;
        border-radius: 5px;
        color: black;
        background: none;
        padding: 0 2px;
      }
      .action:hover{
        background: #FFE139;
        color: black;
      }
    </style>
    <!=======================================================================>
    <script src="../style/admin/angka.js"></script>
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>   </b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>KOS ONLINE</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <span style="color:white; font-size:30;" align="center"><!--<img src="../images/pramuka.gif" width="50px" height="50px"><b>TATA KELOLA ADMINISTRASI DEWAN KERJA</b><img src="../images/dkr.png" width="50px" height="50px">--></span>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu" id="out">
                <a href="../config/logout.php">
                  Sign out
                </a>
                <?php
                  //  $user = $this->session->userdata('username');
                  //  $link = mysqli_connect("localhost","root","","management_projek");
                //    $result = mysqli_query($link, "select * from admin where username = '$user' ");
              //      $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
              //      if ($row['nama']!= null) {
              //        $nama = $row['nama'];
              //        $id = $row['id'];
                      //echo $nama;
                    //}
                  ?>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar"><br/>
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/kos.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <pixels>Hay!!... <br> <?php
              @session_start();
                  include '../config/Koneksi.php';
                  $pelanggan=$_SESSION['pelanggan'];
                  $sql1 = mysql_query("SELECT * FROM user WHERE nm_user='$_SESSION[user]' and sandi='$_SESSION[pass]'");
                  $bc1  = mysql_fetch_array($sql1);

                  $sql2 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc1[id_pelanggan]'");
                  $bc2  = mysql_fetch_array($sql2);
                  echo $bc2['nm_pelanggan'];
               ?> <?php// echo $nama;?></p>
              <!--<a class="opsi_admin" href="<?php //echo base_url('admin/update/'.$id);?>"> &nbsp edit &nbsp </a>-->
            </div>
          </div><br/>
          <!-- End sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="index.php">
                 <i class="fa fa-home" style="color:orange"></i>
                 <span  style="color:orange">Beranda</span>
              </a>
            </li>
            <!--<li>
              <a href="?menu=kamarkos">
                 <i class="fa fa-building" style="color:orange"></i>
                 <span  style="color:orange">Kamar Kos</span>
              </a>
            </li>-->
            <li>
              <a href="?menu=pesankamar">
                 <i class="fa fa-book" style="color:orange"></i>
                 <span  style="color:orange">Pemesanan Kos</span>
              </a>
            </li>
            <li>
              <a href="?menu=tagihan">
                 <i class="fa fa-money" style="color:orange"></i>
                 <span  style="color:orange">Tagihan Kos</span>
              </a>
            </li>

          <!--<li><a href="?menu=laporan-transaksi"><i class="fa fa-book" style="color:orange"></i> <span  style="color:orange">Kelola Transaksi</span></a></li>-->





            <!--<li>
              <a href="<?php //echo base_url('agenda')?>">
                <i class="fa fa-calendar"></i> <span>Event Calendar</span>
                <small class="label label-primary pull-right">
                    <?php
                    //  $link = mysqli_connect("localhost","root","","management_projek");
                      //$result = mysqli_query($link, "select no from calendar");
                      //$count=0;
                      //while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                      //$count++;
                      //}echo "$count";
                    ?>
                </small>
              </a>
            </li>-->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
<?php
  //}
?>
