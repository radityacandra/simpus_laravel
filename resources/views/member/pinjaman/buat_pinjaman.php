<!DOCTYPE doctype html>
<html>
    <head>
        <title>
            Peminjaman Buku - Sistem Informasi Perpustakaan
        </title>
        <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
            <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" rel="stylesheet" type="text/css">
                <link href="<?php echo url('css/ripples.min.css'); ?>" rel="stylesheet" type="text/css">
                    <link href="<?php echo url('css/pdf_view.css'); ?>" rel="stylesheet" type="text/css">
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
                            <li>
                                <a href="<?php echo url('member/pinjaman'); ?>">
                                    Pinjaman Saya
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo url('login'); ?>">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--body-->
        <div id="content">
            <!--book info area-->
            <div class="col-md-offset-1 col-md-10 row" style="margin-top: 2%">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center; background-color: #009688; color: #FFFFFF;">
                        Informasi Buku
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <img src="<?php echo url($buku->thumb_cover_ptr) ?>" style="max-height: 200px; width: auto; margin-left: 30%;">
                                </img>
                            </div>
                            <div class="col-md-8 col-xs-8">
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <h5>
                                            Judul Buku
                                        </h5>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        <h5>
                                            =
                                            <?php echo $buku->
                                            judul ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <h5>
                                            Nama Pengarang
                                        </h5>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        <h5>
                                            =
                                            <?php echo $buku->
                                            penulis ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <h5>
                                            Nomor Panggil
                                        </h5>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        <h5>
                                            = SK - 41234
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <h5>
                                            Tanggal Peminjaman
                                        </h5>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        =
                                        <?php echo date('Y-m-d') ?>
                                    </div>
                                </div>
                                <div class="row" style="color: red">
                                    <div class="col-md-4 col-xs-4">
                                        <h5>
                                            Tanggal Pengembalian
                                        </h5>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        =
                                        <?php echo date('Y-m-d', strtotime('now +7 days')) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-10 row" style="margin-top: 2%;">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center; background-color: #009688; color: #FFFFFF;">
                        <strong>
                            Peraturan Peminjaman
                        </strong>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lacus pharetra, hendrerit dui et, consectetur nisl. Sed id vulputate est, vel interdum ligula. Maecenas vestibulum diam sit amet dui blandit, quis pellentesque nunc venenatis. Sed molestie erat sed posuere imperdiet. Maecenas vel lacinia lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sollicitudin magna eget ullamcorper fringilla.
                            </li>
                            <li style="margin-top: 1%">
                                Cras sollicitudin tempor tortor, a eleifend odio malesuada a. Donec eu odio nec ipsum tempor hendrerit. Ut vel diam tincidunt, feugiat dui eget, facilisis massa. Donec quis mattis elit. Ut dapibus ipsum non velit scelerisque, vel efficitur velit sagittis. Vestibulum accumsan sem eget justo elementum viverra. Duis eu urna pretium, finibus massa a, blandit sapien. Nulla pretium elit nec diam sodales, a elementum purus interdum. Nam dictum nisi et velit convallis fermentum. Integer aliquam vulputate quam volutpat tempor. Mauris erat orci, dictum a tincidunt id, volutpat nec velit. Fusce porttitor quis sapien a porttitor. Sed sodales tortor in odio convallis viverra. Aliquam malesuada condimentum efficitur. In et aliquam felis.
                            </li>
                            <li style="margin-top: 1%">
                                Cras sollicitudin tempor tortor, a eleifend odio malesuada a. Donec eu odio nec ipsum tempor hendrerit. Ut vel diam tincidunt, feugiat dui eget, facilisis massa. Donec quis mattis elit. Ut dapibus ipsum non velit scelerisque, vel efficitur velit sagittis. Vestibulum accumsan sem eget justo elementum viverra. Duis eu urna pretium, finibus massa a, blandit sapien. Nulla pretium elit nec diam sodales, a elementum purus interdum. Nam dictum nisi et velit convallis fermentum. Integer aliquam vulputate quam volutpat tempor. Mauris erat orci, dictum a tincidunt id, volutpat nec velit. Fusce porttitor quis sapien a porttitor. Sed sodales tortor in odio convallis viverra. Aliquam malesuada condimentum efficitur. In et aliquam felis.
                            </li>
                            <li style="margin-top: 1%">
                                Cras sollicitudin tempor tortor, a eleifend odio malesuada a. Donec eu odio nec ipsum tempor hendrerit. Ut vel diam tincidunt, feugiat dui eget, facilisis massa. Donec quis mattis elit. Ut dapibus ipsum non velit scelerisque, vel efficitur velit sagittis. Vestibulum accumsan sem eget justo elementum viverra. Duis eu urna pretium, finibus massa a, blandit sapien. Nulla pretium elit nec diam sodales, a elementum purus interdum. Nam dictum nisi et velit convallis fermentum. Integer aliquam vulputate quam volutpat tempor. Mauris erat orci, dictum a tincidunt id, volutpat nec velit. Fusce porttitor quis sapien a porttitor. Sed sodales tortor in odio convallis viverra. Aliquam malesuada condimentum efficitur. In et aliquam felis.
                            </li>
                            <li style="margin-top: 1%">
                                Cras sollicitudin tempor tortor, a eleifend odio malesuada a. Donec eu odio nec ipsum tempor hendrerit. Ut vel diam tincidunt, feugiat dui eget, facilisis massa. Donec quis mattis elit. Ut dapibus ipsum non velit scelerisque, vel efficitur velit sagittis. Vestibulum accumsan sem eget justo elementum viverra. Duis eu urna pretium, finibus massa a, blandit sapien. Nulla pretium elit nec diam sodales, a elementum purus interdum. Nam dictum nisi et velit convallis fermentum. Integer aliquam vulputate quam volutpat tempor. Mauris erat orci, dictum a tincidunt id, volutpat nec velit. Fusce porttitor quis sapien a porttitor. Sed sodales tortor in odio convallis viverra. Aliquam malesuada condimentum efficitur. In et aliquam felis.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <form action="<?php echo url('member/pinjaman/baru') ?>" method="post">
                <input name="id_buku" type="hidden" value="<?php echo $idBuku ?>">
                </input>
                <input name="member" type="hidden" value="<?php echo $user->id ?>">
                </input>
                <?php echo csrf_field() ?>
            </form>
            <div class="col-md-offset-1 col-md-10 row">
                <div class="pull-right">
                    <button class="btn btn-default" id="btnpinjam">
                        Pinjam
                    </button>
                    <button class="btn btn-danger" id="btnback" style="color: #fff; background-color: #d9534f; border-color: #d43f3a;">
                        Batal
                    </button>
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
        <script src="<?php echo url('js/pdfobject.js'); ?>" type="text/javascript">
        </script>
        <script type="text/javascript">
            $.material.init();
        </script>
        <script type="text/javascript">
            $("#btnpinjam").click(function(){
            	$("form").submit();
        	});
        </script>
        <script type="text/javascript">
            $("#btnback").click(function(){
        		window.location.href = "<?php echo url('/detail/'.$idBuku) ?>"
        	});
        </script>
    </body>
</html>