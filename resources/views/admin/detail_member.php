<!doctype html>
<html>
<head>
	<title>Pencarian Spesifik Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/admin/detail_member.css'); ?>" type="text/css" rel="stylesheet">
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
	</ul>
</div>

<!--body-->
<div id="content">
	<!--search result table-->
	<div class="col-md-10">
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Detail Informasi Member
			</div>
			
			<div class="panel-body">
				<img class="col-md-4" src="<?php echo url('img/thumbnail-placeholder.png'); ?>">
				
				<div class="col-md-8">
					<table class="col-md-12">
						<tr>
							<td class="col-md-4"><h4>NIM Siswa</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['nim']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Nama Lengkap</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['name']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Terakhir Login</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['last_login']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Email</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['email']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Nomor HP</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['nomor_hp']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Tanggal Terdaftar</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['created_at']->format('l F jS Y'); ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Alamat Rumah</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['alamat_rumah']; ?></h4></td>
						</tr>
						
						<tr>
							<td class="col-md-4"><h4>Kelas</h4></td>
							<td class="col-md-1"><h4>=</h4></td>
							<td><h4><?php echo $viewData['member']['kelas']; ?></h4></td>
						</tr>
					</table>
				</div>
				
				<div class="col-md-8 col-md-offset-4">
					<div class="col-md-4">
						<a class="btn btn-default" href="#"><i class="fa fa-trash"></i> Hapus Member</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-default" href="#"><i class="fa fa-comments-o"></i> Kirim Pesan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-10 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Riwayat Peminjaman Buku
			</div>
			
			<div class="panel-body">
				<div class="row">
					<form class="col-md-12 form-horizontal">
						<input type="hidden" name="submit" value="true">
						<input type="hidden" name="id_buku" value="<?php echo 1; ?>">
						<div class="col-md-2" style="float:right;">
							<button class="btn btn-default"><i class="fa fa-search"> Tampilkan</i></button>
						</div>
						
						<div class="col-md-2" style="float: right;">
							<select class="form-control" name="sort">
								<option>Tanpa Pengurutan</option>
								<option>Nama Peminjam</option>
								<option>Tanggal Pinjam</option>
							</select>
						</div>
						
						<div class="col-md-2" style="float: right; margin-right: 1%;">
							<select class="form-control" name="status_pinjam">
								<option>Semua Status</option>
								<option>Pending</option>
								<option>Aktif</option>
								<option>Selesai</option>
							</select>
						</div>
						
						<div class="col-md-3" style="float: right; margin-right: 1%;">
							<input type="text" name="name" placeholder="Cari Buku" class="form-control">
						</div>
					</form>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover vertical-align">
							<thead>
							<tr>
								<th>No. Pinjaman</th>
								<th>Nama Siswa</th>
								<th>Tanggal Peminjaman</th>
								<th>Tanggal Pengembalian</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							</thead>
							
							<tbody>
							
							
							<?php foreach ($viewData['list_pinjaman'] as $pinjaman){ ?>
								<tr>
									<td><?php echo $pinjaman['kode_pinjam']; ?></td>
									<td><?php echo $viewData['member']['name']; ?></td>
									<td><?php echo $pinjaman['created_at']->format('l F jS Y'); ?></td>
									<td><?php echo $pinjaman['jatuh_tempo']; ?></td>
									<td>Aktif</td>
									<td><a class="btn btn-default notif">beritahu siswa</a></td>
								</tr>
							<?php } ?>
							
							</tbody>
						</table>
						
						<div class="pagination">
							<?php echo $viewData['list_pinjaman']->render(); ?>
						</div>
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
				<p>test</p>
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