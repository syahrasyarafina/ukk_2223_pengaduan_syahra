<?php 

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

            case 'lihat-pengaduan';
            include 'lihat-pengaduan.php';
            break;

            case 'detail-pengaduan';
            include 'detail-pengaduan.php';
            break;

            case 'lihat-tanggapan';
            include 'lihat-tanggapan.php';
            break;

            case 'edit-pengaduan';
            include 'edit-pengaduan.php';
            break;


            case 'delete-masyarakat';
            include 'delete-masyarakat.php';
            break;


        default:
          echo "Halaman Tidak Ditemukan";
            break;
    }
}else{
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.<br><br>";
    echo "Anda Login Sebagai : <br><b> ".$_SESSION['nama'];
}