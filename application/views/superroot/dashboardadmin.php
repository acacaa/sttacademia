<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>STT Academia Log In Setup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url()?>asset/css/bootstrap-cerulean.min.css" rel="stylesheet">
<link id="bs-css" href="<?php echo base_url()?>asset/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url()?>asset/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url()?>asset/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>asset/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>asset/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>asset/img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img alt="STT Academia" src="<?php echo base_url()?>assets/images/ikon.jpg" class="hidden-xs"/>
                <span>ACADEMIA</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?php $user = $this->session->userdata('email'); echo  $user ;?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a><?php echo anchor('backend/logout','Logout',array('class'=>'fa fa-sign-out pull-left'))?></a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            
            <!-- theme selector ends -->

            

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main Menu</li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-home"></i><span> Master SDM</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/pengajar','Register Pengajar')?></li>
                                <li><?php echo anchor('Admin/siswa','Approval Siswa')?></li>
                                <li><?php echo anchor('Admin/pembayaran','Pembayaran')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-eye-open"></i><span> Master Video</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/kategorivideo','Kategori Video')?></li>
                                <li><?php echo anchor('Admin/listvideo','List Video')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-edit"></i><span> Bank Soal</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/kelompoksoal','Kelompok Soal')?></li>
                                <li><?php echo anchor('Admin/listsoal','List Soal')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#" ><i class="glyphicon glyphicon-list-alt"></i><span> Master Kelas</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/kelompokkelas','Kelompok Kelas')?></li>
                                <li><?php echo anchor('Admin/ruangkelas','Ruang Kelas')?></li>
                            </ul>
                        </li>
                       <li class="accordion"><a href="#" ><i class="glyphicon glyphicon-road"></i><span> Surat Pembaca</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/listkontak','List Kontak')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#" ><i class="glyphicon glyphicon-send"></i><span> Siswa Bertanya</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Admin/listpertanyaan','List Pertanyaan')?></li>
                            </ul>
                        </li>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <a>Menu Utama Untuk Akses Super Root</a>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Guru Terdaftar</div>
            <div>507</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user green"></i>

            <div>Siswa Terdaftar</div>
            <div>228</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-camera yellow"></i>

            <div>Jumlah Video</div>
            <div>$13320</div>
            <span class="notification yellow">$34</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-home red"></i>

            <div>Kelas Aktif</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>



<!--/row-->

<div class="row">
    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Informasi Penting</h2>

               
            </div>
            <p align="center">Akun Super Root ini merupakan akun istimewa. <br/><br/>
               Akun ini berguna untuk melakukan approval
               terhadap soal-soal baru, registrasi pengajar hingga aktivasi siswa.<br/><br/>
               Selain itu juga, akun ini dapat melakukan konfirmasi pembayaran yang diterima
               oleh manajemen apabila pembayaran ini dilakukan secara online
               ( untuk pendaftaran, peningkatan status siswa dan lain sebagainya ).
            </p>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Navigasi</h2>

                
            </div>
            
                <p>
                    Beberapa Hal perlu diperhatikan untuk Master SDM:<br/>
                    - Registrasi guru.<br/>
                    - Aktivasi siswa.<br/>
                    <br/><br/>
                    Beberapa Hal perlu diperhatikan untuk Master Kelas:<br/>
                    - Kategori Kelas.<br/>
                    - Buka Kelas.<br/>
                    <br/>
                </p>
            
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Statistik Web</h2>

            </div>
            <div class="box-content">
                <ul class="dashboard-list">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                            <span class="green">92</span>
                            Siswa belum diaktivasi
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                            <span class="red">15</span>
                            Total Guru Terdaftar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-minus"></i>
                            <span class="blue">36</span>
                            Pesan Belum Dibaca
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="blue">36</span>
                            Usulan Kelas Baru
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="blue">36</span>
                            Kelompok Soal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">Thanks To Charisma Template</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Developed With Passion by: <a
                href="#">STT Academia</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo base_url()?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url()?>asset/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url()?>asset/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url()?>asset/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url()?>asset/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url()?>asset/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url()?>asset/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url()?>asset/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url()?>asset/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url()?>asset/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url()?>asset/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url()?>asset/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url()?>asset/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url()?>asset/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url()?>asset/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url()?>asset/js/charisma.js"></script>


</body>
</html>
