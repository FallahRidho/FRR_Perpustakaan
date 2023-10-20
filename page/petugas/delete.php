<?php 

$nis_siswa = $_GET['id'];

//include(dbconnect.php);
include('../../koneksi.php');

//query hapus
$query = "DELETE FROM pengunjung WHERE nis = '$nis_siswa' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:data_pengunjung.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>