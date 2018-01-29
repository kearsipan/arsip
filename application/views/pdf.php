<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
    #a{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>

<img src="asset/img/i.jpg" height="125" width="95" alt="user">
		<h3>SMK Negeri 1 Lumajang</h3>
		<h5>Jl. Hos. Cokroaminoto 161 Lumajang 67311</h5>
		<h5>Telp. Fax. 0334 - 881866</h5>
		<h5>E_mail : smkn1lmj@smkn1lmj.sch.id</h5>
		<h5>Home page : www.smkn1lmj.sch.id</h5>
	

	<h2 align="center">DISPOSISI</h2>

	<div class="a">
		<table border="1">
			<?php foreach ($tampil as $d): ?>
			<thead>
				<tr class="normal">
				<th class="normal"><p>tanggal Surat : <?php echo $d->tgl_surat; ?>
					Asal Surat 		 : <?php echo $d->asal_surat; ?>
					<br><br>
					No. Surat 		 : <?php echo $d->no_surat; ?>
					<br><br>
					Perihal			 : <?php echo $d->perihal; ?>
					</p>
				</th>
				<th class="normal">
						Diterima Tanggal : <?php echo $d->diterima_tgl; ?>
						<br><br>
						Nomor Agenda 	 :	<?php echo $d->kode_agenda; ?>
						<br><br>
						Pemberi Desposisi:	<?php echo $d->pemberi_despos ?>
				</th>
				</tr>
				<tr class="normal">
					<th class="normal">
						<p>
							Isi Desposisi : <?php echo $d->isi_desposisi; ?>
						</p>
					</th>
					<th class="normal">
						<p>
							Untuk : <?php echo $d->untuk; ?>
							<br><br>
							Diteruskan : <?php echo $d->terusan; ?>
						</p>
					</th>
				</tr>
			</thead>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>