<?php

include('../../koneksi.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$pengarang = $_GET['pengarang_bk'];
$penerbit = $_GET['penerbit_bk'];
$tahun = $_GET['tahun_bk'];
$genre = $_GET['genre_bk'];
$jumlah = $_GET['jumlah_bk'];

//query

$query =  "UPDATE buku SET judul_bk='$judul' , pengarang_bk='$pengarang' , 
penerbit_bk='$penerbit' , tahun_bk='$tahun' , genre_bk='$genre' , jumlah_bk='$jumlah' WHERE id_bk='$id' ";


if (mysqli_query($conn ,$query)) {
	# code redicet setelah insert ke index
	header("location:laporan.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>