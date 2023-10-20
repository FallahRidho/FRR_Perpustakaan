<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('../../koneksi.php');

//query hapus
$query = "DELETE FROM buku WHERE id_bk = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:data_buku.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>