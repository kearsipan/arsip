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
                    <a href="<?php echo base_url('index.php/Welcome/index/'); ?>">
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
                    <a href="#">
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