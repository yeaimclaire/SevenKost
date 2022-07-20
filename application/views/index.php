            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU ADMIN</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Dashboard_Admin/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url()?>Request/index">
                            <i class="material-icons">file_open</i>
                            <span>Request</span>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/Transaksi">
                            <i class="material-icons">paid</i>
                            <span>Data Sewa</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Dashboard_Admin/view_kos">
                            <i class="material-icons">room</i>
                            <span>Data Kos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Dashboard_Admin/view_admin">
                            <i class="material-icons">face</i>
                            <span>Data User</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('Dashboard_Admin/data_admin/'.$this->session->userdata('id_user'))?>">
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
                    &copy; 2017 <a href="<?php echo base_url()?>Login">Mbakos</a>.
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
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- HEADER PAGE
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>
                        </div> -->
                        <!-- END HEADER PAGE-->

                        <div class="body">
                            <div class="row clearfix">
                            	
                            </div>

                            <div class="alert alert-success">
                                <strong>HALLO !</strong> <?php echo strtoupper($fullname) ?>, Anda login sebagai <b>User</b>.
                            </div>
                           
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



