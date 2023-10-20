<?php

include('../../koneksi.php');

$id_anggota = $_POST['id_anggota'];
$no_registrasi = $_POST['no_registrasi'];
$nis_anggota = $_POST['nis_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$tgl_daftar = $_POST['tgl_daftar'];

//query

$query =  "INSERT INTO tb_anggota (id_anggota , no_registrasi , nis_anggota , nama_anggota , tempat_lahir , tgl_lahir , jk , kelas ,  tgl_daftar) 
VALUES('$id_anggota' , '$no_registrasi' , '$nis_anggota' , '$nama_anggota' , '$tempat_lahir' , '$tgl_lahir' , '$jk' , '$kelas' ,  '$tgl_daftar')";

if (mysqli_query($conn , $query)) {
	
	# code redicet setelah insert ke index
	header("location:anggota.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>