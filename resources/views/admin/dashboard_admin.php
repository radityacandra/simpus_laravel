<!doctype html>
<html>
<head>
  <title>Dashboard Admin - Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/dashboard_admin.css'); ?>" type="text/css" rel="stylesheet">
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
    <li class="active">
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
        <li><a href="<?php echo url('admin/pinjaman/tambah'); ?>"><i class="fa fa-plus"></i> Buat Pinjaman Baru</a></li>
      </ul>
    </li>
  </ul>
</div>

<!--body-->
<div id="content">
  <!--search result table-->
  <div class="col-md-10">
    <h1>Selamat Datang, Raditya Chandra Buana!</h1>
    <div class="row">
      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default" style="cursor: pointer;" onclick="window.location='<?php echo url('tambah_buku'); ?>';">
          <div class="panel-body">
            <div class="col-md-12">
              <img src="<?php echo url('img/ic-addbook.png'); ?>" class="col-md-12">
            </div>
            <h3 style="text-align: center">Tambah Data Buku</h3>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default" style="cursor: pointer;" onclick="window.location='<?php echo url('member/add'); ?>';">
          <div class="panel-body">
            <div class="col-md-12">
              <img src="<?php echo url('img/ic-adduser.png'); ?>" class="col-md-12">
            </div>
            <h3 style="text-align: center">Tambah Data Anggota</h3>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default" style="cursor: pointer;" onclick="window.location='<?php echo url('kategori'); ?>';">
          <div class="panel-body">
            <div class="col-md-12">
              <img src="<?php echo url('img/ic-category.png'); ?>" class="col-md-12">
            </div>
            <h3 style="text-align: center">Data Semua Kategori</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default">
          <div class="panel-heading">Paling Banyak Dibaca</div>
          <div class="panel-body">
            <table class="table table-hover">
              <tbody>

              <?php foreach ($viewData['buku_popular'] as $buku) {?>
                <tr>
                  <td><?php echo $buku['judul']; ?></td>
                  <td><?php echo $buku['view']; ?></td>
                </tr>
              <?php }?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default">
          <div class="panel-heading">Siswa Yang Terakhir Login</div>
          <div class="panel-body">
            <table class="table table-hover">

              <?php foreach ($viewData['recent_login'] as $user) {?>
                <tr>
                  <td><?php echo $user['name']; ?></td>
                  <td><?php echo $user['last_login']; ?></td>
                </tr>
              <?php }?>

            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="margin-top: 1%;">
        <div class="panel panel-default">
          <div class="panel-heading">Kategori Dengan Buku Paling Banyak</div>
          <div class="panel-body">
            <table class="table table-hover">

              <?php foreach ($viewData['buku_kategori'] as $kategori) {?>
                <tr>
                  <td><?php echo $kategori['kategori']; ?></td>
                  <td><?php echo $kategori['total'] . " Buku"; ?></td>
                </tr>
              <?php }?>

            </table>
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
  $('.nav').navgoco();
</script>

</body>
</html>