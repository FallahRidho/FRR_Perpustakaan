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
<?php 
include('../../koneksi.php');
require_once 'function.php';
// menampilkan DB buku
// $ambilTransaksi = $conn->query("SELECT * FROM tb_transaksi WHERE status = 'pinjam'") or die(mysqli_error($conn));

$sql = $conn->query("SELECT * FROM tb_transaksi INNER JOIN buku
										ON tb_transaksi.id_buku = buku.id_bk INNER JOIN tb_anggota 
										ON tb_transaksi.id_anggota = tb_anggota.id_anggota WHERE status = 'pinjam'
										") or die(mysqli_error($conn));

?>
<!-- <pre>
	<?php var_dump($pecah); ?>
</pre> -->
<div class="container-fluid">
<table width="80%" border="0" align="center">
  <tr>
    <td width="50" align="center"><img src="../../Gambar/LOGO-CAKRA.png" width="163" height="163"></td>
    <td width="526"><h3 align="center"><strong>PERPUSTAKAAN SEKOLAH</strong></h3>
    <h3 align="center"><strong>CAKRA BUANA</strong></h3></td>
  </tr>
</table>
<br><br>
<div class="card mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-hover dtabel">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Terlambat</th>
                        <th>Status</th>
              
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecah = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecah['nis']; ?></td>
                        <td><?= $pecah['nama_anggota']; ?></td>
                        <td><?= $pecah['judul_bk']; ?></td>
                        <td><?= $pecah['tgl_pinjam']; ?></td>
                        <td><?= $pecah['tgl_kembali']; ?></td>
                        <td>
                        	<?php 
                        	$denda = 1000;
                        	$tgl_dateline = $pecah['tgl_kembali'];
                        	$tgl_kembali = date('d-m-Y');

                        	$lambat = terlambat($tgl_dateline, $tgl_kembali);
                        	$denda1 = $lambat * $denda;

                        	if($lambat > 0) { ?>
                        		<div style='color:red;'><?= $lambat ?> hari<br> (Rp. <?= number_format($denda1) ?>)</div>
                        	<?php
                        	} else {
                        		echo $lambat . "Hari";
                        	}
                        	?>
                        </td>
                        <td><?= $pecah['status']; ?></td>
                       
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
<script> window.print(); </script>

</body>
</html>