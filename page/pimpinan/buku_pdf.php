<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Laporan Data Buku</title>  
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
<table width="80%" border="0" align="center">
  <tr>
    <td width="50" align="center"><img src="../../Gambar/LOGO-CAKRA.png" width="163" height="163"></td>
    <td width="526"><h3 align="center"><strong>PERPUSTAKAAN SEKOLAH</strong></h3>
    <h3 align="center"><strong>CAKRA BUANA</strong></h3></td>
  </tr>
</table>
<br><br>

<div class="table-responsive">
        <table class="table table-striped table-hover dtabel">
<thead>

<tr>
<th>ID Buku</th>
<th>Judul Buku</th>
<th>Pengarang Buku</th>
<th>Penerbit Buku</th>
<th>Tahun Buku</th>
<th>Genre Buku</th>
<th>Jumlah Buku</th>
</tr>
</thead>
<?php

// koneksi database

include('../../koneksi.php');

// menampilkan data pegawai

$data = mysqli_query($conn,"select * from buku");
while($d = mysqli_fetch_array($data)){

?>
<tbody>
<tr>

<td style='text-align: center;'><?php echo $d['id_bk'] ?></td>
<td style='text-align: center;'><?php echo $d['judul_bk']; ?></td>
<td style='text-align: center;'><?php echo $d['pengarang_bk']; ?></td>
<td style='text-align: center;'><?php echo $d['penerbit_bk']; ?></td>
<td style='text-align: center;'><?php echo $d['tahun_bk']; ?></td>
<td style='text-align: center;'><?php echo $d['genre_bk']; ?></td>
<td style='text-align: center;'><?php echo $d['jumlah_bk']; ?></td>

</tr>
</tbody>
<?php

}

?>

</table>

<div>
	<div style="width:200px;float:right">
		Depok,  
        <?php echo date('d - M - y'); ?>
		<br/>Pimpinan
        <br><br><br><br?
		<p>................................<br/>
	</div>
	<div style="clear:both"></div>
</div>

<script> window.print(); </script>

</body>
</html>