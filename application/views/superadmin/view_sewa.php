<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SevenKos | Solusi cari kostan!</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()?>assets/favicon_mbakos.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url()?>Login"><img src="<?php echo base_url()?>assets/images/mbakos.png" width="160px" align="center"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <!-- kosong -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php if($jk =='Pria'){ ?>
                         <img src="<?php echo base_url()?>assets/images/avatar male.png" width="48" height="48" alt="User" />
                   <?php } else { ?>
                        <img src="<?php echo base_url()?>assets/images/avatar female.png" width="48" height="48" alt="User" />
                    <?php } ?>
                   
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname ?></div>
                    <div class="email"><?php echo $email ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url()?>Login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU SUPER ADMIN</li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Superadmin/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Superadmin/view_kos">
                            <i class="material-icons">room</i>
                            <span>Data Kos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Superadmin/view_superadmin">
                            <i class="material-icons">face</i>
                            <span>Data User</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Main_Back_Superadmin/sewa">
                            <i class="material-icons">paid</i>
                            <span>Data Sewa</span>
                        </a>
                    </li>

                     <li>
                        <a href="<?php echo base_url('Main_Back_Superadmin/data_superadmin/'.$this->session->userdata('id_user'))?>">
                            <i class="material-icons">account_box</i>
                            <span>Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->


            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="<?php echo base_url()?>Login">SevenKos</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>


        <!-- Jquery Core Js -->
        <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>assets/js/admin.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/nouislider/nouislider.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>assets/js/admin.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/forms/advanced-form-elements.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

 <!-- Jquery Validation Plugin Css -->
<script src="<?php echo base_url()?>assets/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Jquery Validation Plugin Css -->
        <script src="<?php echo base_url()?>assets/plugins/jquery-validation/jquery.validate.js"></script>
         <!-- Sweet Alert Plugin Js -->
         <script src="<?php echo base_url()?>assets/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/forms/form-validation.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>assets/js/admin.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>
</body>

</html>
<section class="content">
    <div class="container-fluid">
        <!-- DATA KOS -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            Data Sewa</h1>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penyewa</th>
                        <th>Kos yang disewa</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Lama </th>
                        <th>Tagihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($transaksi as $tr) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $tr->fullname ?></td>
                            <td><?= $tr->nama ?></td>
                            <td><?= $tr->tgl_sewa?></td>
                            <td><?= $tr->tanggal_selesai?><td>
                            
                            
                            <?php
                            $mulai = strtotime($tr->tgl_sewa);
                            $selesai = strtotime($tr->tanggal_selesai);
                            $jmlh = abs(($mulai - $selesai) / (60 * 60 * 1 * 365));
                            // $mulai      = date_create($dt->tgl_sewa);
                            // $selesai    =  date_create($dt->tanggal_selesai);
                            // $jmlh       = date_diff($mulai, $selesai);
                            // $jmlh->y;
                            // $jmlh->m:
                            ?>

                            
                           
                            <?php if (abs(($mulai - $selesai) / (60 * 60 * 24 * 365)) == !',') {
                                        echo  $jmlh .   ' Bulan' ?>
                                <?php } else {
                                        $mulai = strtotime($tr->tgl_sewa);
                                        $selesai = strtotime($tr->tanggal_selesai);
                                        $jmlh = abs(($mulai - $selesai) / (60 * 60 * 24 * 30));

                                        echo $jmlh . ' bulan'

                                ?>

                                <?php } ?>
                            

                      
                            <td>
                                <?php if ($jmlh == 'bulan') {
                                ?>
                                     Rp. <?= number_format($tr->harga * $jmlh, 0, ',', '.')  ?> </td>
                        <?php } else { ?>
                             Rp. <?= number_format(($tr->harga / 1) * $jmlh, 0, ',', '.')  ?> </td>
                        <?php } ?>

                            
                            <td> <?php
                                    if ($tr->status == "1") {
                                        echo "-";
                                    } else { ?>

                                    <a href=" <?= base_url('admin/transaksi/detail_customer/') . $tr->id_booking ?>  " class="btn btn-warning btn-sm "> <i class="fas fa-eye"> </i></a>
                                    <a href=" <?= base_url('admin/transaksi/transaksi_selesai/') . $tr->id_booking ?>  " class="btn btn-primary btn-sm "> <i class="fas fa-check"> </i></a>
                                    <a href=" <?= base_url('admin/transaksi/batal_transaksi/') . $tr->id_booking ?>  " class="btn btn-danger btn-sm "> <i class="fas fa-times"> </i></a>
                                <?php } ?>
                            </td>


                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Jquery Core Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>assets/js/admin.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>
</body>

</html>