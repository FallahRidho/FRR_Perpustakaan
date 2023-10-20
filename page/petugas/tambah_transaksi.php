
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Transaksi Petugas Perpustakaan</title>

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
                <div class="sidebar-brand-text mx-3">PETUGAS <sup> PERPUSTAKAAN </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="halaman_petugas.php">
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
                <a class="nav-link collapsed" href="data_pengunjung.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>DATA PENGUNJUNG</span>
                </a>
               
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="transaksi.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>TRANSAKSI</span>
                </a>
            </li>

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
                        SELAMAT DATANG DI HALAMAN PETUGAS CAKRA BUANA
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
                <div class="container-fluid">

                <?php 
                //tambahkan dbconnect
	include('../../koneksi.php');
    // menampilkan judul buku di TB_buku di bagian option pilih buku
$tampilNamaBuku = $conn->query("SELECT * FROM buku ORDER BY id_bk") or die(mysqli_error($conn));

// menampilkan nama anggota & nim di TB_anggota di bagian option pilih anggota
$tampilNamaAnggota = $conn->query("SELECT * FROM tb_anggota ORDER BY nis") or die(mysqli_error($conn));

// $sql = $conn->query("SELECT * FROM tb_buku INNER JOIN tb_anggota ON tb_buku.id_buku = tb_anggota.id_anggota") or die(mysqli_error($conn));

$tgl_pinjam = date('d-m-Y');
$tujuh_hari = mktime(0,0,0, date('n'), date('j') + 7, date('Y'));
$kembali = date('d-m-Y', $tujuh_hari);

if(isset($_POST['tambah'])) {
    
    $tgl_pinjam = htmlspecialchars($_POST['tgl_pinjam']);
    $tgl_kembali = htmlspecialchars($_POST['tgl_kembali']);
    
    // $nama_buku = $_POST['buku'];
    // $pecahB = explode(".", $nama_buku);
    // $judul = $pecahB[0];
    $nama_buku = $_POST['buku'];
    $pecahB = explode(".", $nama_buku);
    $id = $pecahB[0];
    $judul = $pecahB[1];
    // var_dump($id); 
    // var_dump($judul); die;

    // $nama_anggota = $_POST['nama'];
    // $pecahN = explode(".", $nama_anggota);
    // $nim = $pecahN[0];
    $nama_anggota = $_POST['nama'];
    $pecahN = explode(".", $nama_anggota);
    $nis = $pecahN[0];
    $nama = $pecahN[1];

    $sql = $conn->query("SELECT * FROM buku WHERE judul_bk = '$judul'") or die(mysqli_error($conn));
    while($data = $sql->fetch_assoc()) {
        $sisa = $data['jumlah_bk'];

        if($sisa == 0) {
            echo "<script>alert('Stok Buku Habis, Transaksi, tidak dapat dilakukan, silahkan tambahkan stok buku dulu.');window.location='?p=transaksi&aksi=tambah';</script>";
        } else {
            $conn->query("INSERT INTO tb_transaksi VALUES(null, '$id', '$nis', '$nis', '$tgl_pinjam', '$tgl_kembali', 'pinjam')") or die(mysqli_error($conn));
            $conn->query("UPDATE buku SET jumlah_bk = (jumlah_bk-1) WHERE id_bk = '$id'") or die(mysqli_error($conn));
            echo "<script>alert('Data transaksi berhasil ditambahkan.');window.location='transaksi.php';</script>";
        }
    }
}


?>

<h1 class="mt-4">Tambah Data Transaksi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="halaman_admin.php">Dashboard</a></li>
    <li class="breadcrumb-item active">tambah data transaksi</li>
</ol>
<div class="card-header mb-5">
	
	<form action="" method="post">
    
    <div class="form-group">
        <label class="small mb-1" for="nama_bk">Buku</label>
        <select name="buku" id="nama_buku" class="form-control">
            <option value="">-- Pilih Buku --</option>
            <?php 
            while ($pecahBuku = $tampilNamaBuku->fetch_assoc()) {
            echo "<option value='$pecahBuku[id_bk].$pecahBuku[judul_bk]'>$pecahBuku[judul_bk]</option>";
            
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="nama_anggota">Nama</label>
        <select name="nama" id="nama_anggota" class="form-control">
            <option value="">-- Pilih Anggota --</option>
            <?php 
            while ($pecahAnggota = $tampilNamaAnggota->fetch_assoc()) {
            echo "<option value='$pecahAnggota[id_anggota].$pecahAnggota[nama_anggota]'>$pecahAnggota[nis].$pecahAnggota[nama_anggota]</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="text" name="tgl_pinjam" id="tgl_pinjam" class="form-control" readonly="" value="<?= $tgl_pinjam ?>">
    </div>
    <div class="form-group">
        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="text" name="tgl_kembali" id="tgl_kembali" class="form-control" readonly="" value="<?= $kembali ?>">
    </div>
    <div class="form-group">
    	<button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
    </div>
	</form>
</div>
            </div>
        </body>
        </html>