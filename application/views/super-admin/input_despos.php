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


        <?php foreach ($editmas as $u ): ?>
<div class="content">
<div class="container-fluid">
    <div class="row-md-12">
    <form method="post" action="<?php echo base_url('index.php/Welcome/editmasuk/').$u->id_masuk; ?>">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Surat Masuk</h4>
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
                                                <label>Dari</label>
                                                <input type="text" class="form-control border-input" name="dari" value="<?php echo $u->dari; ?>">
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
        </form>


    <form method="post" action="<?php echo base_url('index.php/Welcome/add_despos'); ?>">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambahkan desposisi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Asal Surat</label>
                                                <input type="text" class="form-control border-input" name="asal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Diterima</label>
                                                <input type="date" class="form-control border-input" name="diterima">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pemberi Desposisi</label>
                                                <input type="text" class="form-control border-input" name="pemberi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Terusan</label>
                                                <input type="text" class="form-control border-input" name="terusan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Untuk</label>
                                                <input type="text" class="form-control border-input" name="untuk">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Isi Desposisi</label>
                                                <input type="textarea" class="form-control border-input" name="isi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                    </div><br>
                                    <div class="text-center">
                                        <a href="<?php echo base_url('index.php/Welcome/desposisi'); ?>" class="btn btn-primary">Kembali</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
        </form>
</div>
</div>
</div>
    </div>
</div>
</div>

</body>

    <?php include 'js.php'; ?>
</html>
