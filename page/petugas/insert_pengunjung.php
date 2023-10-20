<?php

include('../../koneksi.php');

$nama_siswa = $_POST['nama_siswa'];
$nis = $_POST['nis'];
$alamat_siswa = $_POST['alamat_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$tanggal = $_POST['tanggal'];

//query
$query =  "INSERT INTO pengunjung (nama_siswa , nis , alamat_siswa , jenis_kelamin , kelas , tanggal) 
VALUES('$nama_siswa' , '$nis' , '$alamat_siswa' , '$jenis_kelamin' , '$kelas' , '$tanggal')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:data_pengunjung.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>