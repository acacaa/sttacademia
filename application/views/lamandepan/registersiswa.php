<!--
author: Lavelindo
author URL: http://lavelindo.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Education For A Better Life!</title>
<!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lavelindo is a Startup that was built on Passionate of Traveling Around The World" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

    <!-- Bootstrap core CSS -->
<link href='<?php echo base_url();?>asset/bower_components/chosen/chosen.min.css' rel='stylesheet'>
<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                                    <h1><a class="navbar-brand" href="<?php echo base_url();?>">STT Academia<span>Revolutionary On Education</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
                                                    <li><a href="<?php echo base_url();?>" data-hover="Home">Beranda</a></li>
                                                    <li><?php echo anchor('frontend/register','<i class="data-hover"></i> Register')?></li>
                                                    <li><?php echo anchor('frontend/berita','<i class="data-hover"></i> Berita')?></li>
                                                    <li><?php echo anchor('frontend/tentang','<i class="data-hover"></i> Tentang')?></li>
                                                    <li><?php echo anchor('frontend/backend','<i class="data-hover"></i> Login')?></li>
                                                    
						</ul>
					</nav>
				</div>
			</nav>	
			<div class="w3l_banner_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h3><i>Problem Solver</i><span> Guiding Solve All Your Problem</span></h3>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><i>Pelita Nusantara</i><span> Yuk Mulai Rancang Masa Depanmu!</span></h3>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><i>Latihan </i><span>Menggapai Asa Mencapai Cita!</span></h3>
								</div>
							</li>
						</ul>
					</div>
				</section>
						<!-- flexSlider -->
							<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
						<!-- //flexSlider -->
			</div>			
		</div>
	</div>
<!-- //banner -->	


<!-- //work -->

<!-- work-bottom -->
	<div class="team">
            <div class="container">
                <h3 class="w3ls_head" >Yuk Deh, Buruan Daftar ya!</h3><br/>
                <p align="center">Bagi Adik-adik yang masih duduk di bangku SMP-SMA hingga Perguruan Tinggi, Agar kalian dapat mengakses semua fasilitas ( video, tryout dan konsultasi), silahkan buat akun dulu di sini!</p>
                <br/>
        <?php echo form_open_multipart('frontend/register');?>
        <table class="table table-bordered">
            
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" class="form-control" required="true" name="nama_siswa" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="alamat" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_lahir" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="asal_sekolah" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nama_ortu" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" id="selectError2" data-rel="chosen" class="form-control">
                    <option value="IPA SMA">IPA SMA</option>
                        <option value="IPS SMA">IPS SMA</option>
                        <option value="SMP ">SMP</option>
                        <option value="KULIAH">KULIAH</option>
                        <option value="UMUM">UMUM</option>
                    </select></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" class="form-control" name="email" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Password Untuk Log In</td>
                <td>:</td>
                <td><input type="password" class="form-control" name="password" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jeniskelamin" id="selectError2" data-rel="chosen" class="form-control">
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select></td>
            </tr>
            <tr>
                <td>foto</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="foto" id="inputSuccess1"></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="notelpon" id="inputSuccess1" required="true"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="submit" class="btn btn-success">Simpan</button></td>
            </tr>
            
        </table>
        <?php echo form_close();?>
        
    </div>
	</div>
<!-- //work-bottom -->

<!-- testimonials --> 
	<div class="testimonials">
	
				<script src="<?php echo base_url();?>assets/js/slideshow.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/launcher.js"></script>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- newsletter -->
	
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grid">
				<div class="col-md-4 w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<h4> Rumah Belajar dan Les Privat Surabaya jl. Kebonsari VIIa no 30 <span>Surabaya-Jawa Timur-Indonesia</span></h4>
				</div>
				<div class="col-md-4 w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<a href="mailto:lavelindo.id@gmail.com">kontak@sttacademia.com</a>
				</div>
				<div class="col-md-4 w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<h4>+62 81357886143</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileinfo_footer_bottom">
			<div class="container">
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>About <span>STT Academia</span></h3>
					<p>STT Academia is a Startup that was built on Passionate About Education</p>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
					</ul>
				</div>
				
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Disclaimer </h3>
					<p>Kami menyediakan konten video untuk berbagai macam pelajaran yang diperuntukkan bagi siswa SMP, SMA dan Umum ( Khusus TPA ).
                                        Selain itu, kami juga menyediakan jasa konsultasi bimbingan skripsi bagi yang membutuhkan.</p>
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Flickr <span>Feed</span></h3>
					<div class="flickr-grids">
						<div class="flickr-grid agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/3.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/5.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/4.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
						
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url();?>assets/images/8.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                                    <div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Our <span>Subjects</span></h3>
					<div class="flickr-grids">
                                            <p>- Matematika </p>
                                            <p>- Fisika</p>
                                            <p>- Kimia</p>
                                            <p>- Biologi</p>
                                            <p>- TPA</p>
                                            <p>- Konsultasi Skripsi Informatika</p>
						<div class="clearfix"> </div>
					</div>
				</div>
                            <div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileinfo_footer_bottom1">
			<div class="container">
				<div class="agileinfo_footer_bot_left">
					<ul>
                                            <li><a href="<?php echo base_url()?>">STT Academia</a><span> |</span></li>
						<li><span>Developed With Passion By STT Academia</span></li>
					</ul>
				</div>
				<div class="agileinfo_footer_bot_right">
					<p>© 2017 STT Academia. All rights reserved | Thank's To <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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

<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>