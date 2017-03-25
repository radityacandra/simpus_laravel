<?php if ($errors->any()) {
    // echo implode('', $errors->all('<div>:message</div>'));
}
?>
<!doctype html>
<html>
<head>
	<title>Buat Pinjaman Baru - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/admin/new_pinjaman.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('js/jquery-ui-1.12.0/jquery-ui.min.css') ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('js/select2/css/select2.min.css') ?>" type="text/css" rel="stylesheet">
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
						<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user->name; ?><b class="caret"></b></a>
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
				<li><a href="<?php echo url('admin/message/new') ?>"><i class="fa fa-plus"></i> Buat Pesan Baru</a></li>
			</ul>
		</li>

		<li>
			<a href="#">
				<i class="fa fa-book"></i> Pinjaman
			</a>
			<ul>
				<li><a href="<?php echo url('admin/pinjaman'); ?>"><i class="fa fa-book"></i> Semua Pinjaman</a></li>
				<li class="active"><a href="<?php echo url('admin/pinjaman/tambah'); ?>"><i class="fa fa-plus"></i> Buat Pinjaman Baru</a></li>
			</ul>
		</li>
	</ul>
</div>

<!--body-->
<div id="content">
	<div class="col-md-10">
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				Form Penambahan Pinjaman
			</div>

			<div class="panel-body">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h4>Nomor Pinjaman</h4>
						</div>
						<div class="col-md-8 col-xs-6">
							<h4>: #1234</h4>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h5>ID Peminjam</h5>
						</div>
						<div class="col-md-8 col-xs-6">
							<select id="peminjam" class="form-control" name="peminjam">
								<option></option>
								<?php foreach ($members as $member) {?>
									<option value="<?php echo $member->id ?>"><?php echo $member->name ?></option>
								<?php }?>
							</select>
						</div>
					</div>

					<div class="form-group" style="background: lightgray; padding-top: 10px; display: none;" id="infopeminjam">
					</div>

					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h5>ID Buku</h5>
						</div>
						<div class="col-md-8 col-xs-6">
							<select id="buku" name="buku[]" class="form-control" multiple>
								<option></option>
								<?php foreach ($bukus as $buku) {?>
									<option value="<?php echo $buku->buku_id ?>"><?php echo $buku->judul ?></option>
								<?php }?>
							</select>
						</div>
					</div>

					<div class="form-group" style="background: lightgray; padding-top: 10px; display: none;" id="infobuku">
					</div>

					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h5>Tanggal Peminjaman</h5>
						</div>
						<div class="col-md-4 col-xs-6">
							<input type="date" class="form-control" name="tgl_pinjam">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h5>Tanggal Pengembalian</h5>
						</div>
						<div class="col-md-4 col-xs-6">
							<input type="date" class="form-control" name="tgl_kembali">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4 col-xs-6">
							<h5>Pustakawan-In-Charge</h5>
						</div>
						<div class="col-md-8 col-xs-6">
							<h5>Raditya Chandra Buana</h5>
							<input type="hidden" name="pic">
						</div>
					</div>

					<?php echo csrf_field() ?>

					<div class="form-group">
						<div class="col-md-4">
							<button type="submit" class="btn btn-default col-md-12 col-xs-12">Buat Pinjaman</button>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-danger col-md-12 col-xs-12">Batal</button>
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
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap-tokenfield.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/jquery-ui-1.12.0/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/select2/js/select2.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.cookie.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.navgoco.min.js') ?>"></script>

<script type="text/javascript">
	function displayInfoPeminjam(idMember) {
		$.ajax({
			url : "<?php echo url('api/member') ?>/"+idMember,
			dataType : 'json',
			success: function (data) {
				$("#infopeminjam").css("display", "block");
				$("#infopeminjam").empty();
				content = '\
									<div class="col-md-12">\
											<h4>Informasi Peminjam</h4>\
									</div>\
									<div class="col-md-8">\
											<div class="row">\
											<div class="col-md-6">\
											<h5>Nama</h5>\
											</div>\
											<div class="col-md-6">\
											<h5>: '+data.name+'</h5>\
									</div>\
									</div>\
									<div class="row">\
											<div class="col-md-6">\
											<h5>Mulai Bergabung</h5>\
									</div>\
									<div class="col-md-6">\
											<h5>: '+data.created_at+'</h5>\
									</div>\
									</div>\
									</div>\
									<div class="col-md-4">\
											<img src="<?php echo url('/') ?>/'+data.profile_picture_ptr+'" class="col-md-12 pull-right">\
									</div>\
									';
				$("#infopeminjam").append(content);
			}
		});
	}
</script>

<script type="text/javascript">
	function displayInfoBuku(idBuku) {
		$.ajax({
			url : "<?php echo url('api/buku') ?>/"+idBuku,
			dataType : "json",
			success: function (data) {
				content = '\
							<div class="col-md-12">\
									<h4>Informasi Buku</h4>\
							</div>\
							<div class="col-md-8">\
									<div class="row">\
									<div class="col-md-6">\
									<h5>Judul</h5>\
									</div>\
									<div class="col-md-6">\
									<h5>: '+data.judul+'</h5>\
							</div>\
							</div>\
							<div class="row">\
									<div class="col-md-6">\
									<h5>Tahun Terbit</h5>\
							</div>\
							<div class="col-md-6">\
									<h5>: '+data.tahun_terbit+'</h5>\
							</div>\
							</div>\
							<div class="row">\
									<div class="col-md-6">\
									<h5>Penulis</h5>\
									</div>\
									<div class="col-md-6">\
									<h5>: '+data.penulis+'</h5>\
							</div>\
							</div>\
							<div class="row">\
									<div class="col-md-6">\
									<h5>Penerbit</h5>\
									</div>\
									<div class="col-md-6">\
									<h5>: '+data.penerbit+'</h5>\
							</div>\
							</div>\
							</div>\
							<div class="col-md-4">\
									<img src="<?php echo url('/') ?>/'+data.thumb_cover_ptr+'" class="col-md-12 pull-right">\
							</div>\
							';

				$("#infobuku").append(content);
			}
		})
	}
</script>

<script type="text/javascript">
	$.material.init();
</script>

<script type="text/javascript">
	$("#peminjam").select2({
		placeholder: "Pilih peminjam buku"
	});
</script>

<script type="text/javascript">
	$("#buku").select2({
		placeholder: "Pilih buku dipinjam"
	});
</script>

<script type="text/javascript">
	$("#peminjam").on("select2:select", function () {
		displayInfoPeminjam($("#peminjam").val());
	});
</script>

<script type="text/javascript">
	$("#buku").on("select2:select", function () {
		$("#infobuku").css("display", "block");
		$("#infobuku").empty();
		var selected = $("#buku").val();

		for (var i = 0; i < selected.length; i++){
			displayInfoBuku(selected[i]);
		}
	});
</script>

<script type="text/javascript">
	$("#buku").on("select2:unselect", function () {
		$("#infobuku").css("display", "block");
		$("#infobuku").empty();
		var selected = $("#buku").val();
		if (selected == null || selected == ""){
			$("#infobuku").css("display", "none");
		} else {
			for (var i = 0; i < selected.length; i++){
				displayInfoBuku(selected[i]);
			}
		}
	});
</script>

<script type="text/javascript">
	$('.nav').navgoco();
</script>
</body>
</html>