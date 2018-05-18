<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <br/>
  <legend>Lihat Kategori</legend>
  <div class="content">
    <div class="form-group">
      <label for="jabatan">Kategori</label>
      <p><?php echo $data->nama_kategori ?></p>
    </div>
    <a class="btn btn-info" href="<?php echo base_url('kategori/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>