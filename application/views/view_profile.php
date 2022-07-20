<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/animate.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>asset/css/profile.css"/>

</head>
<body>
<?php foreach ($sql as $kos): ?>
                
<div class="container container-profile">

      <div class="image-profile">
      <?php if($jk =='Pria'){ ?>
                                             <img class="rounded-circle" src="<?php echo base_url()?>assets/images/avatar male.png" width="150px"  alt="User" />
                                       <?php } else { ?>
                                            <img class="rounded-circle" src="<?php echo base_url()?>assets/images/avatar female.png" width="150px" alt="User" />
                                        <?php } ?>
    </div>
    <br>
    
    <div class="card-profile">
    

        <div class="row">
            <div class="col-12">
                <p class="nama-profil"><b><?=$kos->fullname ?></b></p>
                <hr class="hr-profile">
            </div>
            
            <div class="col-12">
                <center><a href="<?= base_url()?>Main_Back_User/edit_user/<?=$kos->id_user?>"><button class="btn btn-success"><b>Edit Data</b></button></a></center>
            </div>
            
            <div class="col-12">
             <?php if($this->session->flashdata('pesan_sukses')==TRUE){?>
                <br>
        <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $this->session->flashdata('pesan_sukses') ?> </strong>
</div>
              <?php } else if($this->session->flashdata('pesan_gagal')==TRUE){?>
                <br>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong><?= $this->session->flashdata('pesan_gagal'); ?></strong>
                  </div>
                <?php }?>
                </div>

            <div class="col-md-6">
                <div class="content-profile">
                    <h4>Email :</h4>
                    <p class="background"><?=$kos->email ?></p>
                </div>
                <div class="content-profile">
                    <h4>Telepon :</h4>
                    <p><?=$kos->no_hp ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-profile">
                    <h4>Jenis Kelamin :</h4>
                    <p><?=$kos->jk ?></p>
                </div>
                <div class="content-profile">
                    <h4>Alamat :</h4>
                    <p><?=$kos->alamat ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
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
