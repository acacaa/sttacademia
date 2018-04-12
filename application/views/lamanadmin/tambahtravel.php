
<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Situs Informasi Lengkap Destinasi Wisata dan Jajanan Di Madura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Informasi Lengkap dan Destinasi Wisata dan Makan Di Madura. Situs yang menyediakan 
      berbagaimacam informasi mengenai madura khusus bagi para wisatawan dan investor di madura. Mari Ke Madura,  Jalan2 Madura
      Makanan Madura Pamekasan, Bangkalan, Sampang dan Sumenep. Kota-kota madura. Cirikhas madura">
    <meta name="author" content="Tsabbit A. Mukhtar">

    <link href="<?php echo base_url();?>asset/css/charisma-app.css" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?php echo base_url();?>asset/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href="<?php echo base_url();?>asset/bower_components/responsive-tables/responsive-tables.css" rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/animate.min.css' rel='stylesheet'>
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
      

    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/bower_components/jquery/jquery.min.js"></script>
    
	
	
    
    <title>Tambah File Kategori</title>
     

    <!-- jQuery -->
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">AcacaA</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
                

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php $user = $this->session->userdata('email'); echo  $user ;?>
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"></span>
                    
                    
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    
                    <li class="divider"></li>
                    
                    <li><a><?php echo anchor('datamentah/infopencegahan','Log Out')?></a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#" class="success"><b></b></a></li>
                <li class="dropdown">
                    
                   
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        
                    </form>
                </li>
            </ul>

        </div>
    </div>
      <div class="ch-container">
    <!-- Static navbar -->
     <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        
                        <li><a class="ajax-link" ><span><?php echo anchor('backend/osas','<i class="glyphicon glyphicon-hdd" ></i> Posting Tulisan')?></span></a></li >
                        <li><a class="ajax-link" ><span><?php echo anchor('backend/listkategori','<i class="glyphicon glyphicon-list-alt" ></i> Kategori')?></span></a></li >
                        <li><a class="ajax-link" ><span><?php echo anchor('backend/listkontak','<i class="glyphicon glyphicon-edit" ></i> Lihat Kontak')?></span></a></li>
                        <li><a class="ajax-link" ><span><?php echo anchor('backend/listtravel','<i class="glyphicon glyphicon-th" ></i> List Travel')?></span></a></li>
                        <li><a class="ajax-link" ><span><?php echo anchor('backend/listuser','<i class="glyphicon glyphicon-check" ></i> Input User')?></span></a></li>
                    </ul>
                    
                </div>
            </div>
        </div></div>
    
<h3>Tambah Armada Travel</h3>
<div class="ch-container">
    
    <div id="content" class="col-lg-10 col-sm-10">
        <?php echo form_open_multipart('backend/tambahtravel');?>
        <table class="table-hover">
            <tr>
                <td>Nama travel</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="namatravel" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Kembali</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="kembali" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Berangkat</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="berangkat" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Estimasi Biaya</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="estimasibiaya" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>foto</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="foto" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nomerhp" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan" class="button btn-success">Simpan</button>
                </td>
            </tr>
        </table>
        <?php echo form_close();?>
        <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">Developed With Passion By: </a>AcacaA Team</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by"> Copyright <a
                href="">2017</a></p>
    </footer>
    </div> <!-- /container -->
    
    </div>
      
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
          $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
      </script>
<!-- library for cookie management -->
<script>CKEDITOR.replace('editor1');</script>
<script src="<?php echo base_url();?>asset/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>asset/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url();?>asset/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url();?>asset/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>asset/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>asset/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url();?>asset/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>asset/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>asset/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>asset/js/charisma.js"></script>

  </body>

