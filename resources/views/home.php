<!doctype html>
<html>
<head>
	<title>Halaman Depan Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/home.css'); ?>" type="text/css" rel="stylesheet">
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
					<li class="active"><a href="javascript:void(0)">Beranda</a></li>
					<li><a href="<?php echo url('search'); ?>">Pencarian Spesifik</a></li>
					<li><a href="javascript:void(0)">Pinjaman Saya</a></li>
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
<div id="content">
	<!--search area-->
	<div class="col-md-offset-2 col-md-8 row" style="margin-top: 2%;">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12" style="text-align: center">
					<h2>Sistem Informasi Perpustakaan</h2>
				</div>
				
				<div class="col-md-12">
					<form>
						<div class="col-md-8">
							<input type="text" placeholder="Ketikkan Judul Buku..." class="form-control" name="judul_buku">
						</div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Pencarian Instan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-offset-1 col-md-10 row">
		<h3>Terakhir Ditambahkan</h3>
		
		<div class="grid">
			
			<?php
			$bukuLatest = $viewData['buku_latest'];
			foreach ($bukuLatest as $buku){ ?>
				<div class="col-md-3 grid-latest" style="cursor: pointer;" onclick="window.location='<?php echo url('detail').'/'.$buku['buku_id']; ?>';">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="img col-md-12">
								<div><img src="<?php echo url($buku['thumb_cover_ptr']); ?>"></div>
							</div>
							<div class="meta">
								<h4><?php echo $buku['judul']; ?></h4>
								<h6><?php echo $buku['penulis']; ?></h6>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		
		</div>
		
		<div class="col-md-12" style="margin-bottom: 2%;">
			<a href="#" style="float: right;">Lihat Lebih Banyak>></a>
		</div>
	</div>
	
	<div class="col-md-offset-1 col-md-10 row">
		<h3>Download Populer</h3>
		
		<div class="grid2">
			
			<?php
			$bukuLatest = $viewData['buku_popular'];
			foreach ($bukuLatest as $buku){ ?>
				<div class="col-md-3 grid-popular" style="cursor: pointer;" onclick="window.location='<?php echo url('detail').'/'.$buku['buku_id']; ?>';">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="img col-md-12">
								<div><img src="<?php echo url($buku['thumb_cover_ptr']); ?>"></div>
							</div>
							<div class="meta">
								<h4><?php echo $buku['judul']; ?></h4>
								<h6><?php echo $buku['penulis']; ?></h6>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		
		</div>
		
		<div class="col-md-12" style="margin-bottom: 2%;">
			<a href="#" style="float: right;">Lihat Lebih Banyak>></a>
		</div>
	</div>

</div>

<div class="footer col-md-12">
	<div class="col-md-4">
		<h1>SMA Negeri 1 Salatiga</h1>
		<h5>Kemiri Street No.1 Salatiga, Central Java, Indonesia 50711</h5>
		<h5>Telp: 0298-326867</h5>
		<h5>Fax: 0298-326867</h5>
		<h5>Email: sma_1_sltg@yahoo.com</h5>
	</div>
</div>

<div class="bottom col-md-12">
	<div class="copy">
		<h5>Copyright &copy; 2016. SMA Negeri 1 Salatiga - All Rights Reserved</h5>
	</div>
	<div class="developer">
		<h5>Developed By: <a href="facebook.com/chandra1704">Raditya Chandra</a></h5>
	</div>
</div>

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/masonry.pkgd.min.js'); ?>"></script>
<script type="text/javascript">
	$.material.init();
</script>

<script type="text/javascript">
	$('.grid').masonry({
		itemSelector: '.grid-latest',
		columnWidth: '.col-md-3',
		percentPosition: true
	});
</script>

<script type="text/javascript">
	$('.grid2').masonry({
		itemSelector: '.grid-popular',
		columnWidth: '.col-md-3',
		percentPosition: true
	});
</script>
</body>
</html>