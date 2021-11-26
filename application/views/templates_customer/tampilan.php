
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
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php echo base_url('customer/dashboard') ?>">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url('customer/data_villa') ?>">Villa</a></li>
                            <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>
                            <li><a href="">Register</a></li>
                            <li>
                                <?php if ($this->session->userdata('nama')) { ?>
                                 <a href="<?php echo base_url('auth/logout') ?>">Welcome <?php echo $this->session->userdata('nama') ?><li class="">Logout</li></a>
                                <?php } else{ ?>
                                 <a href="<?php echo base_url('auth/login') ?>"><li class="">Login</li></a>
                                <?php } ?> 
                                </li>

                            <div class="contact-number text-right"> 
                                <ul><li class=""><li class=""><?php echo $this->session->flashdata('pesan') ?></li>
                            </div>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--Home page style-->
        <header >
            <div class="container">

                <div class="row">
                    <div class="homepage-style">

                        

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="slider-area">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <!-- Indicators -->
                                    

                                    <!-- Wrapper for slides -->
                                    

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>  
                </div>

            </div>

        </header>