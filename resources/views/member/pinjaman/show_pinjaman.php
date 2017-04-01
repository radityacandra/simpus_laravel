<!DOCTYPE doctype html>
<html>
    <head>
        <title>
            Dashboard Member - Sistem Informasi Perpustakaan
        </title>
        <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
            <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" rel="stylesheet" type="text/css">
                <link href="<?php echo url('css/ripples.min.css'); ?>" rel="stylesheet" type="text/css">
                    <link href="<?php echo url('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
                        <link href="<?php echo url('css/member/dashboard_member.css'); ?>" rel="stylesheet" type="text/css">
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
                        <a class="navbar-brand" href="<?php echo url('member/dashboard'); ?>">
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
                            <li class="active">
                                <a href="<?php echo url('home'); ?>">
                                    Pinjaman Saya
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">
                                    <?php echo $user->name; ?>
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
        <!--body-->
        <div id="content" style="margin-top: 1%; ">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default" style="margin-top: 1%;">
                    <div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
                        Daftar Peminjaman Buku Sedang Aktif
                    </div>
                    <div class="panel-body">
                        <?php if (sizeof($peminjaman) > 0) {
    foreach ($peminjaman as $itemPeminjaman) {
        ?>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-xs-4">
                                        <img class="col-xs-12" src="<?php echo url($itemPeminjaman->detailBookInfo->thumb_cover_ptr) ?>" style="max-height: 200px; width: auto;">
                                        </img>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4>
                                            <?php echo $itemPeminjaman->detailBookInfo->judul ?>
                                        </h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <h4>
                                                    Mulai Peminjaman
                                                </h4>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>
                                                    : <?php echo date('Y-m-d', strtotime($itemPeminjaman->created_at)) ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <h4>
                                                    Jatuh Tempo
                                                </h4>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>
                                                    : <?php echo date('Y-m-d', strtotime($itemPeminjaman->jatuh_tempo)) ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 1%">
                                            <div class="col-xs-12">
                                                <?php if ($itemPeminjaman->status_approval == 'Waiting For Approval') {?>
                                                    <span class="label label-default">Menunggu Konfirmasi</span>
                                                <?php } elseif ($itemPeminjaman->status_approval == 'Approved') {?>
                                                    <span class="label label-primary">Aktif Peminjaman</span>
                                                <?php }?>

                                                <?php if ((new \Carbon\Carbon($itemPeminjaman->jatuh_tempo))->diffInDays(new \Carbon\Carbon(), false) > 0 && $itemPeminjaman->status_approval == 'Approved') {?>
                                                    <span class="label label-danger">
                                                        Overdue +<?php echo (new \Carbon\Carbon($itemPeminjaman->jatuh_tempo))->diffInDays(new \Carbon\Carbon(), false) ?> hari
                                                    </span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} else {?>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="text-align: center;">(Tidak ada peminjaman yang sedang aktif)</h4>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
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
        <script type="text/javascript">
            $.material.init();
        </script>
    </body>
</html>