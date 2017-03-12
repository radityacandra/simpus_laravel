<html>
<head>
</head>

<body>
<div style="border: solid black 5px; padding-bottom: 15px; max-width: 320px">
	<div style="background: lightgray; display: block; padding: 12px 36px; max-width: 250px; max-height: 60px"><h5>Perpustakaan SMA Negeri 1 Salatiga</h5></div>
	<div style="float: left;">
		<img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate($buku->buku_id)) }} ">
	</div>
	<div>
		<p>{!! $buku->judul !!}</p>
		<p>{!! $buku->penulis !!}</p>
	</div>
</div>
</body>
</html>