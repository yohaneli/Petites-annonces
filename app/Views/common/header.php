
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/vendors.min.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/fontawesome/css/all.min.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/flag-icon/css/flag-icon.min.css') ; ?>">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/themes/vertical-menu-nav-dark-template/style.css') ; ?>">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/custom/custom.css') ; ?>">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">

                            <h5><a href="<?php echo base_url() ; ?>">Accueil</h5></a>

                            <?php if(empty(session()->get('user_id'))) { ?>
                            
                            <h5><a href="<?php echo base_url('register') ; ?>">Inscription</h5></a>

                            <h5><a href="<?php echo base_url('login') ; ?>">Connexion</h5></a>
                            
                            <?php } else { ?>

                                <h5><a href="<?php echo base_url('moncompte') ; ?>">Mon compte</h5></a>

                                <h5><a href="<?php echo base_url('login/logout') ; ?>">D??connexion</h5></a>

                            <?php } ?>

                            <h5><a href="<?php echo base_url('annonce') ; ?>">Ajouter une annonce</h5></a>
                            



        </div>
    </header>
    <!-- END: Header-->