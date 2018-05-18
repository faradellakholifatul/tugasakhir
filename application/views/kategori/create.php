<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <br/><br/><br/>
  <legend>Tambah Kategori</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('kategori/store'); ?>

    <div class="form-group">
      <label for="kategori">Kategori</label>
      <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Kategori">
    </div>

    <a class="btn btn-info" href="<?php echo base_url() ?>kategori">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>