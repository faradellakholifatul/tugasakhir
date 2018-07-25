<?php $this->load->view('layouts/header') ?>

    <div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li>Visi dan Misi</li>
            </ul>
        </div>

        <div class="col-md-9">

            <div class="box" id="text-page">
                <h1>Visi dan Misi</h1>
                <img src="<?php echo base_url('assets/img/blog2.jpg')?>" class="img-responsive" alt="Example blog post alt">
                    </br>

                <p><center><strong>VISI</strong><br/><br/>

                Menjadi perusahaan Healthcare pilihan utama yang terintegrasi dan menghasilkan nilai yang berkesinambungan.<br/><br/></center>

                <strong><center>MISI</center></strong><br/>
                <span align="justify">
                <ol>
                    <li>Melakukan aktivitas usaha di bidang-bidang industri kimia dan farmasi, perdagangan dan jaringan distribusi, retail farmasi dan layanan kesehatan serta optimalisasi aset</li><br/>
                    <li>Mengelola perusahaan secara Good Corporate Governance dan operational excellence didukung oleh SDM profesional</li><br/>
                    <li>Memberikan nilai tambah dan manfaat bagi seluruh stakeholder</li>
                </ol>
                </span>
                </p>
            </div>


        </div>
        <!-- /.col-md-9 -->

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
                            <a href="<?php echo base_url()?>home/profper">Profil Perusahaan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>home/vismis">Visi dan Misi</a>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- *** PAGES MENU END *** -->
        </div>

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<?php $this->load->view('layouts/footer'); ?>