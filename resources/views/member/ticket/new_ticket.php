<!doctype html>
<html>
<head>
	<title>Tiket Baru - Sistem Informasi Perpustakaan</title>
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
						<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $viewData['user']->name; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo url('member/settings'); ?>">Profil</a></li>
							<li><a href="<?php echo url('member/settings/password'); ?>">Ubah Password</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo url('logout'); ?>">Logout</a></li>
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
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				<strong>Tiket Pertanyaan</strong> Baru
			</div>
			
			<div class="panel-body">
				<div class="col-xs-12 col-md-12">
					<form class="form-horizontal" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-4 col-xs-6">Kepada</label>
							<div class="col-md-4 col-xs-6">
								<input type="text" class="form-control" disabled value="Admin Perpustakaan">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 col-xs-6">Subjek Tiket</label>
							<div class="col-md-6 col-xs-6">
								<input type="text" class="form-control" name="subject">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 col-xs-6">Isi Tiket</label>
							<div class="col-md-6 col-xs-6">
								<textarea class="form-control" rows="5" name="content"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 col-xs-6">Lampiran</label>
							<div class="col-md-2">
								<input type="file" name="attachment" class="form-control">
								<input type="text" readonly class="form-control" placeholder="Browse">
							</div>
							<small>Input diijinkan: .pdf, .doc, .docx, .jpg, .gif, .png</small>
						</div>
						
						<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
						
						<div class="form-group">
							<div class="col-md-10">
								<div class="pull-right">
									<button type="submit" class="btn btn-primary">Kirim</button>
									<button type="button" class="btn btn-danger" style="background-color: #d9534f;">Batal</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div> <!-- content -->

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