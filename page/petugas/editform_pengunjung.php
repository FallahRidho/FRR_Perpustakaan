<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data Buku</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

<?php 
$nis_siswa = $_GET['id']; 

//koneksi database
include('../../koneksi.php');

//query
$query = "SELECT * FROM pengunjung WHERE nis='$nis_siswa'";
$result = mysqli_query($conn, $query);

?>
<div class="container-fluid" style="padding-top: 100px; padding-bottom: 100px;">

	<Center><h3>Update Data Buku</h3></Center>
	<form role="form" action="edit_pengunjung.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="text" name="nama_siswa" class="form-control" value="<?php echo $row['nama_siswa']; ?>">			
		</div>

        <div class="form-group">
			<label>Nis Siswa</label>
			<input type="text" name="nis" class="form-control" value="<?php echo $row['nis']; ?>">			
		</div>

        <div class="form-group">
			<label>Alamat siswa</label>
			<input type="text" name="alamat_siswa" class="form-control" value="<?php echo $row['alamat_siswa']; ?>">			
		</div>

		<div class="form-group">
        <label>Jenis Kelamin : </label><br>
						<input type="radio" name="jenis_kelamin" value=laki-laki> Laki - Laki <br>
                        <input type="radio" name="jenis_kelamin" value=perempuan> Perempuan  <br>	
		</div>

        <div class="form-group">
        <table border = "5">
						<label>Kelas : </label><br>
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
                    </tr>
            </table>     

		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">			
		</div>

		<br>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>
		<button class="btn btn-danger btn-block"> <a href ="data_pengunjung.php">Kembali</a></button>


		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 