<?php

include('../../koneksi.php');

$id = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


//query

$query =  "UPDATE user SET username='$username' , 
password='$password'  , level='$level' WHERE nama='$id' ";


if (mysqli_query($conn ,$query)) {
	# code redicet setelah insert ke index
	header("location:user_laporan.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>