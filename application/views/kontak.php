<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/')?>styles/contact_responsive.css">
<title><?= $title;  ?></title>


	<div class="intro">
		<div class="container">
			<!-- Intro -->	
	<br>
	<br>



	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Form -->
				<div class="col-lg">
					<div class="contact_form_container">
						<div class="contact_form_title">Kritik & Saran</div>
						<form action="#" class="contact_form" id="contact_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="contact_input" placeholder="Nama Lengkap" required="required">
								<input type="email" class="contact_input" placeholder="Alamat E-mail" required="required">
							</div>
							<textarea type="text" class="contact_input" placeholder="Kritik & Saran" required="required"></textarea>
							<button class="button button_1 contact_button trans_200">Kirim</button>
						</form>
					</div>
				</div>

				<!-- Contact Content -->
				<div class="col-lg-5 offset-lg-1 contact_col">
					<div class="contact_content">
						<div class="contact_content_title">Hubungi kami</div>
						<div class="contact_content_text">
							<p>Klinik Medika Farma Subang Melayani Anda, Info lebih lanjut hubungi kontak dibawah.</p>
						</div>
						<div class="direct_line d-flex flex-row align-items-center justify-content-start">
							<div class="direct_line_title text-center">TELP</div>
							<div class="direct_line_num text-center">0260-412773, 421516</div>
						</div>
						<div class="contact_info col-12">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Address</div>
									<div>Jl. Otto Iskandardinata No.126 Karanganyar-Subang</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Telp</div>
									<div>0260-412773, 421516</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>E-mail</div>
                                    <div>klinikmedikafarma126[at]gmail.com
                                    <p><div>
                                    CS[at]medikafarmasubang.com</p></div>
                                    </div>
                                    
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>



        
		</div>
    </div>

<script src="<?= base_url('assets/frontend/')?>js/contact.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>