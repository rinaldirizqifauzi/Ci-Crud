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
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Harga Anak</th>
                        <th>Harga Dewasa</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ; ?>
                    <?php foreach($objekwisata as $wisata) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <?= $wisata['nama']; ?>
                        </td>
                        <td>
                        <?= $wisata['kode']; ?>

                        </td>
                        <td>
                        <?= $wisata['harga_anak']; ?>
                        </td>
                        <td>
                            <?= $wisata['harga_dewasa']; ?>
                        </td>
                        <td>
                            <a href="/wisata/detail/<?= $wisata['id']; ?>" class="btn btn-md btn-info">Detail</a>
                            <a href="/wisata/edit/<?= $wisata['id']; ?>" class="btn btn-md btn-warning">Edit</a>
                            <a href="/wisata/delete/<?= $wisata['id']; ?>" class="btn btn-md btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;  ?>
                    </tbody>
                </table>
            </div><!-- /example -->
            <div class="row">
                <!-- Forms ================================================== -->
                <div class="bs-docs-section">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <div class="well bs-component">
                                <form action="/wisata/update/<?= $ow['id']; ?>" method="POST" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <fieldset>
                                    <legend>Masukan Data Objek Wisata</legend>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama" class="col-lg-3 control-label">Nama</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama ..." value="<?= $ow['nama']; ?>">
                                                    <strong href="#" style="color: red; background-color:white"></strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga_anak" class="col-lg-3 control-label">Harga Anak</label>
                                                <div class="col-lg-9"> 
                                                    <input type="number" class="form-control" name="harga_anak" id="harga_anak" placeholder="Masukkan Harga Anak ..."  value="<?= $ow['harga_anak']; ?>">
                                                    <strong href="#" style="color: red; background-color:white"></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="kode" class="col-lg-3 control-label">Kode Wisata</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Masukan Kode Wisata ..." value="<?= $ow['kode']; ?>">
                                                    <strong  style="color: red; background-color:white"></strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga_dewasa" class="col-lg-3 control-label">Harga Dewasa</label>
                                                <div class="col-lg-9">
                                                    <input type="number" class="form-control" name="harga_dewasa" id="harga_dewasa" placeholder="Masukan Harga Dewasa ..." value="<?= $ow['harga_dewasa']; ?>">
                                                    <strong  style="color: red; background-color:white"></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs-component">
                                    <ul class="pager">
                                        <li><button type="submit" class="btn btn-md btn-primary">Ubah</button></li>
                                        <li><a href="/wisata" class="btn btn-md btn-primary">Kembali</a></li>
                                    </ul>
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>