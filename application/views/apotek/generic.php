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
        Obaju : e-commerce template
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
    <link href="<?php echo base_url('assets/css2/style.default.css" rel="stylesheet')?>" id="theme-stylesheet">

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
                    
                    <?php
                        if($this->session->privilege == 'User')
                    { ?>
                        <a class="btn btn-default navbar-toggle" href="<?php echo base_url() ?>home/basket">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Cart</span>
                        </a>
                    <?php }
                        else if($this->session->privilege == 'Administrator')
                    { ?>
                        <a class="btn btn-default navbar-toggle" href="<?php echo base_url() ?>home/basket">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Cart</span>
                        </a>
                    <?php }
                        else
                    { ?>
                        <a class="btn btn-default navbar-toggle" href="#" class="btn btn-primary" data-toggle="modal" data-target="#login-modal">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Cart</span>
                        </a>
                    <?php }
                    ?>
                       
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
                                                <li><a href="<?php echo base_url()?>home/profper">Profil Perusahaan</a>
                                                </li>
                                                <li><a href="<?php echo base_url()?>home/vismis">Visi dan Misi</a>
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
                                                <li><a href="<?php echo base_url()?>home/etical">Etical</a>
                                                </li>
                                                <li><a href="<?php echo base_url()?>home/generic">Generic</a>
                                                </li>
                                                <li><a href="<?php echo base_url()?>home/lainnya">Lainnya</a>
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
                                                <li><a href="<?php echo base_url() ?>home/kontak">Kontak</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>home/faq">FAQ</a>
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
                <?php
                        if($this->session->privilege == 'User')
                    { ?>
                        <a href="<?php echo base_url() ?>home/basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                    <?php }
                        else if($this->session->privilege == 'Administrator')
                    { ?>
                        <a href="<?php echo base_url() ?>home/basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                    <?php }
                        else
                    { ?>
                        <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                    <?php }
                    ?>
                    
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
                        <li><a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li>Etical</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="<?php echo base_url() ?>home/etical">Etical</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>home/generic">Generic</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>home/lainnya">Lainnya</a>
                                </li>
                                
                                
                            </ul>

                        </div>
                    </div>

                    

                    <!-- *** MENUS AND FILTERS END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Generic</h1>
                        <p>Obat yang hanya dapat diperoleh dengan resep dokter (ethical)</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                        <?php foreach ($getGeneric as $data => $value) { ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('home/detail/'.$value->id_produk) ?>">
                                                <img src="<?php echo base_url('assets/image/'.$value->gambar)?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('home/detail/'.$value->id_produk) ?>">
                                                <img src="<?php echo base_url('assets/image/'.$value->gambar)?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('home/detail/'.$value->id_produk) ?>" class="invisible">
                                    <img src="<?php echo base_url('assets/image/'.$value->gambar)?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('home/detail/'.$value->id_produk) ?>"><?php echo $value->nama_produk ?></a></h3>
                                    <p class="price"><?php echo "Rp." . $value->harga ?></p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('home/detail/'.$value->id_produk) ?>" class="btn btn-default">View detail</a>
                                        <?php
                                            if($this->session->privilege == 'User')
                                                { ?>
                                                    <a href="<?php echo base_url() ?>home/basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <?php }
                                            else if($this->session->privilege == 'Administrator')
                                            { ?>
                                                <a href="<?php echo base_url() ?>home/basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <?php }
                                            else
                                            { ?>
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login-modal"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        <?php }
                                        ?>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        
                        </div>
                        <?php } ?>
                    </div>

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
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
                            <li><a href="<?php echo base_url() ?>home/kontak">Kontak</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>home/faq">FAQ</a>
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
                            <li><a href="<?php echo base_url() ?>home/etical">Etikal</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>home/generic">Generic</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>home/lainnya">Lainnya</a>
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

                        <a href="<?php echo base_url() ?>home/kontak">Go to contact page</a>

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
                    <p class="pull-left">© 2015 Healthy Pharma</p>

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