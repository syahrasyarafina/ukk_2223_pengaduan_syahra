<?php
require '../koneksi.php';
$sql=mysqli_query($koneksi, "update pengaduan set status='ditolak' where id_pengaduan='$_GET[id]'");
if($sql == true)
{
    header('location: admin.php?url=verifikasi-pengaduan');
}
?>