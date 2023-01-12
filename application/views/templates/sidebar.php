
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="<?php echo base_url() ?>assets1/img/x.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" a href="#" >TIKET KONSER</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

        <?php if ($_SESSION['hak_akses'] == 'P' or $_SESSION['hak_akses'] == 'O' ) { ?>
            <br>
        <?php } ?>
        <!-- Sidebar user panel (optional) -->

        <?php if ($_SESSION['hak_akses'] == 'O' ) { ?>
            <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admini</a>
                </div>
            </div> -->
        <?php } ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="<?php echo base_url() ?>home/index" class="nav-link <?= activate_menu('home') ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Beranda
                    </p>
                </a>
            </li>
            <br>

            <li class="nav-header"> <b>Modul</b></li>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>pesan/index" class="nav-link <?= activate_menu('pesan') ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Data Pemesan Tiket
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url() ?>cekin/index" class="nav-link <?= activate_menu('cekin') ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Check-In Tiket
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url() ?>laporan/index" class="nav-link <?= activate_menu('laporan') ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
            <br>

            <li class="nav-header"> <b>ACTION</b></li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>team/index" class="nav-link <?= activate_menu('team') ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Developers Team
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url() ?>login/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Keluar
                    </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    