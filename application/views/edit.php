            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU ADMIN</li>
                    <li >
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
                    <li class="active">
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

<div class="container-fluid">
    <section class="content">
        <?php foreach ($request as $rqst) { ?>

            <form action="<?php echo base_url() . 'request/update'; ?>" method="post" class="ml-3">
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input type="hidden" name="id_request" class="form-control" value="<?php echo $rqst->id_request ?>">
                    <input type="text" name="nama_depan" class="form-control" value="<?php echo $rqst->nama_depan ?>">
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" value="<?php echo $rqst->nama_belakang ?>">
                </div>
                <div class="form-group">
                    <label>Info Hubungin</label>
                    <select class="form-control" name="info_hub" value="<?php echo $rqst->info_hub ?>">
                        <option>Whatsapp</option>
                        <option>No Handphone</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $rqst->no_hp ?>">
                </div>
                <div class="form-group">
                    <label>Tipe Kos</label>
                    <select class="form-control" name="tipe_kos" value="<?php echo $rqst->tipe_kos ?>">
                        <option>Kost Putra</option>
                        <option>Kost Putri</option>
                        <option>Kost Campur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Properti</label>
                    <input type="text" name="nama_properti" class="form-control" value="<?php echo $rqst->nama_properti ?>">
                </div>
                <div class="form-group">
                    <label>URL Properti</label>
                    <input type="text" name="url_properti" class="form-control" value="<?php echo $rqst->url_properti ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $rqst->harga ?>">
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" value="<?php echo $rqst->provinsi ?>">
                </div>
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $rqst->kabupaten_kota ?>">
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $rqst->kecamatan ?>">
                </div>
                <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" name="kelurahan" class="form-control" value="<?php echo $rqst->kelurahan ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $rqst->alamat ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Kamar</label>
                    <input type="text" name="jumlah_kamar" class="form-control" value="<?php echo $rqst->jumlah_kamar ?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        <?php } ?>
    </section>
</div>