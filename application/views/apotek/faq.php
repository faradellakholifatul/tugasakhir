<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Healthy Pharma
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url('assets/css2/font-awesome.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css2/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css2/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css2/owl.carousel.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css2/owl.theme.css')?>" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?php echo base_url('assets/css2/style.default.css')?>" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url('assets/css2/custom.css')?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js2/respond.min.js')?>"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                <?php if ($this->session->status==('Logged'))
                        { ?>
                    <li><a>Anda login sebagai <?php echo $this->session->username ?> </a></li>
                    <li><a href="<?php echo base_url() ?>Login/logout">Logout</a>
                        <?php }
                    else
                    { ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>home/register">Register</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Login</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('Login/login'); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            
                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>
                        <?php echo form_close() ?>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="<?php echo base_url()?>home/register"><strong>Register now</strong></a>! </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo base_url()?>" data-animate-hover="bounce">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" alt="HP logo" class="hidden-xs">
                    <img src="<?php echo base_url() ?>assets/img/logo-small.png" alt="HP logo" class="visible-xs"><span class="sr-only">Healthy Pharma  - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
                
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profil<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul>
                                                <li><a href="category.html">Profil Perusahaan</a>
                                                </li>
                                                <li><a href="category.html">Visi dan Misi</a>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                    </div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Produk <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul>
                                                <li><a href="#">Etical</a>
                                                </li>
                                                <li><a href="#">Generic</a>
                                                </li>
                                                <li><a href="#">Lainnya</a>
                                                </li>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Hubungi Kami <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul>
                                                <li><a href="#">Kontak</a>
                                                </li>
                                                <li><a href="#">FAQ</a>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

<div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li>Contact</li>
            </ul>

        </div>

        <div class="col-md-3">
            <!-- *** PAGES MENU ***
_________________________________________________________ -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Pages</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                    <li>
                            <a href="<?php echo base_url()?>home/kontak">Kontak</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>home/faq">FAQ</a>
                        </li>

                    </ul>

                </div>
            </div>

            <!-- *** PAGES MENU END *** -->

        </div>

        <div class="col-md-9">


            <div class="box" id="contact">
                <h1>Frequently asked questions</h1>

                <p class="lead">Apakah Anda ingin tahu tentang sesuatu? Apakah Anda memiliki masalah dengan obat kami?</p>
                <p>Jangan ragu untuk menghubungi kami, Customer Service kami bekerja untuk Anda 24/7.</p>

                <hr>

                <div class="panel-group" id="accordion">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

                1.  Apakah saya harus menjadi member untuk berbelanja di Healthy Pharma ?

                </a>

                     </h4>
                        </div>
                        <div id="faq1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Ya, anda harus menjadi member terlebih dahulu dengan melakukan registrasi untuk menghindari adanya pihak yang dirugikan. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                2. Apakah saya bisa konsultasi seputar kesehatan dan produk yang akan saya beli di Healthy Pharma?

                </a>

            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                            Ya, anda bisa konsultasi seputar kesehatan dan produk yang akan anda beli dengan tenaga ahli kami melalui 
                            email ke info@healthypharma.com. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

                3. Apakah semua produk farmasi yang dijual di Healthy Pharma asli dan aman untuk dikonsumsi ?

                </a>

            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Ya, semua produk di K24klik adalah produk asli dan aman untuk dikonsumsi. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->

                </div>
                <!-- /.panel-group -->


            </div>


            </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<!-- *** FOOTER ***
 _________________________________________________________ -->
 <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Hubungi Kami</h4>

                        <ul>
                            <li><a href="<?php echo base_url() ?>">Kontak</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>">FAQ</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>home/register">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Produk</h4>

                        <ul>
                            <li><a href="<?php echo base_url() ?>home/etikal">Etikal</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>">Generic</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>">Lainnya</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Healthy Pharma</strong>
                            <br>Jl Tata Surya 99
                            <br>Malang
                            <br>Jawa Timur
                            <br>
                            <strong>Indonesia</strong>
                        </p>

                        <a href="<?php echo base_url() ?>">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>


                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="<?php echo base_url('assets/js2/jquery-1.11.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/jquery.cookie.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/modernizr.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/bootstrap-hover-dropdown.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/front.js')?>"></script>


</body>

</html>