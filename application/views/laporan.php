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
                            <th width="5%">No</th>
                            <th width="15%">Tanggal Order</th>
                            <th width="15%">Nama</th>
                            <th width="20%">Alamat</th>
                            <th width="15%">No.Telp</th>
                            <th width="15%">Email</th>
                            <th width="15%">Status</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($order as $data => $value) { ?>
                        <tr>
                            <td><?php echo ++$data ?></td>
                            <td><?php echo $value['tanggal']?></td>
                            <td><?php echo $value['nama']?></td>
                            <td><?php echo $value['alamat']?></td>
                            <td><?php echo $value['notelp']?></td>
                            <td><?php echo $value['email']?></td>
                            <td>
                            <?php 
						    switch ($value['status']) {
                                case 'belum di bayar':
                                echo '<span class="label label-danger">Belum di bayar</span>';
                                break;
                                case 'sudah di bayar':
                                echo '<span class="label label-success">Sudah di bayar</span>';
                                break;
                                default:
                                echo '<span class="label label-default">Undefined</span>';
                                break;
                            } ?>
                            </td>
      

<!-- /page content -->

                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
</body>
</html>