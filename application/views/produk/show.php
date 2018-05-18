<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <br/>
  <legend>Lihat Produk</legend>
  <div class="content">
    <div class="form-group">
      <label for="nama_produk">Produk</label>
      <p><?php echo $data->nama_produk ?></p>
    </div>
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <p><?php foreach ($kategori as $k)
        {
          if($k->id_kategori == $data->kategori)
          {
            echo $k->nama_kategori;
          }
        }
        ?></p>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <p><?php echo $data->deskripsi ?></p>
    </div>
    <div class="form-group">
      <label for="komposisi">Komposisi</label>
      <p><?php echo $data->komposisi ?></p>
    </div>
    <div class="form-group">
      <label for="indikasi">Indikasi</label>
      <p><?php echo $data->indikasi ?></p>
    </div>
    <div class="form-group">
      <label for="stok">Stok</label>
      <p><?php echo $data->stok ?></p>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <p><?php echo $data->harga ?></p>
    </div>
    <a class="btn btn-info" href="<?php echo base_url('produk/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>