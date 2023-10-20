
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Data Buku Admin</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halaman_admin.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN <sup> PERPUSTAKAAN </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="halaman_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU DATA ANGGOTA DAN ALUMNI
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="anggota.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>DATA ANGGOTA</span>
                </a>
            </li>

<br>
            <div class="sidebar-heading">
                MENU DATA BUKU DAN TRANSAKSI
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="data_buku.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>DATA BUKU</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="transaksi.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>TRANSAKSI</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="laporan.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>LAPORAN</span>
                </a>
            </li>
<br>
            <div class="sidebar-heading">
                KELUAR
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fas fa-fw fa-circle"></i>
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
                        SELAMAT DATANG DI HALAMAN ADMIN CAKRA BUANA
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
                
                <?php
	//tambahkan dbconnect
	include('../../koneksi.php');

	//query
	$query = "SELECT * FROM tb_anggota";

	$result = mysqli_query($conn , $query);

?>

<div class="container-fluid">
		<center><h3>Form Tambah Data Anggota</h3></center>
		<hr>
		<div class="row">
			<div class="col-sm-7">
				<h3>Silahkan Masukan Data</h3>
				<form role="form" action="insert_anggota.php" method="post">
       
        <div class="form-group">
            <label class="small mb-1" for="id_anggota">ID anggota</label>
            <input class="form-control" id="id_anggota" name="id_anggota" type="number" placeholder="Masukan id anggota"/>
        </div>

        <div class="form-group">
            <label class="small mb-1" for="no_registrasi">NO Registrasi</label>
            <input class="form-control" id="no_registrasi" name="no_registrasi" type="number" placeholder="Masukan nomor registrasi"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="nis_anggota">NIS</label>
            <input class="form-control" id="nis_anggota" name="nis_anggota" type="number" placeholder="Masukan NIS Anggota"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="nama_anggota">Nama</label>
            <input class="form-control" id="nama_anggota" name="nama_anggota" type="text" placeholder="Masukan Nama Siswa"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
            <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Masukan Tempat Lahir Siswa"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label class="small mb-1" for="jk">Jenis Kelamin</label>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="jk" value="L" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="jk" class="custom-control-input" value="P">
              <label class="custom-control-label" for="customRadio2">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="kelas">Unit</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="">-- Pilih Unit --</option>
                <option value="pgtk">PGTK</option>
                <option value="1sd"> 1 SD</option>
                <option value="2sd"> 2 SD</option>
                <option value="3sd"> 3 SD</option>
                <option value="4sd"> 4 SD</option>
                <option value="5sd"> 5 SD</option>
                <option value="6sd"> 6 SD</option>
                <option value="7smp"> 7 SMP</option>
                <option value="8smp"> 8 SMP</option>
                <option value="9smp"> 9 SMP</option>
                <option value="10sma"> 10 SMA</option>
                <option value="11sma"> 11 SMA</option>
                <option value="12sma"> 12 SMA</option>
                <option value="karyawan"> Guru/karyawan </option>
            </select>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="tgl_lahir">Tanggal Daftar Anggota</label>
            <input type="date" name="tgl_daftar" id="tgl_daftar" class="form-control">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Tambah Data ?')"> Tambah Data </button>	
        </div>
        </form>
    </div>
</div>
