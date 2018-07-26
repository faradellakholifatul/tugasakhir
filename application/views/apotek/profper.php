<?php $this->load->view('layouts/header') ?>

    <div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Home</a>
                </li>
                <li>Profil Perusahaan</li>
            </ul>
        </div>

        <div class="col-md-9">

            <div class="box" id="text-page">
                <h1>Profil Perusahaan</h1>
                <img src="<?php echo base_url('assets/img/blog2.jpg')?>" class="img-responsive" alt="Example blog post alt">
                    </br>

               
                <span align="justify">Healthy Pharma adalah perusahaan industri farmasi pertama di Indonesia 
                yang didirikan oleh Pemerintah Hindia Belanda tahun 1817. Nama perusahaan ini pada awalnya 
                adalah NV Chemicalien Handle Rathkamp & Co. Berdasarkan kebijaksanaan nasionalisasi atas eks p
                erusahaan Belanda di masa awal kemerdekaan, pada tahun 1958, Pemerintah Republik Indonesia 
                melakukan peleburan sejumlah perusahaan farmasi menjadi PNF (Perusahaan Negara Farmasi) 
                Bhinneka Kimia Farma. Kemudian pada tanggal 16 Agustus 1971, bentuk badan hukum PNF diubah 
                menjadi Perseroan Terbatas, sehingga nama perusahaan berubah menjadi PT Healthy Pharma (Persero).
                </span>
                
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