<!doctype html>
<html>
<head>
	<title>Dashboard Admin - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/member/profile_setting.css'); ?>" type="text/css" rel="stylesheet">
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
	<div class="col-md-3">
		<div class="panel panel-default" style="margin-bottom: 0;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				<strong>Personal</strong> Settings
			</div>
			<div class="panel-body" style="padding:0;">
				<div class="row" style="margin: 0;">
					<div class="sidebar">
						<ul>
							<a href="<?php echo url('member/settings'); ?>"><li>Profil</li></a>
							<a href="<?php echo url('member/settings/password'); ?>"><li>Pengaturan Password</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				<strong>Informasi Profil</strong> Publik
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-md-12">
							<label for="profile_picture">Foto Profil</label>
						</div>
						
						<img src="<?php echo url('img/thumbnail-placeholder.png'); ?>" class="col-md-2 col-xs-12">
						
						<div class="col-md-6">
							<a class="btn btn-default">Upload foto baru</a>
							<input type="file" name="profile_picture" id="profile_picture" multiple="">
							<label class="control-label" style="text-align: left;">You can also drag and drop a picture from your computer.</label>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="input_name">Nama</label>
							<input type="text" name="name" class="form-control" value="Raditya Chandra Buana">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="input_email">Alamat Email</label>
							<input type="text" name="email" class="form-control" value="radityacandra@gmail.com">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="address">Alamat Rumah</label>
							<textarea class="form-control" name="address" rows="3">Jl KH. Isom No. 05 RT 05 RW 05 Bancaan Tengah, Salatiga</textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="no_telp">Nomor Telepon</label>
							<input type="text" name="no_telp" class="form-control" value="radityacandra@gmail.com">
						</div>
					</div>
					
					<button type="submit" class="btn btn-default">Perbarui Profil</button>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">We store your personal data in the Indonesian. See our <a href="#">privacy policy</a> for more information.</label>
						</div>
					</div>
				</form>
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