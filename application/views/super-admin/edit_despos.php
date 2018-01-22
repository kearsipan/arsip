<!doctype html>
<html lang="en">
<head>
	<?php include 'css.php'; ?>

</head>
<body>

<?php include 'sidebar.php'; ?>
<?php include 'navigasi.php'; ?>
    
        <?php foreach ($editdespos as $e): ?>
    <form method="post" action="<?php echo base_url('index.php/desposisi/editdesposi'); ?>">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah desposisi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Surat</label>
                                                <input type="date" class="form-control border-input"  name="tanggal" value="<?php echo $e->tgl_surat; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Asal Surat</label>
                                                <input type="text" class="form-control border-input" name="asal" 
                                                value="<?php echo $e->asal_surat; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input type="text" class="form-control border-input" name="nosur"
                                                value="<?php echo $e->no_surat; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kode Agenda</label>
                                                <input type="text" class="form-control border-input" name="kode"
                                                value="<?php echo $e->kode_agenda; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Perihal</label>
                                                <input type="text" class="form-control border-input" name="perihal"
                                                value="<?php echo $e->perihal; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Diterima</label>
                                                <input type="date" class="form-control border-input" name="diterima"
                                                value="<?php echo $e->diterima_tgl; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pemberi Desposisi</label>
                                                <input type="text" class="form-control border-input" name="pemberi"
                                                value="<?php echo $e->pemberi_desposisi; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Terusan</label>
                                                <input type="text" class="form-control border-input" name="terusan"
                                                value="<?php echo $e->terusan; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Untuk</label>
                                                <input type="text" class="form-control border-input" name="untuk"
                                                value="<?php echo $e->untuk; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Isi Desposisi</label>
                                                <input type="textarea" class="form-control border-input" name="isi"
                                                value="<?php echo $e->isi_desposisi; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                    </div><br>
                                    <div class="text-center">
                                        <a href="<?php echo base_url('index.php/desposisi/desposisi'); ?>" class="btn btn-primary">Kembali</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            <?php endforeach ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </form>


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
