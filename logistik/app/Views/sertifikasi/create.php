<?= $this->extend('layout/index'); ?>
<?= $this->section('isi'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Tambah Data</div>
                </div>
                <?php if (session()->getFlashdata('validation')) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('validation')->listErrors() ?>
                  </div>
                <?php endif; ?>
                <form action="/sertifikasi/store" method="post">
                  <?= csrf_field(); ?>
                  <div class="form-group row">
                    <label for="satker" class="col-sm-2 col-form-label">Satker</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control <?= ($validation->hasError('satker')) ? 'is-invalid' : ''; ?>" id="satker" name="satker" value="<?= old('satker'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pangkat" name="pangkat" value="<?= old('pangkat'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP/NIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nrp" name="nrp" value="<?= old('nrp'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= old('jabatan'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nomor" class="col-sm-2 col-form-label">Nomor Sertifikasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomor" name="nomor" value="<?= old('nomor'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor Hp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hp" name="hp" value="<?= old('hp'); ?>">
                    </div>
                  </div>
              </div>
              <div class="card-action">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="/sertifikasi/index" class="btn btn-danger">Cancel</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>