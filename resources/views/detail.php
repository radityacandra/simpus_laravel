<!doctype html>
<html>
<head>
  <title>Pencarian Spesifik Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/detail.css'); ?>" type="text/css" rel="stylesheet">
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
          <li><a href="<?php echo url('search'); ?>">Pencarian Spesifik</a></li>
          <li><a href="<?php echo url('member/pinjaman'); ?>">Pinjaman Saya</a></li>
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
      <div class="panel-body">
        <a class="btn btn-primary col-md-12" href="<?php echo url('view_pdf/' . $buku['buku_id']); ?>"><h4><i class="fa fa-book" aria-hidden="true"></i> Lihat PDF</h4></a>
        <?php if ($buku['pinjam_langsung'] == 'Ya') {?>
          <a class="btn btn-primary col-md-12 green" href="<?php echo url('/member/pinjaman/baru/' . $buku['buku_id']) ?>"><h4><i class="fa fa-home" aria-hidden="true"></i> Pinjam</h4></a>
        <?php } else {?>
          <a class="btn btn-primary col-md-12 green" style="background-color: #26de00;" disabled><h4><i class="fa fa-home" aria-hidden="true"></i> Pinjam</h4><h6>(Tidak Tersedia)</h6></a>
        <?php }?>
        <a class="btn btn-primary col-md-12 red" href="<?php echo url('search'); ?>"><h4>Kembali ke pencarian</h4></a>
      </div>
    </div>
  </div>

  <!--search result table-->
  <div class="col-md-9" id="result-box">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1>Informasi Buku</h1>
        <div class="col-md-4">
          <img src="<?php echo url($buku['thumb_cover_ptr']); ?>" class="col-md-12">
        </div>

        <div class="col-md-8">
          <table class="col-md-12">
            <tr>
              <td class="col-md-4"><h4>Judul Buku</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4><?php echo $buku['judul']; ?></h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Abstrak</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4><?php echo $buku['abstrak']; ?></h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Nama Pengarang</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><a href="#"><h4><?php echo $buku['penulis']; ?></h4></a></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Tahun Terbit</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><a href="#"><h4><?php echo $buku['tahun_terbit']; ?></h4></a></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Nomor Panggil</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4>SK - 41234</h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Tebal Buku</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4>255 + xxiv</h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Penerbit</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><a href="#"><h4><?php echo $buku['penerbit']; ?></h4></a></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Tanggal Ditambahkan</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4>17 April 2016</h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Nama Pengunggah</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><h4>Raditya Chandra Buana</h4></td>
            </tr>

            <tr>
              <td class="col-md-4"><h4>Kategori</h4></td>
              <td class="col-md-1"><h4>=</h4></td>
              <td><a href="#"><h4>Matematika</h4></a></td>
            </tr>
          </table>
        </div>
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