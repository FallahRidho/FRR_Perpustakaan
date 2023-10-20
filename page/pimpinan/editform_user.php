<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data User</title>

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
$query = "SELECT * FROM user WHERE nama='$id'";
$result = mysqli_query($conn, $query);

?>
<div class="container-fluid" style="padding-top: 100px; padding-bottom: 100px;">

	<Center><h3>Edit Data User</h3></Center>
	<form role="form" action="edit_user.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>
		
		<div class="form-group">
			<label>Nama User</label></label>
			<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">			
		</div>

        <div class="form-group">
			<label>username</label>
			<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">			
		</div>

		<div class="form-group">
			<label>password</label>
			<input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">			
		</div>

		<div class="form-group">
						<label>Posisi : </label><br>
						<input type="radio" name="level" value=admin > Admin <br>
                        <input type="radio" name="level" value=petugas> petugas  <br>
                        <input type="radio" name="level" value=pimpinan> Pimpinan <br>
					</div>
\
		<br>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>
		<button class="btn btn-danger btn-block"> <a href ="user_laporan.php">Kembali</a></button>


		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 