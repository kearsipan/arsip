<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('asset/img/apple-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('asset/img/favicon.png'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('asset/css/animate.min.css'); ?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('asset/css/paper-dashboard.css'); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('asset/css/demo.css'); ?>" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('asset/css/themify-icons.css'); ?>" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/masuk/'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>AGENDA SURAT MASUK</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>DISPOSISI</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/keluar/'); ?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>AGENDA SURAT KELUAR</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/arsip/'); ?>">
                        <i class="ti-map"></i>
                        <p>ARSIP</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/no_agenda'); ?>">
                        <i class="ti-bell"></i>
                        <p>NOMOR AGENDA</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/no_wilayah'); ?>">
                        <i class="ti-export"></i>
                        <p>NOMOR WILAYAH</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Tanggal</th>
                                    	<th>Kode</th>
                                    	<th>No Surat</th>
                                    	<th>Dari</th>
                                        <th>Perihal</th>
                                        <th>Pengelola</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($masuk as $u) {
                                         ?>
                                         <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->no_urut; ?></td>
                                            <td><?php echo $u->tgl_surat; ?></td>
                                            <td><?php echo $u->kode_agenda; ?></td>
                                            <td><?php echo $u->dari; ?></td>
                                            <td><?php echo $u->perihal; ?></td>
                                            <td><?php echo $u->pengelola; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/Welcome/edit_masuk/'.$u->id); ?>"><i class=""></i></a>
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

   <!--   Core JS Files   -->
    <script src="<?php echo base_url('asset/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('asset/js/bootstrap-checkbox-radio.js'); ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('asset/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('asset/js/bootstrap-notify.js'); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('asset/js/paper-dashboard.js'); ?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('asset/js/demo.js'); ?>"></script>


</html>
