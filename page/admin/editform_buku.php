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
$id = $_GET['id']; 

//koneksi database
include('../../koneksi.php');

//query
$query = "SELECT * FROM buku WHERE id_bk='$id'";
$result = mysqli_query($conn, $query);

?>
<div class="container-fluid" style="padding-top: 100px; padding-bottom: 100px;">

	<Center><h3>Update Data Buku</h3></Center>
	<form role="form" action="edit_buku.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_bk" value="<?php echo $row['id_bk']; ?>">

		<div class="form-group">
			<label>Judul Buku</label>
			<input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul_bk']; ?>">			
		</div>

        <div class="form-group">
			<label>Pengarang Buku</label>
			<input type="text" name="pengarang_bk" class="form-control" value="<?php echo $row['pengarang_bk']; ?>">			
		</div>

		<div class="form-group">
			<label>Penerbit Buku</label>
			<input type="text" name="penerbit_bk" class="form-control" value="<?php echo $row['penerbit_bk']; ?>">			
		</div>

        <div class="form-group">
			<label>Tahun Buku</label>
			<input type="text" name="tahun_bk" class="form-control" value="<?php echo $row['tahun_bk']; ?>">			
		</div>

		<div class="form-group">
			<label>Genre Buku</label>
			<input type="text" name="genre_bk" class="form-control" value="<?php echo $row['genre_bk']; ?>">			
		</div>

		<div class="form-group">
			<label>Jumlah Buku</label>
			<input type="text" name="jumlah_bk" class="form-control" value="<?php echo $row['jumlah_bk']; ?>">			
		</div>
		<br>
		<button type="submit" class="btn btn-success btn-block"  onclick="return confirm('Selesai Edit Data Buku ?')"> Update Buku</button>
		<button class="btn btn-danger btn-block"> <a href ="data_buku.php">Kembali</a></button>


		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 