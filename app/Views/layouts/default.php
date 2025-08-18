<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= esc($title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('public/assets/global_assets/css/icons/icomoon/styles.min.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/bootstrap_limitless.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/components.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/colors.min.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('public/assets/global_assets/js/main/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/main/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/loaders/blockui.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/ui/ripple.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/visualization/d3/d3.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/ui/moment/moment.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/pickers/daterangepicker.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/dashboard.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js') ?>"></script>
    <script
        src="<?= base_url('public/assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/form_layouts.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/form_validation.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/validation/validate.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/jqueryui_forms.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/form_checkboxes_radios.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/emp_forms.js') ?>"></script>
    <!-- <script src="<?//= base_url('public/assets/global_assets/js/demo_pages/multiple_form_validation.js') ?>"></script> -->
</head>

<body class="sidebar-xs sidebar-component-hidden">
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="navbar-brand">
            <a href="javascript::void(0);" class="d-inline-block">
                <img src="<?= base_url('public/assets/global_assets/images/logo_light.png') ?>" alt="" />
            </a>
        </div>
        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-user"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>
            <!-- <span class="navbar-text ml-md-3">
          <span class="badge badge-mark border-orange-300 mr-2"></span>
          Morning, Victoria!
        </span> -->
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a href="<?= base_url('/logout') ?>" class="navbar-nav-link">
                        <i class="icon-switch2"></i>
                        <span class="ml-2">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-content">
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">
                                Main
                            </div>
                            <i class="icon-menu" title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard') ?>" class="nav-link active">
                                <i class="icon-home4"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/inventory') ?>" class="nav-link"><i
                                    class="icon-store"></i><span>Inventory</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/employeeslist') ?>" class="nav-link"><i
                                    class="icon-pie-chart5"></i><span>RMS</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/admin') ?>" class="nav-link"><i
                                    class="icon-user-lock"></i><span>Admin</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <?php echo $this->renderSection('content'); ?>
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2025 - 2026. <a href="#">Design </a>by
                        <a href="javascript::void(0);" target="_blank">Ritika</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.alert').delay(4000).fadeOut();
    $('.tbl-filter').DataTable();
</script>

</html>