<?php

include('../../koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

//query
$query =  "INSERT INTO user (id , nama , username , password , level) 
VALUES('$id' , '$nama' , '$username' , '$password' , '$level')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:data_user.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>