<?php
if (empty($_POST['nama'])) {
	header("Location:error.php");
} else {
	if (empty($_POST['email'])) {
		header("Location:error.php");
	} else {
		echo "<center>Selamat Datang!<br><br>";
		echo "<center>Nama 	: ".$_POST['nama']."<br>";
		echo "<center>Email	: ".$_POST['email']."<br><br>";
	}
	date_default_timezone_set('Asia/Jakarta');
	$date=new DateTime('now');
	echo $date->format('D, d-M-Y  H:i:s');
}
?>