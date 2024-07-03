<?
$controller = $this->uri->segment(2);
$menu = $this->uri->segment(3);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?php echo base_url() ?>media/images/favicon.png" alt="Camwel" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $this->session->userdata('company_name') ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $this->session->userdata('photo'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $this->session->userdata('name'); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= ($controller == "dashboard") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/enquiry/manage_enquiry') ?>" class="nav-link <?= ($controller == "enquiry") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-question"></i>
                        <p>
                            Manage Enquiry
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= ($controller == "menu") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "menu") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Manage Menu
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/menu/manage_menu_about') ?>" class="nav-link <?= ($menu == "manage_menu") ? "active" : ''; ?>">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Manage About Menu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/menu/manage_menu_activity') ?>" class="nav-link <?= ($menu == "manage_menu_activity") ? "active" : ''; ?>">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Manage Activity Menu
                                </p>
                            </a>
                        </li>
           <!-- -------------------------------------------------------------------------  -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/menu/manage_menu_resources') ?>" class="nav-link <?= ($menu == "manage_menu_resources") ? "active" : ''; ?>">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Manage Resource
                                </p>
                            </a>
                        </li>
           <!-- -------------------------------------------------------------------------  -->

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/executive/manage_executive') ?>" class="nav-link <?= ($controller == "executive") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Executive Member
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/career/manage_career') ?>" class="nav-link <?= ($controller == "career") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Manage Career
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/news/manage_news') ?>" class="nav-link <?= ($controller == "news") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Manage News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/tender/manage_tender') ?>" class="nav-link <?= ($controller == "tender") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Manage Tender
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/media/manage_media') ?>" class="nav-link <?= ($controller == "media") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Manage Media
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= ($controller == "gallery") ? "menu-open" : ''; ?>">
                    <a href="#" class="nav-link <?= ($controller == "gallery") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Manage Gallery
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/gallery/manage_gallery_image') ?>" class="nav-link <?= ($menu == "manage_gallery_image") ? "active" : ''; ?>">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Add Gallery Image
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/gallery/manage_gallery_video') ?>" class="nav-link <?= ($menu == "manage_gallery_video") ? "active" : ''; ?>">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Add Gallery Video
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/donate_pay/payMentDet') ?>" class="nav-link <?= ($controller == "donate_pay") ? "active" : ''; ?>">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Donation Pay Det..
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>