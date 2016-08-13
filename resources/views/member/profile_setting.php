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
				<a class="navbar-brand" href="<?php echo url('member/dashboard'); ?>">Brand</a>
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
				<form class="form-horizontal" id="formuser" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-md-12">
							<label for="profile_picture">Foto Profil</label>
						</div>
						
						<img id="currentimg" src="<?php echo url($viewData['user']->profile_picture_ptr); ?>" class="col-md-2 col-xs-12">
						<div id="preview" style='display:none'></div>
						<img id='imageloadstatus' style='display:none' src="<?php echo url('img/loader.gif')?>" alt="Uploading...." class="col-md-2 col-xs-12"/>
						
						<div class="col-md-6" id="imgloadbutton">
							<input type="text" readonly="" name="profile_picture[]" placeholder="Upload foto baru" class="btn btn-default">
							<input type="file" name="profile_picture" id="profile_picture">
							<label class="control-label" style="text-align: left;">You can also drag and drop a picture from your computer.</label>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="input_name">Nama</label>
							<input type="text" id="name" name="name" class="form-control" value="<?php echo $viewData['user']->name; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="input_email">Alamat Email</label>
							<input type="text" id="email" name="email" class="form-control" value="<?php echo $viewData['user']->email; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="address">Alamat Rumah</label>
							<textarea class="form-control" id="address" name="address" rows="3"><?php echo $viewData['user']->alamat_rumah; ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-8">
							<label for="no_telp">Nomor Telepon</label>
							<input type="text" id="no_telp" name="no_telp" class="form-control" value="<?php echo $viewData['user']->nomor_hp; ?>">
						</div>
					</div>
					
					<input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
					
				</form>
				
				<button id="submitBtn" class="btn btn-default">Perbarui Profil</button>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">We store your personal data in the Indonesian. See our <a href="#">privacy policy</a> for more information.</label>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</div>

<div class="modal" id="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-hidden="true"></button>
				<h4>Mengirimkan Data</h4>
			</div>
			<div class="modal-body">
				<img src="<?php echo url('img/loader.gif')?>" alt="Uploading...."/>
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
<script type="text/javascript">
	//upload ebook image cover handler
	$(document).ready(function () {
		$('#profile_picture').on('change', function () {
			var A = $('#imageloadstatus');
			var B = $('#imageloadbutton');
			var C = $('#preview');
			var D = $('#currentimg');
			console.log('coba');
			$('#formuser').ajaxForm({
				target: '#preview',
				beforeSubmit: function () {
					A.show();
					B.hide();
					D.hide();
				},
				success: function () {
					A.hide();
					B.show();
					C.show();
					D.hide();
				},
				error: function () {
					A.hide();
					B.show();
				}
			}).submit();
		});
	});
</script>

<script type="text/javascript">
	//if the button is clicked, we don't need to send the file again because they have been sent before by ajax
	$(document).ready(function () {
		$("#submitBtn").click(function () {
			$('#modal').modal('show');
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var address = document.getElementById("address").value;
			var no_telp = document.getElementById("no_telp").value;
			var _token = document.getElementById("_token").value;
			
			$.post("http://localhost/simpus_laravel/public/member/settings",
					{
						name: name,
						email: email,
						address: address,
						no_telp: no_telp,
						_token: _token
					}, function (data, status) {
						$('#modal').modal('toggle');
					});
		});
	});
</script>
</body>
</html>