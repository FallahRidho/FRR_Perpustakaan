<?php 

$id = $_GET['id_bk'];

//include(dbconnect.php);
include('../../koneksi.php');

//query hapus
$query = "DELETE FROM peminjaman WHERE id_bk = '$id' ";


mysqli_close($conn);
?>