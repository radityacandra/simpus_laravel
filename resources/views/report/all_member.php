<!doctype html>
<html>
<head>
	<title>Laporan Semua Data Member Perpustakaan</title>
	<link rel="stylesheet" href="<?php echo url('css/report/header.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo url('css/report/content-list-member.css'); ?>" type="text/css">
</head>

<body>
<div class="header">
	<img src="<?php echo url('img/logo_sma.jpg'); ?>" class="logo">
	<div class="instance">
		<h5>PEMERINTAH KOTA SALATIGA</h5>
		<h5>DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA</h5>
		<h4>SEKOLAH MENENGAH NEGERI ATAS 1 SALATIGA</h4>
		<h5>Jalan Kartini Nomor 01 Telp. (0298)327095/Fax. (0298)327096</h5>
		<h6>Website: sman1salatiga.sch.id; Email: sman1salatiga@gmail.com</h6>
	</div>
	
	<div class="separate-line"></div>
	<div class="separate-line-2"></div>
</div>

<?php for($page = 0; $page<sizeof($viewData['list_member']); $page++){
	if ($page==0){ ?>
		<div class="content">
			<h3>LAPORAN DATA ANGGOTA PERPUSTAKAAN</h3>
			<h5>Dibuat: <?php echo $viewData['current_date']; ?></h5>
			<h5>Total anggota: <?php echo $viewData['total_member']; ?> Orang</h5>
			<table style="page-break-after: always;" class="table">
				<tr>
					<th>NIM Siswa</th>
					<th>Nama Siswa</th>
					<th>No. HP</th>
					<th>Email</th>
					<th>Terakhir Login</th>
				</tr>
				
				<?php foreach ($viewData['list_member'][$page] as $member){ ?>
					<tr>
						<td style="vertical-align: middle"><?php echo $member['nim']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['name']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['nomor_hp']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['email']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['last_login']; ?></td>
					</tr>
				<?php } ?>
				
			</table>
		</div>
	<?php	} else { if(isset($viewData['list_member'][$page+1])){ ?>
		<div class="content-page-break">
			<table class="table-page-break" style="page-break-after: always;">
				<tr>
					<th>NIM Siswa</th>
					<th>Nama Siswa</th>
					<th>No. HP</th>
					<th>Email</th>
					<th>Terakhir Login</th>
				</tr>
				
				<?php foreach ($viewData['list_member'][$page] as $member){ ?>
					<tr>
						<td style="vertical-align: middle"><?php echo $member['nim']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['name']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['nomor_hp']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['email']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['last_login']; ?></td>
					</tr>
				<?php } ?>
			
			</table>
		</div>
	<?php	} else { ?>
		<div class="content-page-break">
			<table class="table-page-break">
				<tr>
					<th>NIM Siswa</th>
					<th>Nama Siswa</th>
					<th>No. HP</th>
					<th>Email</th>
					<th>Terakhir Login</th>
				</tr>
				
				<?php foreach ($viewData['list_member'][$page] as $member){ ?>
					<tr>
						<td style="vertical-align: middle"><?php echo $member['nim']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['name']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['nomor_hp']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['email']; ?></td>
						<td style="vertical-align: middle"><?php echo $member['last_login']; ?></td>
					</tr>
				<?php } ?>
			
			</table>
		</div>
	<?php	}
	}
} ?>

</body>
</html>