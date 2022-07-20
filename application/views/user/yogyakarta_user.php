<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SevenKos | Solusi cari kost!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../asset/css/animate.css">
    
    <link rel="stylesheet" href="../asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../asset/css/magnific-popup.css">

    
    <link rel="stylesheet" href="../asset/css/flaticon.css">
    <link rel="stylesheet" href="../asset/css/style.css">
  </head>
  <body>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url()?>Main_Front_User">Home <i class="fa fa-chevron-right"></i></a></span> <span>Kost<i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Kost</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">Area Populer</span>
            <h2 class="mb-2">Hasil Kos dari Area Yogyakarta</h2>
          </div>
        </div>

        <div class="container justify-content-center">
    
    <div class="row">

       <div class="col-md-12">
           
           
           <?php echo form_open('Main_Back_User/search') ?> 
           <div class="input-group mb-3">
            <input type="text" class="form-control input-text" 
            placeholder="Search" aria-label="Search" 
            aria-describedby="basic-addon2" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-outline-success btn-lg" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> 
          <?php echo form_close() ?>

           
       </div>        
        
    </div>
    
    
</div>

<br><br>

        <div class="row ftco-animate">
		      <?php foreach ($sql as $kos): ?>

              <div class="item" style="width:352px; margin: 2rem;">
                <div class="property-wrap ftco-animate">
                  <img src="<?php echo base_url();?>file/kos_image/<?=$kos->image_header ?>" width="352px">
                    <div class="rent-sale">
		        					<span class="rent"><?=$kos->tipe ?></span>
		        				</div>
		        				<p class="price"><span class="orig-price">Rp. <?=$this->cart->format_number($kos->harga); ?><small> / bulan</small></span></p>
		        			</a>
                  <button type="button" class="btn btn-success btn-rounded" style="margin-left: 18em">
		        					<?php 
                                        if($kos->status == '1'){
                                            echo 'Tersedia';
                                        }elseif($kos->status == '0'){
                                            echo 'Tidak tersedia';
                                        } ?>
		        				</button>
		        			<div class="text">
		        				<h3> <a href="<?=base_url(); ?>Main_Back_User/view_konten_kos/<?=$kos->slug ?>">
                                                    <?=$kos->nama ?></a>
                                                    </h3>
		        				<span class="location"><?=$kos->alamat ?></span>
		        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
		        					<div class="d-flex align-items-center">
			        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
			        				</div>
			        				<span class="text-right"><?=$kos->date ?></span>
		        				</div>
                    <?php if ($this->session->userdata('username')) { ?>

<a href=" <?= base_url('transaksi/sewa/tambah_sewa/' . $kos->id_kos); ?> " class="btn btn-warning  ml-1 ">Sewa</a>

<?php } else { ?>
<a href=" <?= base_url('transaksi/sewa/tambah_sewa/' . $rm->id_kos); ?> " class="btn btn-warning  ml-1 ">Sewa</a>
<?php } ?>
		        			</div>
		        		</div>
              </div>
		      <?php endforeach ?>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ecoverde</h2>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="../asset/js/jquery.min.js"></script>
  <script src="../asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../asset/js/popper.min.js"></script>
  <script src="../asset/js/bootstrap.min.js"></script>
  <script src="../asset/js/jquery.easing.1.3.js"></script>
  <script src="../asset/js/jquery.waypoints.min.js"></script>
  <script src="../asset/js/jquery.stellar.min.js"></script>
  <script src="../asset/js/owl.carousel.min.js"></script>
  <script src="../asset/js/jquery.magnific-popup.min.js"></script>
  <script src="../asset/js/jquery.animateNumber.min.js"></script>
  <script src="../asset/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../asset/js/google-map.js"></script>
  <script src="../asset/js/main.js"></script>
    
  </body>
</html>