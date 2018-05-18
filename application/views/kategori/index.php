<?php $this->load->view('layouts/base_start') ?>
<br/><br/><br/><br/>
<div class="container">
  <legend>Kategori Produk </legend>
  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
        <th>Kategori</th>
        <th><a class="btn btn-primary" href="<?php echo base_url('kategori/create') ?>">
            Tambah
          </a>
        </th>
    </thead>
    <tbody>
    <?php foreach ($results as $data) { ?>
    <tr>
      <td>
        <a href="<?php echo base_url('kategori/show/'.$data->id_kategori) ?>">
        <?php echo $data->nama_kategori ?>
      </td>
      <td>
        <?php echo form_open('kategori/destroy/'.$data->id_kategori)  ?>
        <a class="btn btn-info" href="<?php echo base_url('kategori/edit/'.$data->id_kategori) ?>">
          Ubah
        </a>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
        <?php echo form_close() ?>
      </td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <?php echo $links ?>
  <?php } else { ?>
  <div>Tidak ada data</div>
  <?php } ?>
</div>

<?php $this->load->view('layouts/base_end') ?>
