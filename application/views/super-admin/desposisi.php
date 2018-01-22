<!doctype html>
<html lang="en">
<head>
	<?php include 'css.php'; ?>

</head>
<body>

    <?php include 'sidebar.php'; ?>

    <?php include 'navigasi.php'; ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DISPOSISI
                                    <a href="<?php echo base_url('index.php/desposisi/input_despos'); ?>" class="btn btn-warning">Tambah</a>
                                </h4>
                              
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Tanggal Surat</th>
                                    	<th>Asal Surat</th>
                                    	<th>No Surat</th>
                                    	<th>Kode Agenda</th>
                                        <th>Perihal</th>
                                        <th>Tanggal Diterima</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($desposisi as $d) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d->tgl_surat; ?></td>
                                            <td><?php echo $d->asal_surat; ?></td>
                                            <td><?php echo $d->no_surat; ?></td>
                                            <td><?php echo $d->kode_agenda; ?></td>
                                            <td><?php echo $d->perihal; ?></td>
                                            <td><?php echo $d->diterima_tgl; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/'); ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url('index.php/desposisi/editdespos').$d->id_despos; ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('index.php/desposisi/deldesposisi').$d->id_despos; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                             <?php } ?>
                                         </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>


    </div>
</div>


</body>

  <?php include 'js.php'; ?>


</html>
