<!doctype html>
<html>
<head>
  <title>Pencarian Spesifik Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/add_member.css'); ?>" type="text/css" rel="stylesheet">
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

<!--sidebar-->
<div class="col-md-2 sidebar">
  <ul>
    <li>
      <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" href="<?php echo url('map_bus');
              ?>"
                 aria-expanded="true" aria-controls="collapseOne">
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
              <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"
                 aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa fa-book"></i> E-Book
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <ul class="list-group" style="color: #000000; ">
              <li><a href="<?php echo url('list_bus/operation'); ?>"><i class="fa fa-bus"></i> Semua Bus
                  Operasi</a></li>
              <li><a href="<?php echo url('list_bus/maintenance'); ?>"><i class="fa fa-bus"></i> Semua Bus
                  Perbaikan</a></li>
              <li><a href="<?php echo url('daftar_bus'); ?>"><i class="fa fa-plus"></i> Registrasi Bus</a></li>
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
              <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree"
                 aria-expanded="false" aria-controls="collapseThree">
                <i class="fa fa-object-group"></i> Kategori
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <ul class="list-group" style="color: #000000; ">
              <li><a href="<?php echo url('list_halte'); ?>"><i class="fa fa-home"></i> Semua Halte</a></li>
              <li><a href="<?php echo url('daftar_halte'); ?>"><i class="fa fa-plus"></i> Tambah Halte</a></li>
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
              <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour"
                 aria-expanded="false" aria-controls="collapseFour">
                <i class="fa fa-users"></i> Keanggotaan
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <ul class="list-group" style="color: #000000; ">
              <li><a href="<?php echo url('arrival_schedule') ?>"><i class="fa fa-list"></i> Semua Jadwal
                  Kedatangan</a></li>
              <li><i class="fa fa-search"></i> Filter Jadwal Kedatangan</li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>

<!--body-->
<div id="content">
  <!--search result table-->
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-body" style="margin-top: 1%;">
        <form class="form-horizontal" method="post" action="http://localhost:8000/member/add" enctype="multipart/form-data" id="formaddmember">
          <fieldset>
            <legend><h1>Tambah Anggota Perpustakaan</h1></legend>
            <div class="form-group">
              <label class="col-md-2">Nama Siswa</label>
              <div class="col-md-8">
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control col-md-10">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">NIM Siswa</label>
              <div class="col-md-8">
                <input type="text" name="nim_siswa" id="nim_siswa" class="form-control col-md-10">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Alamat E-mail</label>
              <div class="col-md-8">
                <input type="text" name="alamat_email" id="alamat_email" class="form-control col-md-10">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Nomor Telepon (HP)</label>
              <div class="col-md-8">
                <input type="text" name="no_telp" id="no_telp" class="form-control col-md-10">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Gambar Profil</label>
              <div id="preview" style='display:none' class="col-md-4"></div>
              <div class="col-md-4" id="imageloadbutton">
                <input type="text" readonly="" name="img_cover[]" placeholder="Pilih Gambar Cover.." class="form-control col-md-10">
                <input id="thumbimg" type="file" id="inputImgCover" name="img_cover">
              </div>
              <div id='imageloadstatus' style='display:none'><img src="<?php echo url('img/loader.gif')?>" alt="Uploading...."/></div>
            </div>
            
            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-2">Kelas Saat Ini</label>
                <div class="col-md-4">
                  <select id="kelas_siswa" class="form-control" name="kelas_siswa">
                    <option>X-1</option>
                    <option>X-2</option>
                    <option>X-3</option>
                    <option>XI IA-1</option>
                    <option>XI IA-2</option>
                    <option>XI IA-3</option>
                    <option>XI IS-1</option>
                    <option>XII IA-1</option>
                    <option>XII IA-2</option>
                    <option>XII IA-3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <input type="text" name="kelas_baru" placeholder="Kelas Baru" id="kelas_baru" class="form-control">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Alamat Rumah</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="3" name="alamat_rumah" id="alamat_rumah"></textarea>
              </div>
            </div>
            
            <input name="_token" type="hidden" value="<?php echo $token; ?>" id="token">
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
  //upload ebook image cover handler
  $(document).ready(function () {
    $('#thumbimg').on('change', function () {
      var A = $('#imageloadstatus');
      var B = $('#imageloadbutton');
      var C = $('#preview');
      console.log('coba');
      $('#formaddmember').ajaxForm({
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
      var nama_siswa = document.getElementById("nama_siswa").value;
      var nim_siswa = document.getElementById("nim_siswa").value;
      var alamat_email = document.getElementById("alamat_email").value;
      var no_telp = document.getElementById("no_telp").value;
      var kelas_siswa = document.getElementById("kelas_siswa").value;
      var kelas_baru = document.getElementById("kelas_baru").value;
      var alamat_rumah = document.getElementById("alamat_rumah").value;
      var token = document.getElementById("token").value;
      
      $.post("http://localhost/simperpus/member/add",
          {
            nama_siswa: nama_siswa,
            nim_siswa: nim_siswa,
            alamat_email: alamat_email,
            no_telp: no_telp,
            kelas_siswa: kelas_siswa,
            kelas_baru: kelas_baru,
            alamat_rumah: alamat_rumah,
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