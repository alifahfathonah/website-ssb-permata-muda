<!DOCTYPE html>
<html>
<head>
	<title> Permata Muda Football Academy</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h4 class="logo"><img src="../foto/sssb.png" width="200" height="150" /></h4>
		<h4 align="Center">Permata Muda Academy</h4>

<div class="menu">
	<nav>
	<ul>
		<li><a href="../index.php?page=home">Beranda</a></li>
		<li><a href="../index.php?page=tentang">Tentang</a></li>
		<li><a href="../index.php?page=register">Pendaftaran</a></li>
		<li><a href="../index.php?page=foto">Galeri</a></li>
		<li><a href="../index.php?page=Jadwal_latihan">Jadwal Latihan</a></li>
		<li><a href="../index.php?page=Staff">Staff dan pelatih</a></li>
		<li><a href="../index.php?page=data_siswa">Siswa</a></li>
	</ul>
</nav>
</div> 
<div class="badan">

<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

	switch ($page) {
		case 'home':
			include "halaman/home.php";
			break;
		case 'tentang':
			include"halaman/tentang.php";
			break;
		case 'register':
			include"halaman/register.php";
			break;
		case 'Staff':
			include"halaman/staff.php";
			break;
		case 'Jadwal_latihan';
			include"halaman/latihan.php";
			break;
		case 'foto';
			include"halaman/galeri.php";
			break;
		case 'data_siswa';
			include"halaman/siswa.php";
			break;

		default:
			echo "<Center><h3>maaf. halaman tidak ditemukan ! </h3></Center> ";
			break;
	}
}else{
}
?>
<h4 align="center"> Data berhasil disimpan </h4>
<h4 align="center"> Terima kasih untuk berpatisipasi ke SSB Permata</h4>

<div class="konten">
	<footer>

<h6> 
<p> | Telp : 62-0852 - 1976 - 2005 |</p>
 <p>| Permata Academy | </p>
 <p>| jln.Sultan Hasanuddin no 77 Kec. Tambun Selatan, Kabupaten Bekasi - Jawa Barat | <p></h6>

 	<hr>
<h3 align="center">  Permata Muda Academy </h3>
<hr>
<h6 align="center"> copyright: Muhamad Wildan Fadil  </h6>
</footer>

</div>
</div>
</div>
</div>
</body>
</html>

