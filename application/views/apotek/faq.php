<?php $this->load->view('layouts/header') ?>

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

<?php $this->load->view('layouts/footer'); ?>