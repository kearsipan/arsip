<!doctype html>
<html lang="en">
<head>
	<?php include 'css.php'; ?>
    <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
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
                              
                                    <h4 class="title">Agenda Surat Masuk
                                        <a href="<?php echo base_url('index.php/Welcome/input_masuk'); ?>" class="btn btn-warning">Tambah</a>
                                    </h4>
                              
                            </div>
                            <br>
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
                                        <th>Aksi</th>
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
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/'); ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url('index.php/Welcome/editmas/').$u->id_masuk; ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('index.php/Welcome/delmasuk/').$u->id_masuk; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
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
