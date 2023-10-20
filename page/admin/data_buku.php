
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

            <li class="nav-item active">
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
	$query = "SELECT * FROM buku";

	$result = mysqli_query($conn , $query);

?>

  <div class="container-fluid">
		<center><h3>DATA BUKU TERSEDIA</h3></center>
		<hr>
		<div class="row">
			<div class="col-sm-7">
				<h3>Silahkan Tambah Buku</h3>
				<form role="form" action="insert_buku.php" method="post">
                    
          <div class="form-group">
						<label>ID buku</label>
						<input type="text" name="id_bk" class="form-control" required>
					</div>
                    
          <div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_bk" class="form-control" required>
					</div>

         <div class="form-group">
						<label>Pengarang Buku</label>
						<input type="text" name="pengarang_bk" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="penerbit_bk" class="form-control">
					</div>

         <div class="form-group">
						<label>Tahun Buku</label>
						<input type="text" name="tahun_bk" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Genre Buku</label>
						<input type="text" name="genre_bk" class="form-control">
					</div>
          
					<div class="form-group">
						<label>jumlah Buku</label>
						<input type="text" name="jumlah_bk" class="form-control">
					</div>
                    <br>
                  
					<button type="submit" class="btn btn-primary" onclick="return confirm('Tambah Data ?')"> Tambah Buku
                        
                    </button>	
                    				
				</form>
            </div>
            <div class="col-sm-4">          
            
            <?php 
            echo date('l, d-m-Y'); 
            ?>
            <br><br><img src="../../Gambar/buku.png" class="rounded" alt="Cinque Terre" width="304" height="236"> 
            </div>
        </div>
			</div>
      </div>

 <div class="container-fluid">
	
				<br><center><h3>Tabel Daftar Buku</h3></center><br>
				<table class="table table-striped table-hover dtabel">
				<thead>
						<tr>
							<th>No</th>
                            <th>ID Buku</th>
							<th>Judul Buku</th>
							<th>Pengarang Buku</th>
							<th>Penerbit Buku</th>
                            <th>Tahun Buku</th>
							<th>Genre Buku</th>
                            <th>Jumlah Buku</th>
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
                            <td><?php echo $row['id_bk']; ?></td>
							<td><?php echo $row['judul_bk']; ?></td>
                            <td><?php echo $row['pengarang_bk']; ?></td>
							<td><?php echo $row['penerbit_bk']; ?></td>
							<td><?php echo $row['tahun_bk']; ?></td>
                            <td><?php echo $row['genre_bk']; ?></td>
							<td><?php echo $row['jumlah_bk']; ?></td>
							<td>
								<a href="editform_buku.php?id=<?php echo $row['id_bk'];?>" class="btn btn-success" onclick="return confirm('Edit Data Buku ?')"><i class="fa fa-edit">Edit</i></a>
								
								<a href="delete.php?id=<?php echo $row['id_bk']?>" class="btn btn-danger" onclick="return confirm('Hapus Buku ?')"><i class="fa fa-trash">Delete</i></a>
								
							</td>
						</tr>


						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
				
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

</body>
</html>