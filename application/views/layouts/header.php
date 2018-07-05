<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url()?>">Healthy Pharma</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>">HOME</a></li>
                <li><a href=#>PROFIL</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUK<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()?>kategori">Kategori Produk</a></li>
                        <li><a href="<?php echo base_url()?>produk">Produk</a></li>
                    </ul>
                </li>
                <li><a href=#>HUBUNGI KAMI</a></li>
                <li><a href=#><img class="image" border="0" src="assets/image/troli.png" width="17px" height="15px">TROLI</a></li>
                <?php if($this->session->status==('Logged'))
                            { ?>
                                <li><a href="<?php echo base_url()?>Login/logout"><img class="image" border="0" src="assets/image/login.png" width="12px" height="13px">LOGOUT</a></li>           
                            <?php }
                            else
                            { ?>
                                <li><a href="<?php echo base_url()?>login"><img class="image" border="0" src="assets/image/login.png" width="12px" height="13px">LOGIN</a></li>
                            <?php } ?>
            </ul>
        </div>
</nav>