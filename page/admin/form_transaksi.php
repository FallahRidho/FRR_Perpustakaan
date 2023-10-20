<?php
if ($_POST['Submit'] == "Submit") {
    $id_bk1        =$_POST['id_bk1'];
    $no_transaksi  =$_POST['no_transaksi'];
    $nama_siswa    =$_POST['nama_siswa'];
    $kelas_siswa   =$_POST['kelas_siswa'];
    $tanggal       =$_POST['tanggal'];
    $jumlah        =$_POST['jumlah'];
    
    include "../../koneksi.php";    
    $selSto =mysqli_query($conn, "SELECT * FROM buku WHERE id_bk='$id_bk1'");
    $sto    =mysqli_fetch_array($selSto);
    $stok   =$sto['jumlah_bk'];
    //menghitung sisa stok
    $sisa   =$stok-$jumlah;
    
    if ($stok < $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
            document.location='transaksi.php';
        </script>
        <?php
    }
    //proses    
    else{
        $insert =mysqli_query($conn, "INSERT INTO peminjaman (id_bk1, no_transaksi, nama_siswa, kelas_siswa, tanggal, jumlah) 
        VALUES ('$id_bk1', '$no_transaksi', '$nama_siswa', '$kelas_siswa', '$tanggal', '$jumlah')");
            if($insert){
                //update stok
                $upstok= mysqli_query($conn, "UPDATE buku SET jumlah_bk='$sisa' WHERE id_bk='$id_bk1'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi pengeluaran barang berhasil ...');
                    document.location='transaksi.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>