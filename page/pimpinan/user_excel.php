<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Laporan Data Transaksi</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body> 
<style type=”text/css”>
body{
font-family: sans-serif;
}

table{
margin: 20px auto;
border-collapse: collapse;
}

table th,
table td{
border: 1px solid #3c3c3c;
padding: 3px 8px;
}

a{
background: blue;
color: #fff;
padding: 8px 10px;
text-decoration: none;
border-radius: 2px;
}

.tengah{
text-align: center;
}
</style>

<div class="container mt-3">
<center><h2>DATA BUKU YANG TERSEDIA</h2></center>
<br>
<table class="table table-bordered">
<thead>

<tr>
<th>NO</th>
<th>NAMA KARYAWAN</th>
<th>NOMOR INDUK KARYAWAN</th>
<th>POSISI</th>
</tr>
</thead>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Transaksi Peminjaman Buku.xls");

// koneksi database

include('../../koneksi.php');

// menampilkan data pegawai

$data = mysqli_query($conn,"select * from user");
while($d = mysqli_fetch_array($data)){

?>
<tbody>
<tr>

<td style='text-align: center;'><?php echo $d['id'] ?></td>
<td style='text-align: center;'><?php echo $d['nama']; ?></td>
<td style='text-align: center;'><?php echo $d['username']; ?></td>
<td style='text-align: center;'><?php echo $d['level']; ?></td>
</tr>
</tbody>
<?php

}

?>

</table>

<script> window.print(); </script>

</body>
</html>
