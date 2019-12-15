<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Edit Data Siswa</div>
        <div class="card-body">
          <form action="<?= BASEURL ?>/Siswa/update" method="POST">
            <input type="hidden" name="id" value="<?= $data['siswa']['id'] ?>">
            <div class="form-group">
              <label for="name">Nama</label>
              <input class="form-control" type="text" name="name" id="name" value="<?= $data['siswa']['nama'] ?>"></input>
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select name="jk" id="jk" class="custom-select">
                <?php if($data['siswa']['jk'] == 'L'): ?>
                  <option value="L" selected>Laki-laki</option>
                  <option value="P">Perempuan</option>
                <?php else :?>
                  <option value="L">Laki-laki</option>
                  <option value="P" selected>Perempuan</option>
                <?php endif;?>
              </select>
            </div>
            <div class="form-group">
              <label for="tmpLhr">Tempat Lahir</label>
              <input class="form-control" type="text" name="tmpLhr" id="tmpLhr" value="<?= $data['siswa']['tmpLhr'] ?>"></input>
            </div>
            <div class="form-group">
              <label for="tglLhr">Tanggal Lahir</label>
              <input class="form-control" type="text" name="tglLhr" id="tglLhr" value="<?= $data['siswa']['tglLhr'] ?>"></input>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Ubah Data Siswa</button>
            <a href="<?= BASEURL ?>/Siswa" class="btn btn-info btn-sm">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>