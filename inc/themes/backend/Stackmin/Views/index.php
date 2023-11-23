<!DOCTYPE html>
<html dir="<?php _ec(request_service("language")->dir) ?>" lang="en"
      class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " data-theme="theme-default"
      data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="<?php _e(get_option("website_description", "")) ?>"/>
    <meta name="keywords" content="<?php _e(get_option("website_description", "")) ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php _e($title) ?></title>
    <base href="<?php _ec(get_theme_url()) ?>Assets/new/">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php _ec(get_option("website_favicon", base_url("assets/img/favicon.svg"))) ?>"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css?t=<?= time() ?>">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css?t=<?= time() ?>"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css?t=<?= time() ?>" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css?t=<?= time() ?>"
          class="template-customizer-theme-css"/>

    <link rel="stylesheet" href="assets/css/demo.css?t=<?= time() ?>"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/pagination/pagination.min.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/plugins/webui-popover/webui-popover.min.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css?t=<?= time() ?>"/>
    <link rel="stylesheet" href="assets/css/reset.css?t=<?= time() ?>"/>
    <?php _ec(load_files("css")); ?>
    <?php _ec(add_script_to_header()) ?>
    <!-- Page CSS -->
    <script src="assets/vendor/libs/jquery/jquery.js?t=<?= time() ?>"></script>
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js?t=<?= time() ?>"></script>
    <script src="assets/vendor/js/template-customizer.js?t=<?= time() ?>"></script>
    <script src="assets/js/config.js?t=<?= time() ?>"></script>
    <script type="text/javascript">
        var PATH = '<?php _ec(base_url() . "/")?>';
        var csrf = "<?php _ec(csrf_hash()) ?>";
    </script>

</head>

<body>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <!-- Menu -->
        <?php _ec($this->include('Backend\Stackmin\Views\sidebar'), false) ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="layout-navbar  navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme container-fluid"
                 id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <!--                            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">-->
                            <!--                                <i class="bx bx-search bx-sm"></i>-->
                            <!--                                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>-->
                            <!--                            </a>-->
                        </div>
                    </div>
                    <!-- /Search -->
                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class='bx bx-grid-alt bx-sm'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Quick Access</h5>

                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-calendar"></i>
                    </span>
                                            <a href="<?= base_url('account_manager') ?>" class="stretched-link">Account
                                                Manager</a>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-food-menu"></i>
                    </span>
                                            <a href="<?= base_url('bulk_post') ?>" class="stretched-link">Bulk Post</a>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-window-open"></i>
                    </span>
                                            <a href="<?= base_url('file_manager') ?>" class="stretched-link">File
                                                Manager</a>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-check-shield"></i>
                    </span>
                                            <a href="<?= base_url('post') ?>" class="stretched-link">Composer</a>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-pie-chart-alt-2"></i>
                    </span>
                                            <a href="<?= base_url('schedules') ?>" class="stretched-link">Schedule</a>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-help-circle"></i>
                    </span>
                                            <a href="<?= base_url('analytics') ?>"
                                               class="stretched-link">Analytics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->


                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <i class='bx bx-sm bx-moon'></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                        <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                        <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- / Style Switcher-->


                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javscript:void(0)">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-medium d-block">John Doe</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('profile/index/account')?>">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('profile/index/change_password')?>">
                                        <i class="bx bx-key me-2"></i>
                                        <span class="align-middle">Change Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('profile/index/settings')?>">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('profile/index/plan')?>">
                                        <i class="bx bx-store me-2"></i>
                                        <span class="align-middle">Plan</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('profile/index/billing')?>">
                                        <i class="bx bx-credit-card me-2"></i>
                                        <span class="align-middle">Billing</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url('auth/logout')?>">
                                        <i class="bx bx-log-out me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->

                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper  d-none">
                    <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                           aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>


            </nav>
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">

                <div class="container-fluid flex-grow-1 container-p-y">
                    <?php _ec($this->renderSection('content'), false) ?>
                </div>
                <!-- / Content -->


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                            Setupe
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

<?php _ec(add_script_to_footer()) ?>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="assets/vendor/libs/popper/popper.js?t=<?= time() ?>"></script>
<script src="assets/vendor/js/bootstrap.js?t=<?= time() ?>"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?t=<?= time() ?>"></script>
<script src="assets/vendor/libs/hammer/hammer.js?t=<?= time() ?>"></script>
<script src="assets/vendor/libs/i18n/i18n.js?t=<?= time() ?>"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js?t=<?= time() ?>"></script>
<script src="assets/vendor/js/menu.js?t=<?= time() ?>"></script>
<script src="assets/pagination/pagination.min.js?t=<?= time() ?>"></script>
<script src="assets/plugins/select2/js/select2.full.min.js?t=<?= time() ?>"></script>
<script src="assets/plugins/webui-popover/webui-popover.js?t=<?= time() ?>"></script>
<script src="assets/plugins/daterangepicker/moment.min.js?t=<?= time() ?>"></script>
<script src="assets/plugins/minicolors/jquery.minicolors.min.js?t=<?= time() ?>"></script>
<!-- endbuild -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.jst=<?= time() ?>"></script>
<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js?t=<?= time() ?>"></script>

<!-- Main JS -->
<script src="assets/js/main.js?t=<?= time() ?>"></script>


<!-- Page JS -->
<!--<script src="assets/js/dashboards-analytics.js"></script>-->
<script src="assets/js/layout.js?t=<?= time() ?>"></script>
<script src="assets/js/core.js?t=<?= time() ?>"></script>


<?php _ec(load_files("js")); ?>
<script type="text/javascript">
    $(function () {
        Core.ajax_pages();
    });
</script>
</body>

</html>

<!-- beautify ignore:end -->

