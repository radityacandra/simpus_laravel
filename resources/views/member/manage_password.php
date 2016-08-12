<!doctype html>
<html>
<head>
	<title>Dashboard Admin - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/member/manage_password.css'); ?>" type="text/css" rel="stylesheet">
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
				Ganti Password
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8">
						<h5>Silahkan masukkan password lama dan baru anda apabila anda ingin mengganti password. Ingat, password baru anda tidak akan diketahui oleh siapapun.</h5>
					</div>
				</div>
				
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-md-8">
							<label for="password">Password Lama</label>
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="password_new">Password Baru</label>
							<input type="password" name="password_new" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="input_email">Konfirmasi Password Baru</label>
							<input type="password" name="confirm_password" class="form-control">
						</div>
					</div>
					
					<button type="submit" class="btn btn-default">Perbarui Password</button>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">We do not guarantee your account security. See our <a href="#">privacy policy</a> for more information.</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Lupa Password
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8">
						<h5>Silahkan masukkan konfirmasi alamat email yang anda gunakan pada akun ini. Password baru akan dikirimkan melalui alamat email tersebut apabila memang cocok.</h5>
					</div>
				</div>
				
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-md-8">
							<label for="confirm_email">Alamat Email</label>
							<div class="row">
								<div class="col-md-6">
									<input type="email" class="form-control" name="confirm_email">
								</div>
								<div class="col-md-6">
									<button type="submit" class="btn btn-default">Reset Password</button>
								</div>
							</div>
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