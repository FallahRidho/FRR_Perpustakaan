<?php

include('../../koneksi.php');

$nama_siswa = $_GET['nama_siswa'];
$nis_siswa = $_GET['nis'];
$alamat_siswa = $_GET['alamat_siswa'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$kelas = $_GET['kelas'];
$tanggal = $_GET['tanggal'];

//query

$query =  "UPDATE pengunjung SET nama_siswa='$nama_siswa' , alamat_siswa='$alamat_siswa' , 
jenis_kelamin='$jenis_kelamin' , kelas='$kelas' , tanggal='$tanggal' WHERE nis='$nis_siswa' ";


if (mysqli_query($conn ,$query)) {
	# code redicet setelah insert ke index
	header("location:data_pengunjung.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>