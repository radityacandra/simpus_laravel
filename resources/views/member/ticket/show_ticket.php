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
		<div class="panel panel-default" style="margin-top: 1%;">
			<div class="panel-heading" style="background-color: #009688; color: #FFFFFF;">
				<strong>Tiket Pertanyaan</strong> Ke Guru
			</div>
			
			<div class="panel-body">
				Ditemukan <?php echo sizeof($viewData['listTicket']); ?> tiket percakapan
				<table class="table table-striped table-hover vertical-align">
					<thead>
					<tr class="bg-info">
						<th>Ticket ID</th>
						<th>Tanggal Dibuat</th>
						<th>Subjek</th>
						<th>Status Percakapan</th>
						<th>Status Respon</th>
						<th>Action</th>
					</tr>
					</thead>
					
					<tbody>
					
					<?php foreach ($viewData['listTicket'] as $message){ ?>
						<tr>
							<td style="vertical-align: middle">#<?php echo $message->ticket_id; ?></td>
							<td style="vertical-align: middle"><?php echo $message->created_at; ?></td>
							<td style="vertical-align: middle"><a href="<?php echo url('member/ticket').'/'.$message->ticket_id; ?>"><?php echo $message->subject; ?></a></td>
							<td style="vertical-align: middle"><?php echo $message->status; ?></td>
							<td style="vertical-align: middle"><?php echo $message->response; ?></td>
							<td style="vertical-align: middle"><a href="<?php echo url('member/ticket').'/'.$message->ticket_id; ?>" class="btn btn-default">Lihat</a></td>
						</tr>
					<?php } ?>
					
					</tbody>
				</table>
				
				<div class="pagination">
					<?php echo $viewData['listTicket']->render(); ?>
				</div>
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