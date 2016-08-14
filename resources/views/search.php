<!doctype html>
<html>
<head>
  <title>Pencarian Spesifik Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/search.css'); ?>" type="text/css" rel="stylesheet">
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
				<a class="navbar-brand" href="<?php echo url('member/dashboard'); ?>">Brand</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo url('home'); ?>">Beranda</a></li>
					<li class="active"><a href="<?php echo url('search'); ?>">Pencarian Spesifik</a></li>
					<li><a href="<?php echo url('home'); ?>">Pinjaman Saya</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo url('login'); ?>">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--body-->
<div id="content">
  <!--search box-->
  <div class="col-md-3" id="search-box">
    <div class="panel panel-default">
      <div class="panel-heading" style="text-align: center; background-color: #009688; color: #FFFFFF;">Pencarian</div>
      <div class="panel-body">
        <form method="get"">
	        <input type="hidden" name="submit" value="true">
	        
          <label class="search-label">Judul Buku</label>
          <input type="text" name="judul_buku" placeholder="Ketikkan Judul..." class="form-control">

          <label class="search-label">Tahun Terbit</label>
          <input type="text" name="tahun_terbit" placeholder="Ketikkan Tahun..." class="form-control">

          <label class="search-label">Nama Pengarang</label>
          <input type="text" name="nama_pengarang" placeholder="Ketikkan Nama..." class="form-control">

          <label class="search-label">Nama Penerbit</label>
          <input type="text" name="nama_penerbit" placeholder="Ketikkan Pengarang..." class="form-control">

          <button type="submit" class="btn btn-primary col-md-12"><i class="fa fa-search" aria-hidden="true"></i> CARI</button>
        </form>
      </div>
    </div>
  </div>

  <!--search result table-->
  <div class="col-md-9" id="result-box">
    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          
          <?php
          $counter = 1;
          foreach ($viewData['result_buku'] as $buku){ ?>
	          <tr>
		          <td><?php echo $counter; ?></td>
		          <td><?php echo $buku->judul; ?></td>
		          <td><?php echo $buku->tahun_terbit; ?></td>
		          <td><?php echo $buku->penulis; ?></td>
		          <td><?php echo $buku->penerbit; ?></td>
		          <td><a class="btn btn-primary lihat" href="<?php echo url('detail/'.$buku->buku_id); ?>">Lihat</a></td>
	          </tr>
          <?php
	          $counter++;
          }
          ?>
          
          </tbody>
        </table>
	      
	      <?php echo $viewData['result_buku']->render(); ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
  $.material.init();
</script>
</body>
</html>