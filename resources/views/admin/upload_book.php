<!doctype html>
<html>
<head>
  <title>Tambah Data Buku - Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/upload_book.css'); ?>" type="text/css" rel="stylesheet">
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
	<ul class="nav">
		<li>
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
				<li class="active"><a href="<?php echo url('tambah_buku'); ?>"><i class="fa fa-plus"></i> Tambah Data Buku</a></li>
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
    <div class="panel panel-default">
      <div class="panel-body" style="margin-top: 1%;">
        <form class="form-horizontal" method="post" action="<?php echo url('tambah_buku'); ?>" enctype="multipart/form-data" id="formaddbook">
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
              <div id="filepreview" style="display: none" class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body" id="namaPdf">
                    <img src="<?php echo url('img/ic-pdf.png'); ?>" class="col-md-4">
                  </div>
                </div>
              </div>
              <div class="col-md-4" id="fileloadbutton">
                <input type="text" readonly="" name="file_pdf[]" placeholder="Pilih PDF ebook.." class="form-control col-md-10">
                <input id="filePdf" type="file" name="file_pdf">
              </div>
              <div id="fileuploadstatus" style="display: none"><img src="<?php echo url('img/loader.gif')?>" alt="Uploading...."/></div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-2">Kategori Buku</label>
                <div class="col-md-4">
                  <select id="kategori_buku" class="form-control" name="kategori_buku">
                    <option>Matematika</option>
                    <option>Bahasa Indonesia</option>
                    <option>Bahasa Inggris</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <input type="text" name="kategori_baru" placeholder="Kategori Baru" id="kategori_baru" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2">Deskripsi Buku</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="3" name="deskripsi_buku" id="deskripsi_buku"></textarea>
              </div>
            </div>

            <input name="_token" type="hidden" value="<?php echo $viewData['token']; ?>" id="token">
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
	      <img src="<?php echo url('img/loader.gif')?>" alt="Uploading...."/>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js')?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.cookie.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo url('js/navgoco/jquery.navgoco.min.js') ?>"></script>
<script type="text/javascript">
  $.material.init();
</script>
<script type="text/javascript">
  //upload ebook image cover handler
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
  $(document).ready(function () {
    $('#filePdf').on('change', function () {
      var A = $('#fileuploadstatus');
      var B = $('#fileloadbutton');
      var C = $('#filepreview');
      var file_pdf = document.getElementById("filePdf").value;
      if (file_pdf) {
        var startIndex = (file_pdf.indexOf('\\') >= 0 ? file_pdf.lastIndexOf('\\') : file_pdf.lastIndexOf('/'));
        var filename = file_pdf.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
          filename = filename.substring(1);
        }
        file_pdf = filename;
      }
      $('#formaddbook').ajaxForm({
        target: '#filepreview',
        beforeSubmit: function () {
          A.show();
          B.hide();
        },
        success: function () {
          A.hide();
          console.log("success");
          B.hide();
          C.show();
          $("#namaPdf").append('<p style="vertical-align: middle">'+file_pdf+'</p>');
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
      var deskripsi_buku = document.getElementById("deskripsi_buku").value;
      var kategori_baru = document.getElementById("kategori_baru").value;

      $.post("<?php echo url('tambah_buku'); ?>",
          {
            judul_buku: judul_buku,
            penulis_buku: penulis_buku,
            penerbit_buku: penerbit_buku,
            tahun_terbit: tahun_terbit,
            kategori_buku: kategori_buku,
            _token: token,
            deskripsi_buku: deskripsi_buku
          }, function (data, status) {
            $('#modal').modal('toggle');
            window.location.href = '<?php echo url('semua_buku'); ?>';
          });
    });
  });
</script>

<script type="text/javascript">
	$('.nav').navgoco();
</script>

</body>
</html>