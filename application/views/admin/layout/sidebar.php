        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Home
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/Statistickab') ?>">Statistic kabupaten</a><a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/statisticprov') ?>">Statistic Provinsi</a><a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/info_grafis') ?>">Info Grafis</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Berita
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/AddBerita') ?>">Tambah Berita</a><a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/Berita') ?>">Daftar Berita</a></nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Report</div>
                            <!-- <a class="nav-link" href="<?php echo base_url('Admin/dashboard_admin/ReportWorld') ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Chart COVID-19 Dunia</a
                                ><a class="nav-link" href="<?php echo base_url() ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Chart COVID-19 Indonesia</a> -->
                                <a class="nav-link" href="<?php echo base_url('logout') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout</a>                                
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?=$this->session->userdata('username');?> - <!-- <a href="<?=base_url('logout')?>"> Keluar</a> -->
                    </div>
                </nav>
            </div>
           
                