<?php 

$username 	  = $_POST['username'];
$password 	  = $_POST['password'];

include 'koneksi.php';
$sql = " SELECT * FROM petugas WHERE username ='$username' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query)>0) {
	session_start();
	$data				   = mysqli_fetch_array($query);
	$_SESSION ['nama_petugas'] 	   = $data['nama_petugas'];
	$_SESSION ['username']		   = $data ['username'];
	$_SESSION ['level']		 	   = $data ['level'];
	$_SESSION ['id_petugas'] 	   = $data['id_petugas'];
	if ($data ['level']=="admin") {
		
	header("Location: admin/admin.php");
} elseif ($data ['level']=="petugas") {
	header("Location: petugas/petugas.php");
	}	
}else{
	echo "<script> alert('Maaf anda gagal login'); window.location.assign('index2.php'); </script>";
}
 ?>