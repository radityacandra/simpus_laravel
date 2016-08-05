<!doctype html>
<html>
<head>
	<title>Pengelolaan Buku Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/manage_book.css'); ?>" type="text/css" rel="stylesheet">
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
					<li class="active"><a href="javascript:void(0)">Pencarian Spesifik</a></li>
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

<!--sidebar-->
<div class="col-md-2 sidebar">
	<ul>
		<li>
			<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" href="<?php echo url('map_bus');
							?>"
							   aria-expanded="true" aria-controls="collapseOne">
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
							<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"
							   aria-expanded="false" aria-controls="collapseTwo">
								<i class="fa fa-book"></i> E-Book
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('list_bus/operation'); ?>"><i class="fa fa-bus"></i> Semua Bus
									Operasi</a></li>
							<li><a href="<?php echo url('list_bus/maintenance'); ?>"><i class="fa fa-bus"></i> Semua Bus
									Perbaikan</a></li>
							<li><a href="<?php echo url('daftar_bus'); ?>"><i class="fa fa-plus"></i> Registrasi Bus</a></li>
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
							<a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree"
							   aria-expanded="false" aria-controls="collapseThree">
								<i class="fa fa-object-group"></i> Kategori
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('list_halte'); ?>"><i class="fa fa-home"></i> Semua Halte</a></li>
							<li><a href="<?php echo url('daftar_halte'); ?>"><i class="fa fa-plus"></i> Tambah Halte</a></li>
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
							<a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour"
							   aria-expanded="false" aria-controls="collapseFour">
								<i class="fa fa-users"></i> Keanggotaan
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<ul class="list-group" style="color: #000000; ">
							<li><a href="<?php echo url('arrival_schedule') ?>"><i class="fa fa-list"></i> Semua Jadwal
									Kedatangan</a></li>
							<li><i class="fa fa-search"></i> Filter Jadwal Kedatangan</li>
						</ul>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>

<!--body-->
<div id="content" style="margin-top: 1%;">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Panel Tata Kelola
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<a class="btn btn-default" href="<?php echo url('detail').'/'.$viewData['id_buku']; ?>"><i class="fa fa-book"> Lihat Informasi</i></a>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default"><i class="fa fa-edit"> Kelola Informasi</i></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default"><i class="fa fa-print"> Cetak Kartu Buku</i></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default"><i class="fa fa-print"> Cetak Kartu Tempel</i></button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Riwayat Peminjaman
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-default" style="float: right;"><i class="fa fa-print"> Cetak Laporan Peminjaman</i></button>
					</div>
				</div>
				
				<div class="row">
					<form class="col-md-12 form-horizontal">
						<input type="hidden" name="submit" value="true">
						<input type="hidden" name="id_buku" value="<?php echo $viewData['id_buku']; ?>">
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
							<input type="text" name="name" placeholder="Cari Nama" class="form-control">
						</div>
					</form>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover">
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
							<?php foreach ($viewData['pinjaman_buku']['data'] as $pinjaman){; ?>
								<tr>
									<td><?php echo $pinjaman['kode_pinjam']; ?></td>
									<td><?php echo $pinjaman['detail_member_info']['name']; ?></td>
									<td><?php echo $pinjaman['created_at']; ?></td>
									<td><?php echo $pinjaman['jatuh_tempo']; ?></td>
									<td>Aktif</td>
									<td><a class="btn btn-default notif">beritahu siswa</a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						
						<div class="pagination">
							<?php echo $viewData['pinjaman_buku_2']->render(); ?>
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