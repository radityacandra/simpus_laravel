<!doctype html>
<html>
<head>
	<title>Semua Pesan Siswa - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/admin/all_message.css'); ?>" type="text/css" rel="stylesheet">
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

<!--sidebar-->
<div class="col-md-2 sidebar">
	<ul>
		<li>
			<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" href="<?php echo url('admin/home'); ?>" aria-expanded="true" aria-controls="collapseOne">
								<i class="fa fa-user"></i> Halaman Admin
							</a>
						</h4>
					</div>
				</div>
			</div>
		</li>
		
		<li>
			<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<i class="fa fa-book"></i> E-Book
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('semua_buku'); ?>"><i class="fa fa-book"></i> Kelola Buku</a></li>
							<li><a href="<?php echo url('daftar_bus'); ?>"><i class="fa fa-plus"></i> Tambah Data Buku</a></li>
						</ul>
					</div>
				</div>
			</div>
		</li>
		
		<li>
			<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<i class="fa fa-object-group"></i> Kategori
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('kategori'); ?>"><i class="fa fa-object-group"></i> Kelola Kategori</a></li>
							<li><a href="<?php echo url('kategori/add'); ?>"><i class="fa fa-plus"></i> Tambah Kategori</a></li>
						</ul>
					</div>
				</div>
			</div>
		</li>
		
		<li>
			<div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fa fa-users"></i> Keanggotaan
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('member') ?>"><i class="fa fa-users"></i> Kelola Member</a></li>
							<li><a href="<?php echo url('admin') ?>"><i class="fa fa-users"></i> Kelola Admin</a></li>
							<li><a href="<?php echo url('member/add') ?>"><i class="fa fa-plus"></i> Tambah Member</a></li>
							<li><a href="<?php echo url('member/add') ?>"><i class="fa fa-plus"></i> Tambah Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
		</li>
		
		<li>
			<div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFive">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<i class="fa fa-comments-o"></i> Perpesanan
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('admin/message') ?>"><i class="fa fa-comments-o"></i> Semua Pesan</a></li>
							<li><a href="<?php echo url('admin/message/new') ?>"><i class="fa fa-plus"></i> Buat Pesan Baru</a></li>
						</ul>
					</div>
				</div>
			</div>
		</li>
		
		<li>
			<div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSix">
						<h4 class="panel-title">
							<a role="button" href="<?php echo url('admin/pinjaman'); ?>" aria-expanded="false" aria-controls="collapseSix">
								<i class="fa fa-book"></i> Perpesanan
							</a>
						</h4>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>

<!--body-->
<div id="content">
	<!--search result table-->
	<div class="col-md-10">
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				<strong>Tiket Pertanyaan</strong> Ke/Dari Siswa
			</div>
			
			<div class="panel-body">
				Ditemukan <?php echo sizeof($viewData['list_message']); ?> tiket percakapan
				<table class="table table-striped table-hover vertical-align">
					<thead>
					<tr class="bg-info">
						<th>Ticket ID</th>
						<th>Tanggal Dibuat</th>
						<th>Subjek</th>
						<th>Status Percakapan</th>
						<th>Status Respon</th>
						<th>Action</th>
					</tr>
					</thead>
					
					<tbody>
					
					<?php foreach ($viewData['list_message'] as $message){ ?>
						<tr>
							<td>#<?php echo $message->ticket_id; ?></td>
							<td><?php echo $message->created_at; ?></td>
							<td><a href="<?php echo url('admin/message/detail').'/'.$message->ticket_id; ?>"><?php echo $message->subject; ?></a></td>
							<td><?php echo $message->status; ?></td>
							<td><?php echo $message->response; ?></td>
							<td><a href="<?php echo url('admin/message/detail').'/'.$message->ticket_id; ?>" class="btn btn-default">Lihat</a></td>
						</tr>
					<?php } ?>
					
					</tbody>
				</table>
				
				<div class="pagination">
					<?php echo $viewData['list_message']->render(); ?>
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