<?= $this->extend('layouts/tamplate'); ?>

<?= $this->section('title'); ?>
    Data | Objek Wisata
<?= $this->endSection('title'); ?>

<?= $this->section('title-page'); ?>
    Objek Wisata
<?= $this->endSection('title-page'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
            </div>
            <div class="bs-component">
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Harga Anak</th>
                        <th>Harga Dewasa</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?= $ow['nama']; ?>
                        </td>
                        <td>
                        <?= $ow['kode']; ?>

                        </td>
                        <td>
                        <?= $ow['harga_anak']; ?>
                        </td>
                        <td>
                            <?= $ow['harga_dewasa']; ?>
                        </td>
                        <td>
                        <a href="/wisata/edit/<?= $ow['id']; ?>" class="btn btn-md btn-warning">Edit</a>
                            <a href="/wisata/delete/<?= $ow['id']; ?>" class="btn btn-md btn-danger">Hapus</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>