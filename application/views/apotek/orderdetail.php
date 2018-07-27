<?php $this->load->view('layouts/header') ?>

<div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Home</a>
                </li>
                <li>Riwayat Pembelian</li>
            </ul>

        </div>

        <div class="col-md-12">


            <div class="box" id="contact">
                <h1>Riwayat Pembelian</h1>

                 <hr>
                 <table class="table table-striped">
                    <thead>
                        <th width="15%">Nama Produk</th>
                        <th width="15%">Jumlah</th>
                    </thead>
                    <tbody>
                    <?php foreach ($orderdetail as $key) { ;?>
                        <tr>
                            <td><?php echo $key->nama_produk?></td>
                            <td><?php echo $key->jml?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <a href="<?php echo base_url() ?>user/riwayat" class="btn btn-primary">Kembali ke halaman history</a></button>
                </div>
                <!-- /.row -->

            </div>


        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<?php $this->load->view('layouts/footer'); ?>