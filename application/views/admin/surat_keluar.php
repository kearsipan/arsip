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
                                <h4 class="title">Agenda Surat Keluar</h4> 
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>kode_Agenda</th>
                                        <th>No Surat</th>
                                        <th>Kepada</th>
                                        <th>Perihal</th>
                                        <th>Pengelola</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($suker as $k) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $k->tgl_surat; ?></td>
                                            <td><?php echo $k->kode_agenda; ?></td>
                                            <td><?php echo $k->no_surat; ?></td>
                                            <td><?php echo $k->kepada; ?></td>
                                            <td><?php echo $k->perihal; ?></td>
                                            <td><?php echo $k->pengelola; ?></td>
                                
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
