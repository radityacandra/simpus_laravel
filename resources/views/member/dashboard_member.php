<!doctype html>
<html>
<head>
	<title>Dashboard Admin - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/member/dashboard_member.css'); ?>" type="text/css" rel="stylesheet">
</head>

<body>
<!--navbar-->
<div class="bs-component">
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="javascript:void(0)">Brand</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo url('home'); ?>">Beranda</a></li>
					<li><a href="<?php echo url('search'); ?>">Pencarian Spesifik</a></li>
					<li><a href="<?php echo url('home'); ?>">Pinjaman Saya</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Raditya Chandra Buana<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Profil</a></li>
							<li><a href="javascript:void(0)">Ubah Password</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo url('login'); ?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--body-->
<div id="content" style="margin-top: 1%; ">
	<div class="col-md-10 col-md-offset-1">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						Informasi <strong>Akun</strong>
					</div>
					<div class="panel-body">
						<img src="<?php echo url('img/thumbnail-placeholder.png'); ?>" class="col-md-3">
						<div class="col-md-8">
							<h5>Raditya Chandra Buana</h5>
							<h5>Jl KH. Isom Bancaan Tengah Salatiga</h5>
							<h5><a href="mailto:radityacandra@gmail.com">radityacandra@gmail.com</a></h5>
							<h5>085727666352</h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						Overview
					</div>
					<div class="panel-body">
						<h5>Pinjaman: <a href="#">1 (12) - Tampilkan >></a></h5>
						<h5>Pemberitahuan Pinjaman: <a href="#">5 - Tampilkan >></a></h5>
						<h5>Tiket: <a href="#">0 (8) - Tampilkan >></a></h5>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						Tiket <label class="label">0</label>
					</div>
					<div class="panel-body">
						<div class="col-md-offset-8">
							<a class="btn btn-default"><i class="fa fa-list"></i> Lihat Semua</a>
							<a class="btn btn-default"><i class="fa fa-comment"></i> Kirim Tiket</a>
						</div>
						
						<table class="table table-striped table-hover">
							<thead class="bg-info">
							<tr>
								<th>Tanggal</th>
								<th>Tanggal Jatuh Tempo</th>
								<th>Subjek</th>
								<th>Status</th>
								<th>Update Terbaru</th>
								<th>Action</th>
							</tr>
							</thead>
							
							<tbody>
							<tr>
								<td style="vertical-align: middle">17 April 2016</td>
								<td style="vertical-align: middle">Raditya Chandra Buana</td>
								<td style="vertical-align: middle">Tidak bisa lihat PDF</td>
								<td style="vertical-align: middle">Aktif</td>
								<td style="vertical-align: middle">18 April 2016 10:53</td>
								<td style="vertical-align: middle"><a class="btn btn-default">Lihat</a></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						<strong>Peminjaman</strong> Jatuh Tempo <label class="label label-danger">0</label>
					</div>
					<div class="panel-body">
												
						<table class="table table-striped table-hover">
							<thead class="bg-info">
							<tr>
								<th>Tanggal Peminjaman</th>
								<th>Tanggal Jatuh Tempo</th>
								<th>Judul Buku</th>
								<th>Status</th>
								<th>Total Denda</th>
							</tr>
							</thead>
							
							<tbody>
							<tr>
								<td style="vertical-align: middle">17 April 2016</td>
								<td style="vertical-align: middle">24 April 2016</td>
								<td style="vertical-align: middle">Mahir Kimia Kelas XI</td>
								<td style="vertical-align: middle"><label class="label label-info">Aktif</label></td>
								<td style="vertical-align: middle">Rp 0,00</td>
							</tr>
							
							<tr>
								<td style="vertical-align: middle">17 April 2016</td>
								<td style="vertical-align: middle">24 April 2016</td>
								<td style="vertical-align: middle">Mahir Kimia Kelas XI</td>
								<td style="vertical-align: middle"><label class="label label-danger">Overdue</label></td>
								<td style="vertical-align: middle">Rp 13.000,25</td>
							</tr>
							
							<tr>
								<td style="vertical-align: middle">17 April 2016</td>
								<td style="vertical-align: middle">24 April 2016</td>
								<td style="vertical-align: middle">Mahir Kimia Kelas XI</td>
								<td style="vertical-align: middle"><label class="label label-warning">last day</label></td>
								<td style="vertical-align: middle">Rp 0,00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js')?>"></script>
<script type="text/javascript">
	$.material.init();
</script>

</body>
</html>