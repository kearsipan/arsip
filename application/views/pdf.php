<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1{
			text-align: center;
		}
		.a{
			float: left;
			width: 50%;
		}

		.jarak{
			clear: both;
		}

		.b{
			float: left;
			width: 50%;
		}

	</style>
</head>
<body>
	<h1>DISPOSISI</h1>

	<div class="a">
		<table>
			<?php foreach ($tampil as $d): ?>
			
			<tr>
				<td>Tanggal Surat</td>
				<td> : </td>
				<td><?php echo $d->id_despos; ?></td>
			</tr>
			<tr>
				<td>Asal Surat</td>
				<td> : </td>
				<td><?php echo $d->asal_surat; ?></td>
			</tr>
			<tr>
				<td>No. Surat</td>
				<td> : </td>
				<td><?php echo $d->diterima_tgl; ?></td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td> : </td>
				<td><?php echo $d->pemberi_despos; ?></td>
			</tr>
			<tr>
				<td>Diterima Tanggal</td>
				<td> : </td>
				<td><?php echo $d->terusan; ?></td>
			</tr>
			<tr>
				<td>Nomor Agenda</td>
				<td> : </td>
				<td><?php echo $d->untuk; ?></td>
			</tr>
			<tr>
				<td>Pemberi Disposisi</td>
				<td> : </td>
				<td><?php echo $d->isi_despos; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>