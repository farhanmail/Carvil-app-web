
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/')?>/assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/')?>/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/')?>/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/')?>/assets/css/responsive.css" />

        <script src="<?php echo base_url('assets/assets_shop/')?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div id="menubar" class="main-menu">	
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><img src="<?php echo base_url('assets/assets_shop/')?>/assets/images/carvil.png" alt="" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                   
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php echo base_url('customer/dashboard') ?>">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url('customer/data_villa') ?>">Villa</a></li>
                            <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>
                            <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                            <li>
                                <?php if ($this->session->userdata('nama')) { ?>
                                 <a href="<?php echo base_url('auth/logout') ?>">Welcome <?php echo $this->session->userdata('nama') ?><li class="">Logout</li></a>
                                <?php } else{ ?>
                                 <a href="<?php echo base_url('auth/login') ?>"><li class="">Login</li></a>
                                <?php } ?> 
                                </li>
                            <div class="contact-number text-right text-secondary">
                                <ul><li class=""><li class=""><?php echo $this->session->flashdata('pesan') ?></li></a></a></ul>
                            </div>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--Home page style-->
        <header id="home" class="sections">
            <div class="container">

                <div class="row">
                    <div class="homepage-style">

                        <div class="top-arrow hidden-xs text-center"><img src="<?php echo base_url('assets/assets_shop/')?>/assets/images/top-arrow.png" alt="" /></div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="unique-apps">
                                <h2>BOOKING VILLA<br>MENJADI LEBIH MUDAH<br>DAN DAPATKAN CASHBACK HINGGA 20% </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. 
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. 
                                </p>

                                <div class="home-btn"><button class="btn btn-primary">View More <span><i class="fa fa-paper-plane"></i></span></button></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="slider-area">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <!-- Indicators -->
                                    

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="<?php echo base_url('assets/assets_shop/')?>/assets/images/jalan2.png" alt="" />
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>	
                </div>

            </div>

        </header>