<?php
require 'koneksi.php';
$id=$_GET['id_pengaduan'];

$sql=mysqli_query($koneksi,"DELETE FROM pengaduan where id_pengaduan='$id' ");

if($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='masyarakat.php?url=lihat-pengaduan';
        </script>
        <?php
}
?>