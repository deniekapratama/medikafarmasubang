<head>     
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/tambahan/');?>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/tambahan/');?>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/tambahan/');?>vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/tambahan/');?>vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/tambahan/');?>css/style.css">
<title><?= $title;  ?></title>
	<!-- Home -->
    <br><br>
    
	<div class="intro">
		<div class="container">
			<!-- Intro -->	
	<br>
	<br>

        	<div class="container box_1620">
			<h3><?= $title; ?></h3>

			<br>
			<br>
        		<div class="gallery_f_inner row imageGallery1">
	<?php foreach ($galeri as $g){ ?>
        			<div class="col-lg-3 col-md-4 col-sm-6 ap">
        				<div class="h_gallery_item">
							<img src="<?= base_url('assets/backend/img/galeri/') . $g['image']; ?>" alt="">
        					<div class="hover">
        						<a href="#"><h4><?= $g['judul']; ?></h4></a>
								<a class="light" href="<?= base_url('assets/backend/img/galeri/') . $g['image']; ?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
	<?php } ?>
				</div>
			</div>
        <!--================End Home Gallery Area =================-->
		</div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?= base_url('assets/frontend/tambahan/');?>js/jquery-3.2.1.min.js"></script>
		<script src="<?= base_url('assets/frontend/tambahan/');?>js/stellar.js"></script>
		
		<script src="<?= base_url('assets/frontend/tambahan/');?>vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= base_url('assets/frontend/tambahan/');?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= base_url('assets/frontend/tambahan/');?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/frontend/tambahan/');?>vendors/isotope/isotope-min.js"></script>
		<script src="<?= base_url('assets/frontend/tambahan/');?>vendors/owl-carousel/owl.carousel.min.js"></script>
		
        <script src="<?= base_url('assets/frontend/tambahan/');?>js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url('assets/frontend/tambahan/');?>js/theme.js"></script>
    
