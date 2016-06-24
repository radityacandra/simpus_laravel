<!doctype html>
<html>
<head>
  <title>Halaman Depan Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/pdf_view.css'); ?>" type="text/css" rel="stylesheet">
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
          <li><a href="javascript:void(0)">Beranda</a></li>
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

<!--body-->
<div id="content">
  <!--search area-->
  <div class="col-md-offset-1 col-md-10 row" style="margin-top: 2%;">
    <div class="panel panel-default">
      <div class="panel-heading" style="text-align: center; background-color: #009688; color: #FFFFFF;">Disclaimer</div>
      <div class="panel-body" style="height: 100px; overflow-y: auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lacus pharetra, hendrerit dui et, consectetur nisl. Sed id vulputate est, vel interdum ligula. Maecenas vestibulum diam sit amet dui blandit, quis pellentesque nunc venenatis. Sed molestie erat sed posuere imperdiet. Maecenas vel lacinia lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sollicitudin magna eget ullamcorper fringilla.</p>
        <p>Cras sollicitudin tempor tortor, a eleifend odio malesuada a. Donec eu odio nec ipsum tempor hendrerit. Ut vel diam tincidunt, feugiat dui eget, facilisis massa. Donec quis mattis elit. Ut dapibus ipsum non velit scelerisque, vel efficitur velit sagittis. Vestibulum accumsan sem eget justo elementum viverra. Duis eu urna pretium, finibus massa a, blandit sapien. Nulla pretium elit nec diam sodales, a elementum purus interdum. Nam dictum nisi et velit convallis fermentum. Integer aliquam vulputate quam volutpat tempor. Mauris erat orci, dictum a tincidunt id, volutpat nec velit. Fusce porttitor quis sapien a porttitor. Sed sodales tortor in odio convallis viverra. Aliquam malesuada condimentum efficitur. In et aliquam felis.</p>
      </div>
    </div>
  </div>

  <div class="col-md-offset-1 col-md-10 row">
    <div id="container-pdf" style="height: 600px;"></div>
  </div>
</div>

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/pdfobject.js'); ?>"></script>
<script type="text/javascript">
  $.material.init();
</script>
<script type="text/javascript">
  PDFObject.embed("<?php echo url('pdf/EE_FORM_Juni_2016.pdf'); ?>", "#container-pdf");
</script>
</body>
</html>