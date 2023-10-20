<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Laporan Data Anggota</title>  
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
<?php 
                //tambahkan dbconnect
	include('../../koneksi.php');
// menampilkan DB buku
$ambilAnggota = $conn->query("SELECT * FROM tb_anggota ORDER BY id_anggota DESC") or die(mysqli_error($conn));
header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Anggota.xls");
?>
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
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Unit</th>
                        <th>Tanggal Dafar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecahAnggota = $ambilAnggota->fetch_assoc()) {
                    $jk = ($pecahAnggota['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecahAnggota['nama_anggota']; ?></td>
                        <td><?= $pecahAnggota['tempat_lahir']; ?></td>
                        <td><?= $pecahAnggota['tgl_lahir']; ?></td>
                        <td><?= $jk; ?></td>
                        <td><?= $pecahAnggota['kelas']; ?></td>
                        <td><?= $pecahAnggota['tgl_daftar']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
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

        </div>
    </div>
</div>