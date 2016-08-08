<!doctype html>
<html>
<head>
  <title>Tambah Kategori Buku - Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/add_category.css'); ?>" type="text/css" rel="stylesheet">
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
							<li><a href="<?php echo url('tambah_buku'); ?>"><i class="fa fa-plus"></i> Tambah Data Buku</a></li>
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
								<i class="fa fa-book"></i> Pinjaman
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
  <div class="col-md-10" style="margin-top: 1%;">
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" method="post">
          <div class="col-md-4">
            <div class="form-group">
              <label class="col-md-4">Nama Kategori</label>
              <div class="col-md-8">
                <input type="text" name="nama_kategori" class="form-control" placeholder="ketikkan nama kategori">
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <label class="col-md-4">Buku Yang Masuk Kategori Ini (Opsional)</label>
            <div class="col-md-8">
              <select multiple="" class="form-control" name="buku_included[]">
                <option>Efektif dan Aplikatif Berbahasa Indonesia</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia2</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia3</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia4</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia5</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia6</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia7</option>
                <option>Efektif dan Aplikatif Berbahasa Indonesia8</option>
              </select>
            </div>

            <div class="col-md-offset-8 col-md-4">
              <button type="submit" class="btn btn-default col-md-12">Kirim</button>
            </div>
          </div>

          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
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