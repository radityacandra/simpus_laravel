<!doctype html>
<html>
<head>
	<title>Kirim Pesan Baru - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/admin/all_message.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('js/jquery-ui-1.12.0/jquery-ui.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('js/navgoco/jquery.navgoco.css') ?>" type="text/css" rel="stylesheet">
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
				<a class="navbar-brand" href="<?php echo url('admin/home'); ?>">Brand</a>
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

<!--sidebar-->
<div class="col-md-2 sidebar">
	<ul class="nav">
		<li>
			<a href="<?php echo url('admin/home'); ?>">
				<i class="fa fa-user"></i> Halaman Admin
			</a>
		</li>
		
		<li>
			<a href="#">
				<i class="fa fa-book"></i> E-Book
			</a>
			<ul>
				<li><a href="<?php echo url('semua_buku'); ?>"><i class="fa fa-book"></i> Kelola Buku</a></li>
				<li><a href="<?php echo url('tambah_buku'); ?>"><i class="fa fa-plus"></i> Tambah Data Buku</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">
				<i class="fa fa-object-group"></i> Kategori
			</a>
			
			<ul>
				<li><a href="<?php echo url('kategori'); ?>"><i class="fa fa-object-group"></i> Kelola Kategori</a></li>
				<li><a href="<?php echo url('kategori/add'); ?>"><i class="fa fa-plus"></i> Tambah Kategori</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">
				<i class="fa fa-users"></i> Keanggotaan
			</a>
			<ul>
				<li><a href="<?php echo url('member') ?>"><i class="fa fa-users"></i> Kelola Member</a></li>
				<li><a href="<?php echo url('admin') ?>"><i class="fa fa-users"></i> Kelola Admin</a></li>
				<li><a href="<?php echo url('member/add') ?>"><i class="fa fa-plus"></i> Tambah Member</a></li>
				<li><a href="<?php echo url('member/add') ?>"><i class="fa fa-plus"></i> Tambah Admin</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">
				<i class="fa fa-comments-o"></i> Perpesanan
			</a>
			<ul>
				<li><a href="<?php echo url('admin/message') ?>"><i class="fa fa-comments-o"></i> Semua Pesan</a></li>
				<li class="active"><a href="<?php echo url('admin/message/new') ?>"><i class="fa fa-plus"></i> Buat Pesan Baru</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">
				<i class="fa fa-book"></i> Pinjaman
			</a>
			<ul>
				<li><a href="<?php echo url('admin/pinjaman'); ?>"><i class="fa fa-book"></i> Semua Pinjaman</a></li>
				<li><a href="<?php echo url('admin/pinjaman/tambah'); ?>"><i class="fa fa-plus"></i> Buat Pinjaman Baru</a></li>
			</ul>
		</li>
	</ul>
</div>

<!--body-->
<div id="content">
	<!--search result table-->
	<div class="col-md-10">
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Kirim Tiket
			</div>
			
			<div class="panel-body">
				<form method="post">
					<div class="row">
						<div class="form-group">
							<div class="col-md-3">
								<label for="name">Nama</label>
								<input type="text" name="sender_name" class="form-control" disabled value="<?php echo $viewData['user']->name; ?>">
							</div>
							<div class="col-md-3">
								<label for="email">Email</label>
								<input type="text" name="sender_email" class="form-control" disabled value="<?php echo $viewData['user']->email; ?>">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-6 ui-widget">
								<label for="destination">Kepada</label>
								<input name="destination" id="destination" class="form-control" type="text">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-8">
								<label for="subject">Judul</label>
								<input name="subject" class="form-control" type="text">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-10">
								<label for="body">Pesan</label>
								<textarea class="form-control" name="body" rows="5"></textarea>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label for="attachment">Attachment (Opsional)</label>
								<input type="text" readonly="" class="form-control" placeholder="Pilih File">
								<input type="file" name="attachment" id="attachment" multiple="">
								
								<p>Ekstensi file yang diijinkan: .gif, .png, .jpg, .doc, .zip, .rar, .gz, .jpeg, .txt, .xls, .7z, .pdf, .docx, .htm, .html, .csv, .gif, .png, .jpg, .doc, .zip, .rar, .gz, .jpeg, .txt, .xls, .7z, .pdf, .docx, .htm, .html, .csv</p>
							</div>
						</div>
					</div>
					
					<input type="hidden" name="sender_name" class="form-control" value="<?php echo $viewData['user']->name; ?>">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-6 col-md-offset-2">
								<button type="submit" class="btn btn-primary">Kirim</button>
								<button type="button" class="btn btn-default">Batal</button>
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
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/jquery-ui-1.12.0/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.cookie.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.navgoco.min.js') ?>"></script>

<script type="text/javascript">
	$.material.init();
</script>

<script type="text/javascript">
	$(function () {
		var availableName = <?php echo $viewData['dataset_name']; ?>;
		$("#destination").autocomplete({
			source: availableName
		});
	});
</script>

<script type="text/javascript">
	$('.nav').navgoco();
</script>

</body>
</html>