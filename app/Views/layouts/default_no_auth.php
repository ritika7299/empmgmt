<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('public/assets/css/icons/icomoon/styles.min.css" rel="stylesheet') ?>" type="text/css" />
    <link href="<?= base_url('public/assets/global_assets/css/icons/fontawesome/styles.min.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('public/assets/global_assets/css/icons/icomoon/styles.min.css') ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('public/assets/global_assets/css/icons/material/styles.min.css') ?>" rel="stylesheet"
        type="text/css">
    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/bootstrap_limitless.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/components.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/assets/css/colors.min.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('public/assets/global_assets/js/main/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/main/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/loaders/blockui.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/ui/ripple.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/validation/validate.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
    <script src="<?= base_url('public/assets/global_assets/js/demo_pages/login_validation.js') ?>"></script>
</head>

<body>
    <?php echo $this->renderSection('content'); ?>
</body>
<script>
    $('.alert').delay(4000).fadeOut();
</script>

</html>