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
<style>
/* The Modal (background) */
.modal {
    text-align: center;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    text-align: center;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.chosen-container {
    width: 100% !important;
    padding: 0;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
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
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-eye-open"></i><span> Master Video</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Pelajar/listvideopremium','List Video')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-edit"></i><span> Siswa Bertanya</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Pelajar/siswabertanya','Siswa Bertanya')?></li>
                            </ul>
                        </li>
                        <li class="accordion"><a href="#"><i class="glyphicon glyphicon-edit"></i><span> Bank Soal</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><?php echo anchor('Pelajar/banksoal','Pelajari Soal')?></li>
                            </ul>
                        </li>
                        
                        
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

<div id="myDetail" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Display Video</h2>
    </div>
    <div class="modal-body">

        <table class="tbl table-striped">
            <tr>
                <td>Judul Video</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="detailku_judulvideo" readonly></td>
            </tr>
            <tr>
                <td>Video</td>
                <td>:</td>
                <td><iframe id="ser" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="detailku_mapel" readonly></td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input class="form-control" type="date" name="detailku_teksvideo" readonly></td>
            </tr>
            <tr>
                <td>Tanggal Upload</td>
                <td>:</td>
                <td><input class="form-control" type="date" name="detailku_tgl" readonly></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="detailku_kelas" readonly></td>
            </tr>
            
        </table>
     </div>
  </div>

</div>

<div class="ch-container">
    <h3>List Video</h3>
    <div id="content" class="col-lg-10 col-sm-10">
               
<table id="table_pengajar" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    
    <thead><tr>
        <th>No</th>
        <th>Judul Video </th>
        <th>Mata Pelajaran </th>
        <th>Tgl </th>
        
        <th align="center">Lihat Video</th></tr>
    </thead>
    <?php 
                                $no =1;
                                foreach ($video->result() as $t)
                                {
                                    echo"<tr>"
                                        . "<td>$no</td>"
                                        . "<td>$t->judulvideo</td>"
                                        . "<td>$t->mapel</td>"
                                        . "<td>$t->tgl</td>"
                                        . "<td><button class='btn btn-round btn-success detail-btn' data='".$t->id."'>Nonton Video</button></td>"
                                        . "</tr>";
                                    $no++;
                                }
                          ?>
    
</table>

        
        <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">STT Academia Tahun <?php echo date('Y');?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Thanks Charisma</p>
    </footer>
    </div> <!-- /container -->
    
    </div>

    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>


</div>
   
<script type="text/javascript">
    
    $('#table_pengajar').on('click', '.detail-btn', function(){
        var id = $(this).attr('data');
        $.ajax({
        url: "<?php echo base_url()?>index.php/Admin/detail_video/"+id,
        type: "GET",
        success: function (ajaxData){ 
                var data = JSON.parse(ajaxData);
                console.log(data[0]['url']);
                $('input[name="detailku_judulvideo"]').val(data[0]['judulvideo']);
                $('#ser').attr('src',data[0]['url']);
                $('input[name="detailku_mapel"]').val(data[0]['mapel']);
                $('input[name="detailku_teksvideo"]').val(data[0]['teksvideo']);
                $('input[name="detailku_tgl"]').val(data[0]['tgl']);
                $('input[name="detailku_kelas"]').val(data[0]['kelas']);
                
                var modals = document.getElementById('myDetail');
                modals.style.display = "block";
                
            }
        });
    })
       
</script>

<!--register form pop up-->
<script>
// Get the modal
var modal2 = document.getElementById('myDetail');

// Get the button that opens the modal

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

span2.onclick = function() {
    modal2.style.display = "none";
}

</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
   <script src="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script><!--/.fluid-container-->

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
