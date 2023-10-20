<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('../../koneksi.php');

//query hapus
$query = "DELETE FROM tb_anggota WHERE id_anggota = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:anggota.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>