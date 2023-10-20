
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAPORAN DATA USER</title>

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

        
<?php
	//tambahkan dbconnect
	include('../../koneksi.php');

	//query
	$query = "SELECT * FROM user";

	$result = mysqli_query($conn , $query);

?>
 <div class="container-fluid">
	
				<br><center><h3>Tabel Daftar User Pengguna</h3></center><br>
				<table class="table table-striped table-hover dtabel">
				<thead>
						<tr>
							<th>No</th>
							<th>Nama Karyhawan</th>
							<th>Nomor Induk Karyawan</th>
							<th>Level</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['username']; ?></td>
							<td><?php echo $row['level']; ?></td>
                            <td>
								
								<a href="delete_user.php?id=<?php echo $row['nama']?>" class="btn btn-danger"onclick="return confirm('Hapus User Akun ?')"><i class="fa fa-trash"></i>Delete</a>
								
							</td>
						</tr>


						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
				<div class="float-right">
						Cetak data : <a href="user_pdf.php" target="_blank" class="btn btn-primary"onclick="return confirm('Cetak data user ?')"> mn<i class="fa fa-file-pdf-o"></i> Print </a>
                        Export data : <a href="user_excel.php" target="_blank" class="btn btn-success"onclick="return confirm('Download data excel user ?')"><i class="fa fa-file-pdf-o">excel</i> </a>		
                    </div>	
			</div>
                        <br>          
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