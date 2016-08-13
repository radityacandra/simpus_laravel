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
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						Informasi <strong>Akun</strong>
					</div>
					<div class="panel-body">
						<img src="<?php echo url('img/thumbnail-placeholder.png'); ?>" class="col-md-3">
						<div class="col-md-8">
							<h5><?php echo $viewData['user']->name; ?></h5>
							<h5><?php echo $viewData['user']->alamat_rumah; ?></h5>
							<h5><a href="mailto:<?php echo $viewData['user']->email; ?>"><?php echo $viewData['user']->email; ?></a></h5>
							<h5><?php echo $viewData['user']->nomor_hp; ?></h5>
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
						<h5>Pinjaman: <a href="#"><?php echo $viewData['total_pinjaman']['notif']; ?> (<?php echo $viewData['total_pinjaman']['all']; ?>) - Tampilkan >></a></h5>
						<h5>Pemberitahuan Pinjaman: <a href="#"><?php echo $viewData['total_pinjaman']['notif']; ?> - Tampilkan >></a></h5>
						<h5>Tiket: <a href="#"><?php echo $viewData['total_message']['open']; ?> (<?php echo $viewData['total_message']['all']; ?>) - Tampilkan >></a></h5>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
						Tiket <label class="label"><?php echo $viewData['total_message']['open']; ?></label>
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
								<th>Tanggal Tiket Ditutup</th>
								<th>Subjek</th>
								<th>Status</th>
								<th>Update Terbaru</th>
								<th>Action</th>
							</tr>
							</thead>
							
							<tbody>
							
							<?php if (sizeof($viewData['list_message'])>0){
								foreach ($viewData['list_message'] as $message){ ?>
									<tr>
										<td style="vertical-align: middle"><?php echo $message->created_at->format('j F Y'); ?></td>
										<td style="vertical-align: middle"><?php echo $message->created_at->addDays(3)->format('j F Y'); ?></td>
										<td style="vertical-align: middle"><?php echo $message->subject; ?></td>
										<td style="vertical-align: middle"><?php echo $message->status; ?></td>
										<td style="vertical-align: middle"><?php echo $message->updated_at->diffForHumans(); ?></td>
										<td style="vertical-align: middle"><a class="btn btn-default">Lihat</a></td>
									</tr>
							<?php	}
							} else { echo '<h5 style="text-align: center">Tidak ada tiket yang aktif saat ini</h5>'; } ?>
							
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
						<strong>Peminjaman</strong> Jatuh Tempo <label class="label label-danger"><?php echo $viewData['total_pinjaman']['notif']; ?></label>
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
							
							<?php if (sizeof($viewData['list_pinjaman'])>0){
								foreach ($viewData['list_pinjaman'] as $pinjaman){
									if ($pinjaman->keterlambatan > 0){ ?>
										<tr>
											<td style="vertical-align: middle"><?php echo $pinjaman->created_at->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->jatuh_tempo->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->detailBookInfo->judul; ?></td>
											<td style="vertical-align: middle"><label class="label label-danger">Overdue</label></td>
											<td style="vertical-align: middle">Rp <?php echo $pinjaman->keterlambatan*1500; ?></td>
										</tr>
									<?php } elseif($pinjaman->keterlambatan == -1){ ?>
										<tr>
											<td style="vertical-align: middle"><?php echo $pinjaman->created_at->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->jatuh_tempo->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->detailBookInfo->judul; ?></td>
											<td style="vertical-align: middle"><label class="label label-warning">Last day</label></td>
											<td style="vertical-align: middle">Rp 0,00</td>
										</tr>
									<?php } elseif($pinjaman->keterlambatan == -2){ ?>
										<tr>
											<td style="vertical-align: middle"><?php echo $pinjaman->created_at->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->jatuh_tempo->format('j F Y'); ?></td>
											<td style="vertical-align: middle"><?php echo $pinjaman->detailBookInfo->judul; ?></td>
											<td style="vertical-align: middle"><label class="label label-info">Aktif</label></td>
											<td style="vertical-align: middle">Rp 0,00</td>
										</tr>
									<?php	}
								}
							} ?>
							
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