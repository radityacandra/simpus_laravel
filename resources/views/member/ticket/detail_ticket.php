<!doctype html>
<html>
<head>
	<title>Dashboard Member - Sistem Informasi Perpustakaan</title>
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/bootstrap-material-design.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/ripples.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo url('css/member/dashboard_member.css'); ?>" type="text/css" rel="stylesheet">
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

<!--body-->
<div id="content" style="margin-top: 1%; ">
	<div class="col-md-10 col-md-offset-1">
		<?php foreach ($viewData['listMessageContainer'] as $message){
			if ($message['sender_profile']['role'] == 'member'){ ?>
				<div class="panel panel-default" style="margin-top: 1%;">
					<div class="panel-heading" style="background-color: #2AABD2; color: #FFFFFF; padding-bottom: 2%;">
						<img src="<?php echo url('img/thumbnail-placeholder.png'); ?>" class="col-md-1 col-xs-1" style="display: block; margin: 0;">
						<strong><?php echo $message['sender_profile']['name']; ?></strong>
						<strong style="float: right;"><?php echo $message['created_at']; ?></strong><br>
						<strong><?php echo $message['sender_profile']['role']; ?></strong>
					</div>
					
					<div class="panel-body">
						<?php echo $message['body']; ?>
						<br><br><br><br>
					</div>
				</div>
			<?php	} else { ?>
				<div class="panel panel-default" style="margin-top: 1%;">
					<div class="panel-heading" style="background-color: #009688; color: #FFFFFF; padding-bottom: 4%;">
						<img src="<?php echo url('img/thumbnail-placeholder.png'); ?>" class="col-md-1 col-xs-1" style="display: block; margin: 0; float: right;">
						<strong style="float: right;"><?php echo $message['sender_profile']['name']; ?></strong>
						<strong style="float: left;"><?php echo $message['created_at']; ?></strong><br>
						<strong style="float:right;"><?php echo $message['sender_profile']['role']; ?></strong>
					</div>
					
					<div class="panel-body" style="text-align: right">
						<?php echo $message['body']; ?>
						<br><br><br><br>
					</div>
				</div>
			<?php	}
		}
		?>
		
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" style="margin-top: 0">
					<div class="form-group">
						<div class="col-md-10 col-xs-8">
							<textarea class="form-control" rows="3" placeholder="Tulis pesan baru..."></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2 col-xs-4">
							<button type="submit" class="btn btn-primary col-md-12 col-xs-12" style="height: 60px;">Kirim</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> <!-- content -->

<script type="text/javascript" src="<?php echo url('js/jquery-1.12.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/material.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/ripples.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/jquery.wallform.js')?>"></script>
<script type="text/javascript">
	$.material.init();
</script>

</body>
</html>