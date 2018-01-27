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
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambahkan desposisi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Surat</label>
                                                <input type="date" class="form-control border-input" name="tanggal">
                                            </div>
                                            <div class="form-group">
                                                <label>Asal Surat</label>
                                                <input type="text" class="form-control border-input" name="asal">
                                            </div>
                                            <div class="form-group">
                                                <label>No Surat</label>
                                                <input type="text" class="form-control border-input" name="nosur">
                                            </div>
                                            <div class="form-group">
                                                <label>Perihal</label>
                                                <input type="text" class="form-control border-input" name="perihal">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Diterima</label>
                                                <input type="date" class="form-control border-input" name="diterima">
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Agenda</label>
                                                <input type="text" class="form-control border-input" name="kode">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pemberi Desposisi</label>
                                                <input type="text" class="form-control border-input" name="pemberi">
                                            </div>
                                            <div class="form-group">
                                                <label>Untuk</label>
                                                <select name="untuk" class="form-control">
                                                    <option value="Diketahui">Diketahui</option>
                                                    <option value="Dipersiapkan konsep">Dipersiapkan konsep</option>
                                                    <option value="Dijawab/direspon">Dijawab/direspon</option>
                                                    <option value="Dilaksanakan">Dilaksanakan</option>
                                                    <option value="Dibicarakan/didiskusikan">Dibicarakan/didiskusikan</option>
                                                    <option value="Diarsipkan">Diarsipkan</option>
                                                    <option value="Dilaporkan">Dilaporkan</option>
                                                    <option value="Dikonsultasikan">Dikonsultasikan</option>
                                                    <option value="Diusulkan">Diusulkan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Isi Desposisi</label>
                                                <input type="textarea" class="form-control border-input" name="isi">
                                            </div>
                                            <div class="form-group">
                                            <label>Diteruskan ke: </label>
                                            <select name="terusan" class="form-control">
                                                <option value="KTU">KTU</option>
                                                <option value="WK1">WK1</option>
                                                <option value="WK2">WK2</option>
                                                <option value="WK3">WK3</option>
                                                <option value="KUP">KUP</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            </div>
                                            <div class="form-control">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah</button>
                                            </div>
                                        </div>  
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
