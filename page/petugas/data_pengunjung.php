
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Halaman Petugas Perpustakaan</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halaman_petugas.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PETUGAS <sup> PERPUSTAKAAN </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="data_pengunjung.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>DATA PENGUNJUNG</span>
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

<?php
	//tambahkan dbconnect
	include('../../koneksi.php');

	//query
	$query = "SELECT * FROM pengunjung";

	$result = mysqli_query($conn , $query);

?>

  <div class="container-fluid">
		<center><h3>DATA PENGUNJUNG</h3></center>
		<hr>
		<div class="row">
			<div class="col-sm-7">
				<h3>Silahkan Isi Biodata</h3><br>
				<form role="form" action="insert_pengunjung.php" method="post">
                    
          <div class="form-group">
						<label>Nama Siswa </label>
						<input type="text" name="nama_siswa" class="form-control" required>
					</div>
                    
          <div class="form-group">
						<label>NIS</label>
						<input type="text" name="nis" class="form-control" required>
					</div>

         <div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat_siswa" class="form-control" required>
					</div>

        <div class="form-group">
						<label>Jenis Kelamin : </label><br>
						<input type="radio" name="jenis_kelamin" value=laki-laki> Laki - Laki <br>
                        <input type="radio" name="jenis_kelamin" value=perempuan> Perempuan  <br>
                    </div>

        
        <div class="form-group">
            <table border = "5">
						<label>Kelas / unit : </label><br>
                        <tr>
                        <th>
						<input type="radio" name="kelas" value=pgtk> PGTK 
                        </th>
                        <th>
                        <input type="radio" name="kelas" value=1sd> 1 SD <br>
                        <input type="radio" name="kelas" value=2sd> 2 SD <br>
                        <input type="radio" name="kelas" value=3sd> 3 SD <br>
                        <input type="radio" name="kelas" value=4sd> 4 SD <br>
                        <input type="radio" name="kelas" value=5sd> 5 SD <br>
                        <input type="radio" name="kelas" value=6sd> 6 SD <br>
                        </th>
                        <th>
                        <input type="radio" name="kelas" value=7smp> 7 SMP <br>
                        <input type="radio" name="kelas" value=8smp> 8 SMP <br>
                        <input type="radio" name="kelas" value=9smp> 9 SMP <br>
                        </th>
                        <th>
                        <input type="radio" name="kelas" value=10sma> 10 SMA <br>
                        <input type="radio" name="kelas" value=11sma> 11 SMA <br>
                        <input type="radio" name="kelas" value=12sma> 12 SMA <br>
                        </th>
                        <th>
                        <input type="radio" name="kelas" value=10smk> 10 SMK <br>
                        <input type="radio" name="kelas" value=11smk> 11 SMK <br>
                        <input type="radio" name="kelas" value=12smk> 12 SMK <br>
                        </th>   
                        <th>
                        <input type="radio" name="kelas" value=guru_pgtk> Guru PGTK <br>
                        <input type="radio" name="kelas" value=guru_sd> Guru SD <br>
                        <input type="radio" name="kelas" value=guru_smp> Guru SMP <br>
                        <input type="radio" name="kelas" value=guru_sma> Guru SMA <br>
                        <input type="radio" name="kelas" value=guru_smk> Guru SMK <br>
                        <input type="radio" name="kelas" value=karyawan> Karyawan <br>
                        </th>  
                    </tr>
            </table>      
        </div>

        <div class="form-group">
        <tr>
                <td>Tanggal</td><br>
                <td><input type="date" name="tanggal" maxlength="100" required /></td>
            </tr>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>					
				</form>
            </div>
            <div class="col-sm-4">          
            
            <?php 
            echo date('l, d-m-Y'); 
            ?>
            <br><br><img src="../../Gambar/tes.png" class="rounded" alt="Cinque Terre" width="380" height="270"> 
            </div>
        </div>
			</div>
      </div>
      

      <?php
	//tambahkan dbconnect
	include('../../koneksi.php');

	//query
	$query = "SELECT * FROM pengunjung";

	$result = mysqli_query($conn , $query);

?>
 <div class="container-fluid">
	
				<br><center><h3>Data Pengunjung</h3></center><br>
				<table class="table table-striped table-hover dtabel">
				<thead>
						<tr>
							<th>No</th>
                            <th>Nama Siswa</th>
							<th>NIS</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
                            <th>Kelas</th>
							<th>Tanggal Datang</th>
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
                            <td><?php echo $row['nama_siswa']; ?></td>
							<td><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['alamat_siswa']; ?></td>
							<td><?php echo $row['jenis_kelamin']; ?></td>
							<td><?php echo $row['kelas']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
							<td>
								<a href="editform_pengunjung.php?id=<?php echo $row['nis'];?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
								
								<a href="delete.php?id=<?php echo $row['nis']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</a>
								
							</td>
						</tr>


						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
				<div class="float-right">
						Cetak data : <a href="buku_pdf.php" target="_blank" class="btn btn-primary" ><i class="fa fa-file-pdf-o"></i> Print </a>
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

</html> 