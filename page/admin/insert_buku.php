<?php

include('../../koneksi.php');

$id = $_POST['id_bk'];
$judul = $_POST['judul_bk'];
$pengarang = $_POST['pengarang_bk'];
$penerbit = $_POST['penerbit_bk'];
$tahun = $_POST['tahun_bk'];
$genre = $_POST['genre_bk'];
$jumlah = $_POST['jumlah_bk'];

//query

$query =  "INSERT INTO buku (id_bk , judul_bk , pengarang_bk , penerbit_bk , tahun_bk , genre_bk , jumlah_bk) 
VALUES('$id' , '$judul' , '$pengarang' , '$penerbit' , '$tahun' , '$genre' , '$jumlah')";

if (mysqli_query($conn , $query)) {
	
	# code redicet setelah insert ke index
	header("location:data_buku.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>