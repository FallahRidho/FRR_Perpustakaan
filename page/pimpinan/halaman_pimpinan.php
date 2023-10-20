
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Halaman Pimpinan</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halaman_pimpinan.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PIMPINAN <sup> UTAMA </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="halaman_pimpinan.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PILIHAN MENU
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="data_user.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA USER</span>
                </a>
               
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>LAPORAN</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">JENIS LAPORAN</h6>
                        <a class="collapse-item" href="data_anggota_laporan.php">DATA ANGGOTA</a>
                        <a class="collapse-item" href="data_buku.php">DATA BUKU</a>
                        <a class="collapse-item" href="user_laporan.php">DATA USER</a>
                        <a class="collapse-item" href="pengunjung_laporan.php">DATA PENGUNJUNG</a>
                        <a class="collapse-item" href="transaksi_laporan.php">DATA PEMINJAM</a>
                        <a class="collapse-item" href="transaksi_pengembalian_laporan.php">PEMINJAMAN SELESAI</a>
                        
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>LOGOUT</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


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
                    <form>
                        SELAMAT DATANG DI HALAMAN PIMPINAN CAKRA BUANA
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
            
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <?php 
                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                            echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
                            ?>

            
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <!-- Content Row -->
                    <div class="row">
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                        include '../../koneksi.php';
 
                        // mengambil data barang
                        $data_anggota = mysqli_query($conn,"SELECT * FROM tb_anggota");
 
                            // menghitung data barang
                        $jumlah_anggota = mysqli_num_rows($data_anggota);
                        ?>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                DATA ANGGOTA</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anggota; ?>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                                       include '../../koneksi.php';
 
                                        // mengambil data barang
                                        $data_user = mysqli_query($conn,"SELECT * FROM user");
 
                                        // menghitung data barang
                                        $jumlah_user = mysqli_num_rows($data_user);
                                        ?> 
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                DATA USER</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_user; ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                        include '../../koneksi.php';
 
                        // mengambil data barang
                        $data_buku = mysqli_query($conn,"SELECT * FROM buku");
 
                            // menghitung data barang
                        $jumlah_buku = mysqli_num_rows($data_buku);
                        ?>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                DATA BUKU</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_buku; ?>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- Earnings (Monthly) Card Example -->
                        
     <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                                       include '../../koneksi.php';
 
                                        // mengambil data barang
                                        $data_pengunjung = mysqli_query($conn,"SELECT * FROM pengunjung");
 
                                        // menghitung data barang
                                        $jumlah_pengunjung = mysqli_num_rows($data_pengunjung);
                                        ?> 
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                DATA PENGUNJUNG</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_pengunjung; ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                        include '../../koneksi.php';
 
                        // mengambil data barang
                        $data_transaksi = mysqli_query($conn,"SELECT * FROM tb_transaksi where status='pinjam'");
    
                        // menghitung data barang
                            $jumlah_transaksi = mysqli_num_rows($data_transaksi);
                            ?>
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TRANSAKSI PEMINJAMAN
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_transaksi; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
                        <?php
                        include '../../koneksi.php';
 
                        // mengambil data barang
                        $data_transaksi = mysqli_query($conn,"SELECT * FROM tb_transaksi where status='kembali'");
    
                        // menghitung data barang
                            $jumlah_transaksi = mysqli_num_rows($data_transaksi);
                            ?>
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TRANSAKSI KEMBALI
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_transaksi; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    

   
                        

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-0">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">VISI DAN MISI PERPUSTAKAAN CAKRA BUANA</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <img src="../../Gambar/logo.png" alt="Logo" style="width:300px;" class="rounded-pill">
                                <br><br>
                                <p>    
                                VISI : <br><br>
                                    "Menjadikan perpustakaan sekolah cakra buana sebagai pusat sumber belajar yang mampu
                                    menyediakan informasi ilmiah dalam upaya meningkatkan kreatifitas dan prestasi warga
                                    belajar sesuai dengan tujuan pendidikan nasional"
                                    </p>   

                                <p>
                                MISI : <br><br>
                                1. Menyediakan bahan pustaka yang berkualitas <br>
                                2. Memanfaatkan teknologi informasi terkini <br>
                                3. Menyediakan sarana dan prasaranavperpustakaan yang memadai <br>
                                4. Mengembangkan perpustakaan dengan merencanakan program kerja yang sesuai dengan kebutuhan
                                civitas sekolah <br>
                                </p>
                                </div>
                                </div>
                            </div>
                        </div>
                     
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>