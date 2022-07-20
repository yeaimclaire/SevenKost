<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?= $title ?>
	</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/animate.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>asset/css/profile2.css"/>
</head>

<body>
<?php foreach($user as $u){ ?>
	<div class="container container-profile">

        <div class="image-profile">
      <?php if($jk =='Pria'){ ?>
                                             <img class="rounded-circle" src="<?php echo base_url()?>assets/images/avatar male.png" width="150px"  alt="User" />
                                       <?php } else { ?>
                                            <img class="rounded-circle" src="<?php echo base_url()?>assets/images/avatar female.png" width="150px" alt="User" />
                                        <?php } ?>
    </div>
    <br>

		<form  method="POST" id="form_edit_user" class="form-horizontal"  action="<?php echo site_url('Main_Back_User/proses_update_user')?>">

			<div class="card-profile">
				<div class="row">

				<input type="hidden" id="id_user" value="<?php echo $u->id_user ?>" name="id_user" required="required">
				<input type="hidden" id="email" value="<?php echo $u->email ?>" name="email" required="required">

					<br><br>

					<div class="col-md-6" style="float:none;margin:auto">
						<div class="content-profile">
							<h4>Username :</h4>
							<input type="text" name="username" id="username" value="<?php echo $u->username ?>" required>
						</div>

						<div class="content-profile">
							<h4>Nama :</h4>
							<input type="text" name="fullname" id="fullname" value="<?php echo $u->fullname ?>" required>
						</div>

						<div class="content-profile">
							<h4>Email :</h4>
							<input type="text" name="email" id="email" value="<?php echo $u->email ?>" required>
						</div>

						<div class="content-profile">
							<h4>Telepon :</h4>
							<input type="text" name="no_hp" id="no_hp" value="<?php echo $u->no_hp ?>" required>
						</div>

                        <div class="content-profile">
							<h4>Password :</h4>
							<input type="password" id="password" name="password" value="<?php echo $u->password ?>" required>
						</div>

                        <div class="content-profile">
							<h4>Jenis Kelamin :</h4>
							<?php if($u->jk=="Pria"): ?>
							<select name="jk">
								<option value="<?=$u->jk ?>">
									 <?=$u->jk ?>
								</option>
								<option value="Wanita">Wanita</option>
							</select>
							<?php else: ?>
							<select name="jk">
								<option value="<?=$u->jk ?>">
									 <?=$u->jk ?>
								</option>
								<option value="Pria"> Pria</option>
							</select>
							<?php endif ?>
						</div>

                        <div class="content-profile">
							<h4>Alamat :</h4>
							<input type="text" name="alamat" id="alamat" value="<?php echo $u->alamat ?>" required>
						</div>
					</div>
				</div>
        <input type="hidden" name="id_role" id="id_role" class="form-control" value="<?php echo $u->id_role ?>" required>


                <br>
                
				<div style="text-align:center; width:100%;">
					<input type="submit" value="Submit" class="btn btn-primary btn-rounded btn-lg">
                    <button type="button" class="btn btn-primary btn-rounded btn-lg" onclick="location.href='<?php echo base_url('Main_Back_User/data_user/'.$this->session->userdata('id_user'))?>'">Cancel</button>
				</div>
                <br>
		</form>
	</div>
	</div>
    <?php } ?>
</body>

</html>
<br><br>

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
