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

    
        <?php foreach ($editsuk as $u ): ?>
    <form method="post" action="<?php echo base_url('index.php/suker/edit_keluar/').$u->id_keluar; ?>">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Agenda Surat Keluar</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Surat</label>
                                                <input type="date" class="form-control border-input"  name="tanggal" value="<?php echo $u->tgl_surat; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kode Agenda</label>
                                                <input type="text" class="form-control border-input" name="kode" value="<?php echo $u->kode_agenda; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input type="text" class="form-control border-input" name="nosur" value="<?php echo $u->no_surat; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kepada</label>
                                                <input type="text" class="form-control border-input" name="kepada" value="<?php echo $u->kepada; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Perihal</label>
                                                <input type="text" class="form-control border-input" name="perihal" value="<?php echo $u->perihal; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pengelola</label>
                                                <input type="text" class="form-control border-input" name="pengelola" value="<?php echo $u->pengelola; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit</button>
                                    </div><br>
                                    <div class="text-center">
                                        <a href="<?php echo base_url('index.php/Welcome/masuk'); ?>" class="btn btn-primary">Kembali</a>
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

    </div>
</div>
</div>


</body>

    <?php include 'js.php'; ?>
</html>
