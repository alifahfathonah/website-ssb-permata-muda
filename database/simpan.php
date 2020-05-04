<?php
include '../koneksi.php';
$nama  = $_POST['nama']; 
$sim = $_POST['sim']; 
$alamat  = $_POST['alamat']; 
$hp = $_POST['hp']; 
$email = $_POST['email'];
$anak = $_POST['anak'];
$tanggal = $_POST['tanggal'];


$query = "insert into registerr SET nama_ortu='$nama',no_sim='$sim',alamat='$alamat',no_hp='$hp',email='$email',nama_anak='$anak',tanggal_lahir='$tanggal', berkas='belum'";
$berhasil = mysqli_query($connect,$query) or die('gagal menyimpan data');


if ($query) {
	header('location:trims.php');
}else{
	echo "data gagal"; 
}
?>
