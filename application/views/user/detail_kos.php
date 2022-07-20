<section class="hero-wrap hero-wrap-2" style="background-image: url('../../asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url()?>Main_Front_User">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="<?php echo base_url()?>Main_Front_User/semua_kos">Kos <i class="fa fa-chevron-right"></i></a></span> <span>Detail Kos <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Detail Kos</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
                  <div class="img" style="text-align: center;">
					  <img src="<?php echo base_url();?>file/kos_image/<?=$image_header ?>" width="75%">
			          </a>
      				</div>
      				<div class="text">
                      <span class="subheading"><?=$kota ?></span>
                      <h2><b><?=$nama ?></b></h2>
					  <h3 class="text-success"><b>Rp. <?=$this->cart->format_number($harga);?> /bulan</h3>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Detail</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Deskripsi</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-12">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-circle"></span>Kota : <?=$kota ?></li>
						    				<li class="check"><span class="fa fa-circle"></span>Alamat : <?=$alamat ?></li>
						    				<li class="check"><span class="fa fa-circle"></span>Kategori : <?=$tipe ?></li>
						    				<li class="check"><span class="fa fa-circle"></span>No Hp : <?=$no_hp ?></li>
						    				<li class="check"><span class="fa fa-circle"></span>Oleh : <?=$fullname ?></li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?= $deskripsi ?></p>
						    </div>
						    </div>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SevenKos</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Search Properties</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="<?php echo base_url()?>Main_Front_User" target="_blank">SevenKos</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>


    <script src="../../asset/js/jquery.min.js"></script>
  <script src="../../asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../asset/js/popper.min.js"></script>
  <script src="../../asset/js/bootstrap.min.js"></script>
  <script src="../../asset/js/jquery.easing.1.3.js"></script>
  <script src="../../asset/js/jquery.waypoints.min.js"></script>
  <script src="../../asset/js/jquery.stellar.min.js"></script>
  <script src="../../asset/js/owl.carousel.min.js"></script>
  <script src="../../asset/js/jquery.magnific-popup.min.js"></script>
  <script src="../../asset/js/jquery.animateNumber.min.js"></script>
  <script src="../../asset/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../asset/js/google-map.js"></script>
  <script src="../../asset/js/main.js"></script>

