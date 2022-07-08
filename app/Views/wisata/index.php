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
                        <th>Gambar Objek Wisata</th>
                        <th>Kode</th>
                        <th>Harga Anak</th>
                        <th>Harga Dewasa</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ; ?>
                    <?php foreach($ow as $wisata) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <?= $wisata['nama']; ?>
                        </td>
                        <td>
                            <img src="img/<?= $wisata['image'] ?>" width="100" class="rounded-3">
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
                        <div class="bs-component">
                            <a href="/wisata/detail/<?= $wisata['id']; ?>" class="btn btn-md btn-info">Detail</a>
                        </div>
                        </td>
                    </tr>
                    <?php endforeach;  ?>
                    </tbody>
                </table>
            </div><!-- /example -->
        </div>
        <div class="row">
            <!-- Forms ================================================== -->
            <div class="bs-docs-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="well bs-component">
                            <form action="/wisata/save" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <fieldset>
                                <legend>Masukan Data Objek Wisata</legend>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama" class="col-lg-3 control-label">Nama</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ;?>" name="nama" id="nama" placeholder="Masukan Nama ..." value="<?= old('nama') ?>">
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('nama')) ?></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_anak" class="col-lg-3 control-label">Harga Anak</label>
                                            <div class="col-lg-9"> 
                                                <input type="number" class="form-control <?= ($validation->hasError('harga_anak')) ? 'is-invalid' : ''; ?>" name="harga_anak" id="harga_anak" placeholder="Masukkan Harga Anak ..."  value="<?= old('harga_anak') ?>">
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('harga_anak')) ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="kode" class="col-lg-3 control-label">Kode Wisata</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : ''; ?>" name="kode" id="kode" placeholder="Masukan Kode Wisata ..." value="<?= old('kode') ?>">
                                                <strong  style="color: red; background-color:white"><?= ($validation->getError('kode')) ?></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_dewasa" class="col-lg-3 control-label">Harga Dewasa</label>
                                            <div class="col-lg-9">
                                                <input type="number" class="form-control <?= ($validation->hasError('harga_dewasa')) ? 'is-invalid' : ''; ?>" name="harga_dewasa" id="harga_dewasa" placeholder="Masukan Harga Dewasa ..." value="<?= old('harga_dewasa') ?>">
                                                <strong  style="color: red; background-color:white"><?= ($validation->getError('harga_dewasa')) ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="image" class="col-lg-2 custom-file-label control-label">Gambar</label>
                                            <div class="col-lg-2">
                                                <img src="/img/default.png" class="img-thumbnail">
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" id="image" class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" name="image" id="image" onchange="previewImg()">
                                                <strong  style="color: red; background-color:white"><?= ($validation->getError('image')) ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-component">
                                <ul class="pager">
                                    <lib><button type="submit" class="btn btn-md btn-primary">Simpan</button></lib>
                                </ul>
                                </div>
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
<?= $this->endSection('content'); ?>