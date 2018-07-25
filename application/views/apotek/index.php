<?php $this->load->view('layouts/header') ?>

    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="<?php echo base_url('assets/img/slider1.jpg')?>" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="assets/img-responsive" src="<?php echo base_url('assets/img/slider2.jpg')?>" alt="">
                        </div>
                        
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>
            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>PRODUCT HEALTHY PHARMA</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                
                    <div class="product-slider">
                    <?php foreach ($list as $data => $value) { ?>
                        <div class="item">
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
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <?php }?>
                    </div>
                    <!-- /.product-slider -->
               
                
                </div>
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** BLOG HOMEPAGE END *** -->


        </div>
        <!-- /#content -->

        <?php $this->load->view('layouts/footer'); ?>
        