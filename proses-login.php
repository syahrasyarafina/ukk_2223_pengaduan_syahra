<?php 

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = " SELECT * FROM masyarakat WHERE username ='$username' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query)>0) {
	session_start();
	$data						   = mysqli_fetch_array($query);
	$_SESSION ['nik'] 	  		   = $data ['nik'];
	$_SESSION ['username']		   = $data ['username'];
	$_SESSION ['nama']		  		 = $data ['nama'];

	header("Location: masyarakat.php");
} else {
	echo "<script> alert('Maaf anda gagal login'); window.location.assign('login-page.php'); </script>";

}
?>