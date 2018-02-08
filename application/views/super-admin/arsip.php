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
                                <h4 class="title"> Tempat kearsipan </h4>
                                <p class="category"> bisa dilihat dari perkode </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Kode Agenda</th>
                                        <th>Ketetangan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($arsip as $d): ?>
                                            
                                        <tr>
                                            <td><?php echo $d->no_agenda; ?></td>
                                            <td><?php echo $d->keterangan; ?></td>
                                            <td><a href="<?php echo base_url('index.php/Welcome/detailarsip/').$d->no_agenda; ?>" class="btn btn-danger">
                                                <i class="fa fa-eye"></i>lihat
                                            </a></td>
                                        </tr>
                                        <?php endforeach ?>
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
