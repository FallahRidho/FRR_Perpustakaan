
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
                MENU DATA ANGGOTA 
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
// menampilkan DB buku
$ambilAnggota = $conn->query("SELECT * FROM tb_anggota ORDER BY id_anggota DESC") or die(mysqli_error($conn));

?>
<div class="container-fluid">
<h1 class="mt-4">Data Anggota</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="halaman_admin.php">Dashboard</a></li>
    <li class="breadcrumb-item active">data anggota</li>
</ol>
<div class="col-md-12">
    <a href="tambah.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Anggota</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Anggota
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Anggota</th>
                        <th>No Registrasi</th>
                        <th>NIS Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas / unit</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecahAnggota = $ambilAnggota->fetch_assoc()) {
                    $jk = ($pecahAnggota['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecahAnggota['id_anggota']; ?></td>
                        <td><?= $pecahAnggota['no_registrasi']; ?></td>
                        <td><?= $pecahAnggota['nis_anggota']; ?></td>
                        <td><?= $pecahAnggota['nama_anggota']; ?></td>
                        <td><?= $pecahAnggota['tempat_lahir']; ?></td>
                        <td><?= $pecahAnggota['tgl_lahir']; ?></td>
                        <td><?= $jk; ?></td>
                        <td><?= $pecahAnggota['kelas']; ?></td>
                        <td><?= $pecahAnggota['tgl_daftar']; ?></td>
                        <td>
                        <a href="ubah.php?id=<?php echo $pecahAnggota['id_anggota']?>" class="btn btn-info btn-sm"><i class="fa fa-edit"  onclick="return confirm('Edit Data ?')">Edit</i></a>
                        <a href="hapus.php?id=<?php echo $pecahAnggota['id_anggota']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"  onclick="return confirm('Yakin hapus ?')">Hapus</i></a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>