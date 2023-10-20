
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Laporan Admin</title>

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
            <li class="nav-item ">
                <a class="nav-link collapsed" href="anggota.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>DATA ANGGOTA</span>
                </a>
            </li>

<br>
            <div class="sidebar-heading">
                MENU DATA BUKU DAN TRANSAKSI
            </div>

            <li class="nav-item ">
                <a class="nav-link collapsed" href="data_buku.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>DATA BUKU</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="transaksi.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>TRANSAKSI</span>
                </a>
            </li>

            <li class="nav-item active">
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
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Anggota
    </div>
    <div class="card-body">
        <div class="table-responsive">
				<table class="table table-striped table-hover dtabel">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>NO Registrasi</th>
                        <th>ID Anggota</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Tanggal Daftar</th>
                        
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
                        <td><?= $pecahAnggota['no_registrasi']; ?></td>
                        <td><?= $pecahAnggota['nis']; ?></td>
                        <td><?= $pecahAnggota['nama_anggota']; ?></td>
                        <td><?= $pecahAnggota['tempat_lahir']; ?></td>
                        <td><?= $pecahAnggota['tgl_lahir']; ?></td>
                        <td><?= $jk; ?></td>
                        <td><?= $pecahAnggota['kelas']; ?></td>
                        <td><?= $pecahAnggota['tgl_daftar']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="float-right">
						Cetak data : <a href="anggota_pdf.php" target="_blank" class="btn btn-primary" onclick="return confirm('Cetak Laporan Data Anggota?')"><i class="fa fa-file-pdf-o">Print</i> </a>
						Export data : <a href="anggota_excel.php" target="_blank" class="btn btn-success" onclick="return confirm('Laporan Data Anggota Di Export Ke Excel ?')"><i class="fa fa-file-pdf-o">excel</i> </a>
                    </div>

        </div>
    </div>
</div>
</div>


<?php
	//tambahkan dbconnect
	include('../../koneksi.php');

	//query
	$query = "SELECT * FROM buku";

	$result = mysqli_query($conn , $query);

?>
<div class="container-fluid">
<h1 class="mt-4">Data Buku</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Buku
    </div>
    <div class="card-body">
        <div class="table-responsive">
				
				<table class="table table-striped table-hover dtabel">
				<thead>
						<tr>
							<th>No</th>
                            <th>ID Buku</th>
							<th>Judul Buku</th>
							<th>Pengarang Buku</th>
							<th>Penerbit Buku</th>
                            <th>Tahun Buku</th>
							<th>Klasifikasi Buku</th>
                            <th>Jumlah Buku</th>
						
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
                            <td><?php echo $row['id_bk']; ?></td>
							<td><?php echo $row['judul_bk']; ?></td>
                            <td><?php echo $row['pengarang_bk']; ?></td>
							<td><?php echo $row['penerbit_bk']; ?></td>
							<td><?php echo $row['tahun_bk']; ?></td>
                            <td><?php echo $row['genre_bk']; ?></td>
							<td><?php echo $row['jumlah_bk']; ?></td>
						</tr>


						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
				<div class="float-right">
				        Cetak data : <a href="buku_pdf.php" target="_blank" class="btn btn-primary" onclick="return confirm('Cetak Laporan Data Buku ?')"><i class="fa fa-file-pdf-o">Print</i> </a>
						Export data : <a href="buku_excel.php" target="_blank" class="btn btn-success" onclick="return confirm('Laporan Data Buku Di Export Ke Excel ?')"><i class="fa fa-file-pdf-o">excel</i> </a>		
						</div>
                        
    </div>
</div>
</div>

                        <?php 
include('../../koneksi.php');
require_once 'function.php';
// menampilkan DB buku
// $ambilTransaksi = $conn->query("SELECT * FROM tb_transaksi WHERE status = 'pinjam'") or die(mysqli_error($conn));

$sql = $conn->query("SELECT * FROM tb_transaksi INNER JOIN buku
										ON tb_transaksi.id_buku = buku.id_bk INNER JOIN tb_anggota 
										ON tb_transaksi.id_anggota = tb_anggota.id_anggota WHERE status = 'pinjam'
										") or die(mysqli_error($conn));

?>
<!-- <pre>
	<?php var_dump($pecah); ?>
</pre> -->
<br>
<h1 class="mt-4">Data Transaksi Peminjaman</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Transaksi
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-hover dtabel">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Terlambat</th>
                        <th>Status</th>
              
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecah = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecah['nis']; ?></td>
                        <td><?= $pecah['nama_anggota']; ?></td>
                        <td><?= $pecah['judul_bk']; ?></td>
                        <td><?= $pecah['tgl_pinjam']; ?></td>
                        <td><?= $pecah['tgl_kembali']; ?></td>
                        <td>
                        	<?php 
                        	$denda = 500;
                        	$tgl_dateline = $pecah['tgl_kembali'];
                        	$tgl_kembali = date('d-m-Y');

                        	$lambat = terlambat($tgl_dateline, $tgl_kembali);
                        	$denda1 = $lambat * $denda;

                        	if($lambat > 0) { ?>
                        		<div style='color:red;'><?= $lambat ?> hari<br> (Rp. <?= number_format($denda1) ?>)</div>
                        	<?php
                        	} else {
                        		echo $lambat . "Hari";
                        	}
                        	?>
                        </td>
                        <td><?= $pecah['status']; ?></td>
                       
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <div class="float-right">
                        Cetak data : <a href="transaksi_pdf.php" target="_blank" class="btn btn-primary" onclick="return confirm('Cetak Laporan Transaksi Peminjaman ?')"><i class="fa fa-file-pdf-o">Print</i> </a>
						Export data : <a href="transaksi_excel.php" target="_blank" class="btn btn-success" onclick="return confirm('Laporan Data Transaksi Peminjaman Di Export Ke Excel ?')"><i class="fa fa-file-pdf-o">excel</i> </a>	
                    </div>
        </div>
    </div>
</div>
	
<?php 
include('../../koneksi.php');
require_once 'function.php';
// menampilkan DB buku
// $ambilTransaksi = $conn->query("SELECT * FROM tb_transaksi WHERE status = 'pinjam'") or die(mysqli_error($conn));

$sql = $conn->query("SELECT * FROM tb_transaksi INNER JOIN buku
										ON tb_transaksi.id_buku = buku.id_bk INNER JOIN tb_anggota 
										ON tb_transaksi.id_anggota = tb_anggota.id_anggota WHERE status = 'kembali'
										") or die(mysqli_error($conn));

?>
<!-- <pre>
	<?php var_dump($pecah); ?>
</pre> --><br>
<h1 class="mt-4">Data Transaksi Kembali</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Transaksi
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-hover dtabel">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
              
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecah = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecah['nis']; ?></td>
                        <td><?= $pecah['nama_anggota']; ?></td>
                        <td><?= $pecah['judul_bk']; ?></td>
                        <td><?= $pecah['tgl_kembali']; ?></td>
                        <td><?= $pecah['status']; ?></td>
                       
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <div class="float-right">
            Cetak data : <a href="transaksikembali_pdf.php" target="_blank" class="btn btn-primary" onclick="return confirm('Cetak Laporan Transaksi Selesai Peminjaman ?')"><i class="fa fa-file-pdf-o">Print</i> </a>
			Export data : <a href="transaksikembali_excel.php" target="_blank" class="btn btn-success" onclick="return confirm('Laporan Data Transaksi Selesai Di Export Ke Excel ?')"><i class="fa fa-file-pdf-o">excel</i> </a>	
						</div>
        </div>
    </div>
</div>

                        </div>
       

</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 