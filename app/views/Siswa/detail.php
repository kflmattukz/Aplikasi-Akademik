<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Detail Siswa</div>
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item"><?= $data['siswa']['nama'] ?></li>
            <li class="list-group-item"><?= $data['siswa']['jk'] ?></li>
            <li class="list-group-item"><?= $data['siswa']['tmpLhr'] ?></li>
            <li class="list-group-item"><?= $data['siswa']['tglLhr'] ?></li>
          </ul>
          <a href="<?= BASEURL ?>/Siswa" class="btn btn-info btn-sm float-right mt-2">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>