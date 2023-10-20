<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Laporan Data pengunjung</title>  
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
<div class="container-fluid">        
            
            <?php
          //tambahkan dbconnect
          include('../../koneksi.php');
      
          //query
          $query = "SELECT * FROM pengunjung";
      
          $result = mysqli_query($conn , $query);
      
      ?>
       <div class="container-fluid">
       <table width="80%" border="0" align="center">
  <tr>
    <td width="50" align="center"><img src="../../Gambar/LOGO-CAKRA.png" width="163" height="163"></td>
    <td width="526"><h3 align="center"><strong>PERPUSTAKAAN SEKOLAH</strong></h3>
    <h3 align="center"><strong>CAKRA BUANA</strong></h3></td>
  </tr>
</table>
                      <table class="table table-striped table-hover dtabel">
                      <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Siswa</th>
                                  <th>NIS</th>
                                  <th>Alamat</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Kelas</th>
                                  <th>Tanggal Datang</th>
                                  
                              </tr>
                          </thead>
                          <tbody> 
                              
                              <?php
                                  $no = 1;  
                                  while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                              <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $row['nama_siswa']; ?></td>
                                  <td><?php echo $row['nis']; ?></td>
                                  <td><?php echo $row['alamat_siswa']; ?></td>
                                  <td><?php echo $row['jenis_kelamin']; ?></td>
                                  <td><?php echo $row['kelas']; ?></td>
                                  <td><?php echo $row['tanggal']; ?></td>
                                  
                              </tr>
      
      
                              <?php
                                  }
                                  mysqli_close($conn); 
                              ?>
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