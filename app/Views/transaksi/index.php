<?= $this->extend('layouts/tamplate'); ?>

<?= $this->section('title'); ?>
    Data | Transaksi
<?= $this->endSection('title'); ?>

<?= $this->section('title-page'); ?>
    Transaksi
<?= $this->endSection('title-page'); ?>

<?= $this->section('content'); ?>
<div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="page-header">

            </div>
            <div class="bs-component">
                <button onclick="window.open('<?= site_url('transaksi/printpdf') ?>','blank')" class="btn btn-sm btn-info">Cetak</button>
                <?php 
                        $pdf = false;
                        if (strpos(current_url(),"printpdf")){
                            $pdf = true;
                        }
                        if($pdf == false){
                    ?>
                <table class="table table-striped table-hover ">
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
                <?php 
                    }
                ?>
            </div><!-- /example -->
        </div>
        <div class="row">
            <!-- Forms ================================================== -->
            <div class="bs-docs-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="well bs-component">
                            <form action="/transaksi/save" method="POST" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <fieldset>
                                <legend>Masukan Data Transaksi</legend>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nofak" class="col-lg-3 control-label">Nomor Faktur</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control <?= ($validation->hasError('nofak')) ? 'is-invalid' : '' ;?>" name="nofak" id="nofak" placeholder="Masukan Nomor Faktur ..." value="<?= old('nofak') ?>">
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('nofak')) ?></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_anak" class="col-lg-3 control-label">Jumlah Anak</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control <?= ($validation->hasError('jumlah_anak')) ? 'is-invalid' : '' ;?>" name="jumlah_anak" id="jumlah_anak" placeholder="Masukan Jumlah Anak ..." value="<?= old('jumlah_anak') ?>">
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('jumlah_anak')) ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="select" class="col-lg-3 control-label">Kode</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" id="select" name="kode">
                                                    <option selected disabled>Pilih Kode Objek Wisata</option>
                                                    <?php foreach($objekwisata as $ow) : ?>
                                                    <option value="<?= $ow['id']; ?>"><?= $ow['kode'] ?> (<?= $ow['nama']; ?>) </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('kode')) ?></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_dewasa" class="col-lg-3 control-label">Jumlah Dewasa</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control <?= ($validation->hasError('jumlah_dewasa')) ? 'is-invalid' : '' ;?>" name="jumlah_dewasa" id="jumlah_dewasa" placeholder="Masukan Jumlah Dewasa ..." value="<?= old('jumlah_dewasa') ?>">
                                                <strong href="#" style="color: red; background-color:white"><?= ($validation->getError('jumlah_dewasa')) ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-component">
                                <ul class="pager">
                                    <li><button type="submit" class="btn btn-md btn-primary">Simpan</button></li>
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
<?= $this->endSection('content'); ?>