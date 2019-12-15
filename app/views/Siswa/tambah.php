<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Tambah Siswa</div>
        <div class="card-body">
          <form action="<?= BASEURL ?>/Siswa/store" method="POST">
            <div class="form-group">
              <label for="name">Nama</label>
              <input class="form-control" type="text" name="name" id="name"></input>
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select name="jk" id="jk" class="custom-select">
                <option selected>PILIH JENIS KELAMIN</option>}
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="tmpLhr">Tempat Lahir</label>
              <input class="form-control" type="text" name="tmpLhr" id="tmpLhr"></input>
            </div>
            <div class="form-group">
              <label for="tglLhr">Tanggal Lahir</label>
              <input class="form-control" type="text" name="tglLhr" id="tglLhr"></input>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Tambah Siswa</button>
            <a href="<?= BASEURL ?>/Siswa" class="btn btn-info btn-sm">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>