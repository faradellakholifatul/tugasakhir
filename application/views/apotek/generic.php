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
                        <h1>Generic</h1>
                        <p>Obat generik adalah obat yang telah habis masa patennya, sehingga dapat diproduksi oleh semua perusahaan farmasi tanpa perlu membayar royalti</p>
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
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        
                        </div>
                        <?php } ?>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <?php $this->load->view('layouts/footer'); ?>