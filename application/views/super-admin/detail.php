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
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Diteruskan ke: </label>
                                    <div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Terusan
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">KTU</a></li>
                                            <li><a href="#">WK1</a></li>
                                            <li><a href="#">WK2</a></li>
                                            <li><a href="#">WK3</a></li>
                                            <li><a href="#">WK4</a></li>
                                            <li><a href="#">KUP</a></li>
                                            <li><a href="#">Lainnya</a></li>
                                            
                                          </ul>
                                    </div>
                                        </div>
                                    </div>
                                    </div>  
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
</form>


    
</div>
</div>
</body>
    <?php include 'js.php'; ?>
</html>
