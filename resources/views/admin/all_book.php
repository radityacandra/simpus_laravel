<!doctype html>
<html>
<head>
  <title>Semua Buku - Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/all_book.css'); ?>" type="text/css" rel="stylesheet">
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
<div id="content" style="margin-top: 1%;">
  <div class="col-md-10">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
		    Filter Hasil
	    </div>
      <div class="panel-body">
        <form>
          <div class="form-group col-md-6">
            <label class="col-md-3" style="padding-top:1%;">Penulis</label>
            <div class="col-md-9">
              <input type="text" name="penulis" class="form-control" placeholder="filter penulis">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="col-md-3" style="padding-top: 1%;">Judul Buku</label>
            <div class="col-md-9">
              <input type="text" name="judul" class="form-control" placeholder="filter judul">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="col-md-3" style="padding-top: 1%;">Tahun Terbit</label>
            <div class="col-md-9">
              <input type="text" name="tahun" class="form-control" placeholder="filter tahun terbit">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="col-md-3" style="padding-top: 1%;">Penerbit</label>
            <div class="col-md-9">
              <input type="text" name="penerbit" class="form-control" placeholder="filter penerbit">
            </div>
          </div>

          <div class="col-md-offset-9 col-md-3">
            <button type="submit" class="btn btn-default col-md-12">Filter Data</button>
          </div>
        </form>
      </div>
    </div>
	
	  <div class="panel panel-default">
		  <div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
			  Semua Buku Perpustakaan
		  </div>
		  <div class="panel-body">
			  <?php foreach($viewData['list_buku'] as $buku){ ?>
				  <div class="container-book col-md-12" style="border-bottom: rgba(0,0,0,0.2) solid 1px; padding-bottom: 1%; margin-top: 1%;">
					  <img src="<?php echo url($buku->thumb_cover_ptr); ?>" class="col-md-2">
					  <div class="meta-book col-md-8">
						  <h4><?php echo $buku->judul; ?></h4>
						  <h5>Tahun terbit <?php echo $buku->tahun_terbit; ?></h5>
						  <h5>Penulis <?php echo $buku->penulis; ?></h5>
						  <h5>Penerbit <?php echo $buku->penerbit; ?></h5>
					  </div>
					  <div class="action col-md-2">
						  <a href="<?php echo url('admin/kelola_buku').'/'.$buku->buku_id?>" class="btn btn-default col-md-12"><i class="fa fa-pencil-square-o"></i> Kelola</a>
						  <a href="#" class="btn btn-default col-md-12"><i class="fa fa-trash-o"></i> Hapus</a>
					  </div>
				  </div>
			  <?php } ?>
			
			  <?php echo $viewData['list_buku']->render(); ?>
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