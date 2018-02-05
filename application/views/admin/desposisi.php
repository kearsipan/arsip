<!doctype html>
<html lang="en">
<head>
    <?php include 'css.php'; ?>
    <script src="<?php echo base_url();?>assets/js2/jquery-2.1.1.min.js"></script>

</head>
<body>
<!-- Modal -->
<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
    <?php include 'navigasi.php'; ?>
    <div class="container-fluid">
        <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Tanggal Terima</th>
                                        <th>kode_Agenda</th>
                                        <th>Pengirim</th>
                                        <th>Isi Desposisi</th>
                                        <th>Diteruskan</th>
                                        <th>Untuk</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($ms as $u) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->tgl_surat; ?></td>
                                            <td><?php echo $u->tgl_terima; ?></td>
                                            <td><?php echo $u->kode_agenda; ?></td>
                                            <td><?php echo $u->dari; ?></td>
                                            <td><?php echo $u->isi_desposisi; ?></td>
                                            <td><?php echo $u->di_teruskan; ?></td>
                                            <td><?php echo $u->untuk ?></td>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo base_url('index.php/Welcome/proses_arsip/').$u->id_masuk; ?>">Arsip</a>
                                                <a href="<?php echo base_url('index.php/Welcome/detail/').$u->id_masuk; ?>" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>Detail</a>

                                                <a href="<?php echo base_url('index.php/Welcome/deldespos/').$u->id_masuk; ?>" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i></a>
                                                
                                            </td>

                                             <?php } ?>
                                         </tr>
                                    </tbody>
                                </table>                        

    </div>
    </div>
    </div>
</body>

  <?php include 'js.php'; ?>

</html>