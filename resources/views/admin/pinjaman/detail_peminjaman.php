<!DOCTYPE doctype html>
<html>
    <head>
        <title>
            Detail Pinjaman Buku - Sistem Informasi Perpustakaan
        </title>
        <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
            <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" rel="stylesheet" type="text/css">
                <link href="<?php echo url('css/ripples.min.css'); ?>" rel="stylesheet" type="text/css">
                    <link href="<?php echo url('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
                        <link href="<?php echo url('css/admin/detail_pinjaman.css'); ?>" rel="stylesheet" type="text/css">
                            <link href="<?php echo url('js/navgoco/jquery.navgoco.css') ?>" rel="stylesheet" type="text/css">
                            </link>
                        </link>
                    </link>
                </link>
            </link>
        </link>
    </head>
    <body>
        <!--navbar-->
        <div class="bs-component">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <a class="navbar-brand" href="<?php echo url('admin/dashboard'); ?>">
                            Brand
                        </a>
                    </div>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo url('home'); ?>">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('search'); ?>">
                                    Pencarian Spesifik
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('home'); ?>">
                                    Pinjaman Saya
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">
                                    <?php echo $user->name ?>
                                    <b class="caret">
                                    </b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo url('member/settings'); ?>">
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo url('member/settings/password'); ?>">
                                            Ubah Password
                                        </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="<?php echo url('logout'); ?>">
                                            Logout
                                        </a>
                                    </li>
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
                        <i class="fa fa-user">
                        </i>
                        Halaman Admin
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book">
                        </i>
                        E-Book
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo url('semua_buku'); ?>">
                                <i class="fa fa-book">
                                </i>
                                Kelola Buku
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('tambah_buku'); ?>">
                                <i class="fa fa-plus">
                                </i>
                                Tambah Data Buku
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-object-group">
                        </i>
                        Kategori
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo url('kategori'); ?>">
                                <i class="fa fa-object-group">
                                </i>
                                Kelola Kategori
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('kategori/add'); ?>">
                                <i class="fa fa-plus">
                                </i>
                                Tambah Kategori
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users">
                        </i>
                        Keanggotaan
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo url('member') ?>">
                                <i class="fa fa-users">
                                </i>
                                Kelola Member
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin') ?>">
                                <i class="fa fa-users">
                                </i>
                                Kelola Admin
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('member/add') ?>">
                                <i class="fa fa-plus">
                                </i>
                                Tambah Member
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('member/add') ?>">
                                <i class="fa fa-plus">
                                </i>
                                Tambah Admin
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-comments-o">
                        </i>
                        Perpesanan
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo url('admin/message') ?>">
                                <i class="fa fa-comments-o">
                                </i>
                                Semua Pesan
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/message/new') ?>">
                                <i class="fa fa-plus">
                                </i>
                                Buat Pesan Baru
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book">
                        </i>
                        Pinjaman
                    </a>
                    <ul>
                        <li class="active">
                            <a href="<?php echo url('admin/pinjaman'); ?>">
                                <i class="fa fa-book">
                                </i>
                                Semua Pinjaman
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/pinjaman/tambah'); ?>">
                                <i class="fa fa-plus">
                                </i>
                                Buat Pinjaman Baru
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--body-->
        <div id="content">
            <!--search result table-->
            <div class="col-md-10">
                <div class="panel panel-default" style="margin-top: 1%;">
                    <div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
                        Panel Pengelolaan Pinjaman
                    </div>
                    <div class="panel-body">
                    	<?php if($pinjaman->status_approval != 'Approved') { ?>
                    	<a class="btn btn-default" href="<?php echo url('admin/pinjaman/approve/'.$pinjaman->id_peminjaman) ?>">
                            <i class="fa fa-sign-in">
                            </i>
                            Acc Pinjaman
                        </a>
                    	<?php } ?>

                    	<?php if($pinjaman->status_pinjam != 'Selesai') { ?>
                    	<a class="btn btn-default" href="<?php echo url('admin/pinjaman/selesaikan/'.$pinjaman->id_peminjaman) ?>">
                            <i class="fa fa-check-square-o">
                            </i>
                            Selesaikan Pinjaman
                        </a>
                    	<?php } ?>
                        
                        <a class="btn btn-default">
                            <i class="fa fa-print">
                            </i>
                            Print Pinjaman
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
                        Detail Pinjaman
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h4>
                                Nomor Pinjaman: #<?php echo $pinjaman->id_peminjaman ?>
                                <span class="label label-primary" style="padding: 1%; margin-right: 1%;">
                                	<?php echo $pinjaman->status_approval ?>
                                </span>

                                <?php if($pinjaman->status_approval != 'Waiting For Approval'){ ?>
                                <span class="label label-info" style="color: white; padding: 1%; margin-right: 1%;">
                                    <?php echo $pinjaman->status_pinjam ?>
                                </span>
                                <?php } ?>
                            </h4>
                        </div>
                        <div class="col-md-12">
                            <h4>
                                Masa Peminjaman
                            </h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: <?php echo $pinjaman->progress ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                Peminjaman Mulai
                            </h4>
                            <h4>
                                <?php echo $pinjaman->created_at ?>
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                Peminjaman Selesai
                            </h4>
                            <h4>
                                <?php echo $pinjaman->jatuh_tempo ?>
                            </h4>
                        </div>
                        <div class="col-md-12" style="margin-top: 1%;">
                            <h4>
                                Nama Buku: <?php echo $pinjaman->detailBookInfo->judul ?>
                            </h4>
                        </div>
                        <div class="col-md-12" style="margin-top: 1%;">
                            <h4>
                                Nama Peminjam: <?php echo $pinjaman->detailMemberInfo->name ?>
                            </h4>
                        </div>
                        <div class="col-md-12" style="margin-top: 1%;">
                            <a class="btn btn-default">
                                Beritahu Siswa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo url('js/jquery-1.12.0.min.js'); ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/material.min.js'); ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/ripples.min.js'); ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/bootstrap.min.js'); ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/jquery.wallform.js') ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/navgoco/jquery.cookie.min.js') ?>" type="text/javascript">
        </script>
        <script src="<?php echo url('js/navgoco/jquery.navgoco.min.js') ?>" type="text/javascript">
        </script>
        <script type="text/javascript">
            $.material.init();
        </script>
        <script type="text/javascript">
            $('.nav').navgoco();
        </script>
    </body>
</html>