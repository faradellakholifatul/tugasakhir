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
                <h1>Konfirmasi dan Riwayat Pembelian</h1>
                <p>Rekening kami:<br/>
                    Mandiri 12345600000 
                    a/n Faradella Widya P.<br/>
                    BNI 0000054321 
                    a/n Kholifatul Mahmudah
                </p>

                 <hr>
                 <table class="table table-striped">
                    <thead>
                        <th width="15%">ID Order</th>
                        <th width="15%">Tanggal</th>
                        <th width="15%">Total Bayar</th>
                        <th width="25%">Bukti Pembayaran</th>
                        <th width="15%">Status</th>
                        <th width="15%">Konfirmasi</th>
                    </thead>
                    <tbody>
                    <?php foreach ($riwayat as $key) { ;?>
                        <?php echo form_open_multipart('User/update/'.$key->id)?>
                    <tr>
                    <td>
                        <?php echo $key->id ?>
                        <a href="<?php echo base_url('user/orderdetail/'.$key->id) ?>"><span class="label label-success pull-right">Lihat Detail</span></a>
                    </td>
                    <td>
                        <?php echo $key->tanggal ?>
                    </td>
                    <td>
                        <?php echo $key->total ?>
                    </td>
                    <td>
                         <?php if(empty($key->bukti_tf))
                        {
                           ?> <input type="file" name="bukti_tf" size="20"> <?php
                        } 
                        else
                        {
                            ?>  <img src="<?php echo base_url('assets/buktitf/'.$key->bukti_tf)?>" width="100" height="100">
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo $key->status ?>
                    </td>
                    <td>
                    <?php if(empty($key->bukti_tf))
                        {
                           ?><button type="submit" class="btn btn-primary">Submit</button>
                           <?php echo form_close() ?><?php
                         } ?>
                        
                    </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
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