<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <h1><?php echo "Laporan $title" ?></h1>
    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            
                            <th width="50%">Nama Produk</th>
                            <th width="50%">Jumlah Terjual</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($order as $data) { ?>
                        <tr>
                            
                            <td><?php echo $data->nama_produk?></td>
                            <td><?php echo $data->jumlahterjual?></td>
      

<!-- /page content -->

                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
</body>
</html>