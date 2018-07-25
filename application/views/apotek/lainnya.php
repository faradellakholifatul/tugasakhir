<?php $this->load->view('layouts/header') ?>

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
                        <h1>Lainnya</h1>
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

                        <?php foreach ($getLainnya as $data => $value) { ?>
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


        <?php $this->load->view('layouts/footer'); ?>