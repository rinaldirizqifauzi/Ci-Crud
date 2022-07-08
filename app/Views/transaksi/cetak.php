<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1><center>Transaksi</center></h1>
                </div>
                <div class="bs-component">
                
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nofak</th>
                            <th>Kode</th>
                            <th>Nama Objek</th>
                            <th>Harga Tiket Anak</th>
                            <th>Jumlah Anak</th>
                            <th>Pendapatan Anak</th>
                            <th>Harga Tiket Dewasa</th>
                            <th>Jumlah Dewasa </th>
                            <th>Pendapatan Dewasa </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($transaksi as $tr) : 
                                $pdpt_anak = $tr->harga_anak * $tr->jumlah_anak;
                                $pdpt_dewasa = $tr->harga_dewasa * $tr->jumlah_dewasa;
                                ?>
                                <tr align="center">
                                    <td><?= $i++; ?></td>
                                    <td><?= $tr->nofak;  ?></td>
                                    <td><?= $tr->kode;  ?></td>
                                    <td><?= $tr->nama;  ?></td>
                                    <td><?= $tr->harga_anak;  ?></td>
                                    <td><?= $tr->jumlah_anak;  ?></td>
                                    <td><?= $pdpt_anak; ?></td>
                                    <td><?= $tr->harga_dewasa;  ?></td>
                                    <td><?= $tr->jumlah_dewasa;  ?></td>
                                    <td><?= $pdpt_dewasa ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div><!-- /example -->
            </div>
        </div>
    </div>
</body>
</html>

