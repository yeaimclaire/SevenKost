            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU SUPER ADMIN</li>
                    <li class="active">
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
                    <li>
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