<!-- jabatan/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <br/>
  <legend>Edit Produk</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('produk/update/'.$data->id_produk); ?>
    <?php echo form_hidden('id_produk', $data->id_produk) ?>
    <div class="form-group">
      <label for="nama_produk">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk"
      value="<?php echo $data->nama_produk ?>">
    </div>
    <div class="form-group">
    <label> Kategori </label>
          <select class="form-control" name ="kategori" id="kategori"> 
          <option selected>
          <?php
            foreach ($kategori as $k) {
              if($k->id_kategori == $data->kategori)
              {
                echo $k->nama_kategori;
              }
            }
          ?>
          </option>
          <?php foreach ($kategori as $k) { ?>
          <option value="<?php echo $k->id_kategori?>"><?php echo $k->nama_kategori?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3"
      value="<?php echo $data->deskripsi ?>">
    </div>
    <div class="form-group">
      <label for="komposisi">Komposisi</label>
      <input type="text" class="form-control" id="komposisi" name="komposisi" placeholder="Masukkan Komposisi" rows="3"
      value="<?php echo $data->komposisi ?>">
    </div>
    <div class="form-group">
      <label for="indikasi">Indikasi</label>
      <input type="text" class="form-control" id="indikasi" name="indikasi" placeholder="Masukkan Indikasi" rows="3"
      value="<?php echo $data->indikasi ?>">
    </div>
    <div class="form-group">
      <label for="stok">Stok</label>
      <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok"
      value="<?php echo $data->stok ?>">
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga"
      value="<?php echo $data->harga ?>">
    </div>

    <a class="btn btn-info" href="<?php echo base_url('produk/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php //$this->load->view('layouts/base_end') ?>