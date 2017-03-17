<!doctype html>
<html>
<head>
	<title>Kartu Buku Perpustakaan SMA Negeri 1 Salatiga</title>
	<link rel="stylesheet" href="<?php echo url('css/report/content-kartu-buku.css'); ?>" type="text/css">
	<style>
		.kartu  {
			border:2px solid #000;
			width:50%;
			padding:10px;
		}
		
		.header {
			width:100%;
		}
		.instance   { float: left;
			text-align: center;
			width:100%;
			display: block;
			margin-top: 1%; }
		.instance h4 { margin: 0; padding: 0;  border:0;}
		.instance h5 { margin: 0; padding: 0;  border:0;}
		.instance h6 { margin: 0; padding: 0;  border:0;}
		
		.separate-line {
			clear: both;
			position: relative;
			border:solid black 2px;
			margin-top: 10px;
		}
	</style>
</head>

<body>
<div class="kartu">
	<div class="header">
		<div class="instance">
			<h5>Kartu Buku Perpustakaan</h5>
			<h4>SMA NEGERI 1 SALATIGA</h4>
			<h5>Jalan Kartini Nomor 01 Telp. (0298)327095/Fax. (0298)327096</h5>
			<h6>Website: sman1salatiga.sch.id; Email: sman1salatiga@gmail.com</h6>
		</div>
		<div class="separate-line"></div>
	</div>
	
	<div class="content">
		<h5>Judul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $buku->judul ?></h5>
		<h5>Pengarang&nbsp;&nbsp;&nbsp;: <?php echo $buku->penulis ?></h5>
		<h5>Penerbit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $buku->penerbit ?></h5>
		
		<table class="table">
			<tr>
				<td>Tgl Pinjam</td>
				<td>Nama Peminjam</td>
				<td>Paraf Peminjam</td>
				<td>Tgl Kembali</td>
				<td>Paraf Petugas</td>
			</tr>
			
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
			<tr>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
				<td style="height: 20px;"></td>
			</tr>
		</table>
	</div>
</div>


</body>
</html>