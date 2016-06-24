<!doctype html>
<html>
<head>
  <title>Pencarian Spesifik Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/upload_book.css'); ?>" type="text/css" rel="stylesheet">
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
          <li class="active"><a href="javascript:void(0)">Pencarian Spesifik</a></li>
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
  <!--search result table-->
  <div class="col-md-10  col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body" style="margin-top: 1%;">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="formaddbook">
          <fieldset>
            <legend><h1>Tambah Data Buku</h1></legend>
            <div class="form-group">
              <label class="col-md-2">Nama Buku</label>
              <div class="col-md-8">
                <input type="text" name="judul_buku" id="judul_buku" class="form-control col-md-10">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Penulis Buku</label>
              <div class="col-md-8">
                <input type="text" name="penulis_buku" id="penulis_buku" class="form-control col-md-10">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Penerbit Buku</label>
              <div class="col-md-8">
                <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control col-md-10">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Tahun Terbit</label>
              <div class="col-md-8">
                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control col-md-10">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Gambar Cover</label>
              <div id="preview" style='display:none' class="col-md-4"></div>
              <div class="col-md-4" id="imageloadbutton">
                <input type="text" readonly="" name="img_cover[]" placeholder="Pilih Gambar Cover.." class="form-control col-md-10">
                <input id="thumbimg" type="file" id="inputImgCover" name="img_cover">
              </div>
              <div id='imageloadstatus' style='display:none'><img src="<?php echo url('img/loader.gif')?>" alt="Uploading...."/></div>
            </div>

            <div class="form-group">
              <label class="col-md-2">File PDF</label>
              <div class="col-md-4" id="fileloadbutton">
                <input type="text" readonly="" name="file_pdf[]" placeholder="Pilih PDF ebook.." class="form-control col-md-10">
                <input id="filePdf" type="file" id="inputFile" name="file_pdf">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-2">Kategori Buku</label>
                <div class="col-md-5">
                  <select id="kategori_buku" class="form-control" name="kategori_buku">
                    <option>Matematika</option>
                    <option>Bahasa Indonesia</option>
                    <option>Bahasa Inggris</option>
                  </select>
                </div>
              </div>
            </div>

            <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" id="token">
          </fieldset>
        </form>
        <div class="form-group" style="margin: 0 2%;">
          <div class="col-md-12">
            <button id="submitBtn" class="btn btn-default col-md-12">Tambahkan Buku</button>
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
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js')?>"></script>
<script type="text/javascript">
  $.material.init();
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#thumbimg').on('change', function () {
      var A = $('#imageloadstatus');
      var B = $('#imageloadbutton');
      var C = $('#preview');
      console.log('coba');
      $('#formaddbook').ajaxForm({
        target: '#preview',
        beforeSubmit: function () {
          A.show();
          B.hide();
        },
        success: function () {
          A.hide();
          B.hide();
          C.show();
        },
        error: function () {
          A.hide();
          B.show();
        }
      }).submit();
    });
  });
</script>

<script type="text/javascript">
  //if the button is clicked, we don't need to send the file again because they have been sent before by ajax
  $(document).ready(function () {
    $("#submitBtn").click(function () {
      $('#modal').modal('show');
      var judul_buku = document.getElementById("judul_buku").value;
      var penulis_buku = document.getElementById("penulis_buku").value;
      var penerbit_buku = document.getElementById("penerbit_buku").value;
      var tahun_terbit = document.getElementById("tahun_terbit").value;
      var kategori_buku = document.getElementById("kategori_buku").value;
      var token = document.getElementById("token").value;

      $.post("http://localhost/simperpus/tambah_buku",
          {
            judul_buku: judul_buku,
            penulis_buku: penulis_buku,
            penerbit_buku: penerbit_buku,
            tahun_terbit: tahun_terbit,
            kategori_buku: kategori_buku,
            _token: token
          }, function (data, status) {
            $('#modal').modal('toggle');
            window.location.href = 'http://www.google.com';
          });
    });
  });
</script>
</body>
</html>