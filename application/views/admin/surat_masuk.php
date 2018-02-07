<!doctype html>
<html lang="en">
<head>
	<?php include 'css.php'; ?>

</head>
<body>
<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
    <?php include 'navigasi.php'; ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Agenda Surat Masuk</h4>
                              
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Tanggal</th>
                                    	<th>kode_Agenda</th>
                                    	<th>No Surat</th>
                                    	<th>Dari</th>
                                        <th>Perihal</th>
                                        <th>Pengelola</th>
        
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($masuk as $u) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->tgl_surat; ?></td>
                                            <td><?php echo $u->kode_agenda; ?></td>
                                            <td><?php echo $u->no_surat; ?></td>
                                            <td><?php echo $u->dari; ?></td>
                                            <td><?php echo $u->perihal; ?></td>
                                            <td><?php echo $u->pengelola; ?></td>

                                        <?php } ?>
                                         </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



    </div>
</div>
</div>
</div>
</body>

  <?php include 'js.php'; ?>


</html>
