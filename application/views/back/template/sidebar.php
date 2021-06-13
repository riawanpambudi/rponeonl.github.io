        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo base_url() ?>assets/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() ?>assets/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Riawan Pambudi</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA MASTER</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Master Karyawan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('jabatan') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('divisi') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Divisi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('karyawan') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Master Tiket
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('tiket') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Tiket</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">LAPORAN TIKET</li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('laporan') ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Laporan Tiket
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MY PROFILE</li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('karyawan/profile/' . $this->session->id_user); ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Profile user
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>