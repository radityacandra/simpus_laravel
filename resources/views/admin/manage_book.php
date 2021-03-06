<!doctype html>
<html>
<head>
	<title>Pengelolaan Buku - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/manage_book.css'); ?>" type="text/css" rel="stylesheet">
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
					<li><a href="javascript:void(0)">Pinjaman Saya</a></li>
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
				<li class="active"><a href="<?php echo url('semua_buku'); ?>"><i class="fa fa-book"></i> Kelola Buku</a></li>
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
				<li><a href="<?php echo url('admin/message/new') ?>"><i class="fa fa-plus"></i> Buat Pesan Baru</a></li>
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
<div id="content" style="margin-top: 1%;">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Panel Tata Kelola
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<a class="btn btn-default" href="<?php echo url('detail') . '/' . $viewData['id_buku']; ?>"><i class="fa fa-book"> Lihat Informasi</i></a>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default"><i class="fa fa-edit"> Kelola Informasi</i></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default" type="button" onclick="kartuBuku(<?php echo $viewData['id_buku'] ?>)"><i class="fa fa-print"> Cetak Kartu Buku</i></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-default" type="button" onclick="kartuTempel(<?php echo $viewData['id_buku'] ?>)"><i class="fa fa-print"> Cetak Kartu Tempel</i></button>
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
							<?php foreach ($viewData['pinjaman_buku']['data'] as $pinjaman) {;?>
								<tr>
									<td><?php echo $pinjaman['kode_pinjam']; ?></td>
									<td><?php echo $pinjaman['detail_member_info']['name']; ?></td>
									<td><?php echo $pinjaman['created_at']; ?></td>
									<td><?php echo $pinjaman['jatuh_tempo']; ?></td>
									<td>Aktif</td>
									<td><a class="btn btn-default notif">beritahu siswa</a></td>
								</tr>
							<?php }?>
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
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.cookie.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.navgoco.min.js') ?>"></script>

<script type="text/javascript">
	$.material.init();
</script>

<script type="text/javascript">
	function kartuTempel(idBuku) {
		window.open("<?php echo url('admin/report/idbuku') ?>/"+idBuku, "_blank");
		return false;
	}
</script>

<script type="text/javascript">
	function kartuBuku(idBuku) {
		window.open("<?php echo url('admin/report/kartubuku') ?>/"+idBuku, "_blank");
		return false;
	}
</script>

<script type="text/javascript">
	$('.nav').navgoco();
</script>

</body>
</html>