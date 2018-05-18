<?php $this->load->view('layouts/base_start') ?>
<br/><br/><br/><br/>
<div class="container">
  <legend>Kategori Produk </legend>
  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
        <th width="10%">Nama Produk</th>
        <th width="5%">Kategori</th>
        <th width="25%">Deskripsi</th>
        <th>Komposisi</th>
        <th width="20%">Indikasi</th>
        <th>Stok</th>
        <th>Harga</th>
        <th width="15%"><a class="btn btn-primary" href="<?php echo base_url('produk/create') ?>">
            Tambah
          </a>
        </th>
    </thead>
    <tbody>
    <?php foreach ($results as $data) { ?>
    <tr>
      <td>
        <a href="<?php echo base_url('produk/show/'.$data->id_produk) ?>">
        <?php echo $data->nama_produk ?>
      </td>
      <td>
        <?php foreach ($kategori as $k)
        {
          if($k->id_kategori == $data->kategori)
          {
            echo $k->nama_kategori;
          }
        }
        ?>
      </td>
      <td><?php echo $data->deskripsi ?></td>
      <td><?php echo $data->komposisi ?></td>
      <td><?php echo $data->indikasi ?></td>
      <td><?php echo $data->stok ?></td>
      <td><?php echo $data->harga ?></td>
        <td>
            <?php echo form_open('produk/destroy/'.$data->id_produk)  ?>
            <a class="btn btn-info" href="<?php echo base_url('produk/edit/'.$data->id_produk) ?>">
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

<?php //$this->load->view('layouts/base_end') ?>
