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
            <div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle">Buat Janji Pertemuan dengan Dokter</div>
						<br>
						<p>*Halaman ini masih dalam pengembangan
                        <br>   
					</div>
				</div>
				<!-- Contact Form -->
				<div class="col-lg-12">
					<div class="contact_form_container">
						<div class="contact_form_title">Buat Janji</div>
						<form action="#" class="contact_form" id="contact_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="contact_input" placeholder="Your Name" required="required">
								<input type="email" class="contact_input" placeholder="Your E-mail" required="required">
								<input type="tel" class="contact_input" placeholder="Your Phone" required="required">
								<select class="contact_select contact_input" required>
									<option disabled="" selected="">Speciality</option>
									<option>Speciality 1</option>
									<option>Speciality 2</option>
									<option>Speciality 3</option>
									<option>Speciality 4</option>
									<option>Speciality 5</option>
								</select>
								<select class="contact_select contact_input"required="required">
										<option disabled="" selected="">Doctor</option>
										<option>Doctor 1</option>
										<option>Doctor 2</option>
										<option>Doctor 3</option>
										<option>Doctor 4</option>
										<option>Doctor 5</option>
									</select>
								<input type="text" id="datepicker" class="contact_input datepicker" placeholder="Date" required="required">
							</div>
							<button class="button button_1 contact_button trans_200">Buat Janji</button>
						</form>
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