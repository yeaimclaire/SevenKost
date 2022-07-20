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
<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="col-lg-12">
            <?php foreach ($sql as $kos): ?>
                            <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>file/kos_image/<?=$kos->image_header ?>" width="100%">
                                        <div class="caption">
                                            <h3>
                                                <a title="<?=$kos->nama?>" href="">
                                                    <?=$kos->nama ?></a>
                                            </h3>

                                            <div>
                                                <?php
                                                    if($kos->tipe == 'Putra') {
                                                            echo '<span class="btn bg-green">'.strtoupper($kos->tipe).'</span>';
                                                    } elseif($kos->tipe  == 'Putri'){
                                                            echo '<span class="btn bg-pink ">'.strtoupper($kos->tipe).'</span>';
                                                    } else {
                                                            echo '<span class="btn bg-purple ">'.strtoupper($kos->tipe).'</span>';
                                                    }
                                                ?> 
                                            </div>
                                            <br>
                                            <div><?=$kos->alamat ?></div>
                                                
                                            <p>
                                                <h4>Rp. <?=$this->cart->format_number($kos->harga); ?></h4>
                                            </p>
                                            <p>
                                                <a href="<?= base_url()?>User/edit_kos/<?=$kos->id_kos?>" class="btn btn-primary waves-effect" role="button">EDIT</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="<?= base_url()?>User/delete_kos/<?=$kos->id_kos?>" class="btn btn-danger waves-effect" role="button">DELETE</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
            </div>
           <!--  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>

                        </div>
                        <div class="body">

                            

                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                 
                                <thead>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </tfoot>
                                
                                <tbody>
                                <?php foreach ($sql as $kos => $k) { ?>
                                    <tr>
                                        <td><?php echo $k->id_kos; ?></td>
                                        <td><?php echo $k->nama; ?></td>
                                        <td><?php echo $k->deskripsi; ?></td>
                                        <td><?php echo $k->date; ?></td>
                                        <td><?php echo $k->time; ?></td>
                                    </tr>
                                <?php }?>
                                </tbody>

                            </table>  
                        </div>
                    </div> 
                </div>
            </div> -->
            <!-- #END# Basic Examples -->
        </div>
    </section>



