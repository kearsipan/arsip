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
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Kode Agenda</h4><br>
                                <a href="<?php echo base_url('index.php/Welcome/input_agenda'); ?>" class="btn btn-primary"> Tambah </a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>NO</th>
                                        <th>Kode</th>
                                        <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                            <?php 
                                            $no = 1;

                                                foreach ($agenda as $a) {
                                             ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $a->no_agenda; ?></td>
                                            <td><?php echo $a->keterangan; ?></td>

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
</div>
</div>
</div>

</body>

   <?php include 'js.php'; ?>


</html>
