<!doctype html>
<html>
<head>
  <title>Login Sistem Informasi Perpustakaan</title>
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
  <link href="<?php echo url('css/login.css'); ?>" type="text/css" rel="stylesheet">
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
          <li><a href="javascript:void(0)">Active</a></li>
          <li><a href="javascript:void(0)">Link</a></li>
          <li class="dropdown">
            <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdown header</li>
              <li><a href="javascript:void(0)">Separated link</a></li>
              <li><a href="javascript:void(0)">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="javascript:void(0)">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!--body-->
<div id="content">
  <div class="panel panel-default col-md-8 col-md-offset-2" style="padding: 0; margin-top: 10%;">
    <div class="panel-body" style="padding: 0;">
      <div class="col-md-6" style="margin-top: 50px; text-align: center; ">
        <img src="<?php echo url('img/ic-book.png'); ?>" style="width: 200px; display: block; margin: 0 auto" align="middle">
        <h3>Great books help you understand, and they help you feel understood.</h3>
      </div>
      <div id="login" class="col-md-6" style="background-color: #2b669a">
        <h1>Login</h1>

        <form>
          <label class="control-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Email">

          <label for="inputPassword" class="control-label">Password</label>
          <input type="password" class="form-control" id="inputPassword" placeholder="Password">

          <div class="form-group">
            <button type="submit" class="btn btn-primary col-md-12">Login</button>
          </div>
        </form>
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