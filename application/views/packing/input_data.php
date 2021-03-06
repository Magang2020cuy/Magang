<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemasukan Barang Packing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <h1>Pemasukan Barang Packing</h1>
        <?php echo form_open('packing_controller/aksi'); ?>
        <form method='POST' enctype="multipart/form-data">
            <table>

                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td>
                        <select name="nama_barang" class="form-control">
                            <?php foreach ($packing as $x) { ?>
                            <option value="<?php echo $x->id_brg_pack; ?>"><?php echo $x->nama_barang; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" placeholder="Masukkan jumlah barang"></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_masuk" placeholder="Masukkan tanggal"></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="tombol">
        </form>
    </center>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'asset/masuk/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet'?>">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div>
        <img src="<?php echo base_url('gambar/1_b_al7C5p26tbZG4sy-CWqw.png')?>" width="100" height="100">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/sekertaris'?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <!-- Interface -->
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapseTwo">
         
         <span>Kelola Produk</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Produk/produk" style="text-decoration: none">Produk</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Produk/produksi" style="text-decoration: none">Produksi Produk</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Produk/penjualan" style="text-decoration: none">Penjualan Produk</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapsee">
         
          <span>Kepegawaian</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Pegawai/pegawai" style="text-decoration: none">Pegawai</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/sekertaris/kehadiran" style="text-decoration: none">Kelola Kehadiran</a>
          </div>
        </div>
      </li>

          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapse">
         
          <span>Penggajian</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Gaji/tambah" style="text-decoration: none">Input Gaji</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Gaji/daftarGaji" style="text-decoration: none">Laporan Gaji</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapse">
         
          <span>Pembeli</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Pembeli/pembeli" style="text-decoration: none">Kelola Pembeli</a>
           
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapse">
         
          <span>Gudang</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Produk/stokGudang" style="text-decoration: none">Stok Gudang</a>
           
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapse">
         
          <span>Packing</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/pack_controller/lihat" style="text-decoration: none">Data Pack</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/packing_controller/lihat" style="text-decoration: none">Receiving</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/issuing_controller/lihat" style="text-decoration: none">Issuing</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/packing_controller/stok_packing" style="text-decoration: none">Stock Opname</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->

        <!----AKUN -->
       

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseTwo">
         
          <span>Cashflow</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url() ?>index.php/Cashflow/input_pemasukan" style="text-decoration: none">Input Pemasukan</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Cashflow/input_pengeluaran" style="text-decoration: none">Input Pengeluaran</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Cashflow/laporan_pemasukan" style="text-decoration: none">Laporan Pemasukan</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Cashflow/laporan_pengeluaran" style="text-decoration: none">Laporan Pengeluaran</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Cashflow/tampil_data" style="text-decoration: none">Cashflow</a>
            </a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->nama ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('gambar/bk.png'); ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
<!--===============================================================================================-->  
  <link rel="icon" type="izmage/png" href="<?php echo base_url().'asset/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/util.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/main.css'?>">
<!--===============================================================================================-->
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
<center>
    <h1>Input Data Receiving</h1>
    <hr>
    <hr>
    <?php echo form_open('packing_controller/aksi'); ?>
    <form method='POST' enctype="multipart/form-data">
    <table>
  <div class="form-group">
    <tr>
        <td>Nama Barang</td> 
            <td>
                <select name="nama_barang" class="form-control">
                    <?php foreach ($packing as $x) { ?>
                         <option value="<?php echo $x->id_brg_pack; ?>"><?php echo $x->nama_barang; ?></option>
                    <?php } ?>
                </select>
            </td>
        </td>
    </tr>
  </div>
  <div class="form-group">
    <tr>
        <td>Jumlah</td> 
            <td>
                <input type="text" name="jumlah" class="form-control form-control-user" placeholder="Masukkan jumlah barang">
            </td>
        </td>
    </tr>
    </tr>
  </div>
  <div class="form-group">
    <tr>
        <td>Tanggal Masuk</td> 
            <td>
                <input type="date" name="tgl_masuk" class="form-control form-control-user" placeholder="Masukkan tanggal masuk">
            </td>
        </td>
    </tr>
    </tr>
  </div>
    <tr><td></td>
        <td align="center">
            <input type="submit" name="submit" class="btn btn-success btn-user btn-block" style="width: 100%">
        </td>
    </tr>   
    </table>
    </form>
  </div>
  </div>
  </div>
  <!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/moment.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/js/main.js'?>"></script>
  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= site_url('Login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'asset/masuk/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/masuk/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'asset/masuk/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'asset/masuk/js/sb-admin-2.min.js'?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url().'asset/masuk/vendor/chart.js/Chart.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'asset/masuk/js/demo/chart-area-demo.js'?>"></script>
  <script src="<?php echo base_url().'asset/masuk/js/demo/chart-pie-demo.js'?>"></script>
</body>
</html>