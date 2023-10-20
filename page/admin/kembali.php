<?php 
include('../../koneksi.php');
$id_transaksi = $_GET['id'];
$id_judul_buku = $_GET['judul'];

$conn->query("UPDATE tb_transaksi SET status = 'kembali' WHERE id_transaksi = $id_transaksi") or die(mysqli_error($conn));

$conn->query("UPDATE buku SET jumlah_bk = (jumlah_bk+1) WHERE judul_bk = '$id_judul_buku'") or die(mysqli_error($conn));

	echo "<script>alert('Proses, kembalian buku berhasil.');window.location='transaksi.php';</script>";

?>