<?php $this->load->view('layouts/header') ?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <?php echo form_open("Cart/update_cart") ?>
                            <h1>Shopping cart</h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1; ?>

                                    <?php foreach ($this->cart->contents() as $items): ?>

                                        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $items['name']; ?>

                                                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                                        <p>
                                                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                            <?php endforeach; ?>
                                                        </p>

                                                    <?php endif; ?>
                                            </td>
                                            <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                                            </td>
                                            <td>Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
                                            <td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                            <td><a href="<?php echo base_url('Cart/remove_cart/'.$items['rowid']) ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php $i++; ?>

                                    <?php endforeach; ?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <th colspan="4">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <input type="submit" class="btn btn-success" value="Update Cart">
                                    <a href="<?php echo base_url() ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url('order/addorder') ?>" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                        </form>
                        

                    </div>
                    <!-- /.box -->

                    
                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted"></p>
                    </div>
                    
                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <?php $this->load->view('layouts/footer'); ?>