<div class="container">
  <div class="row justify-content-center">
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?= BASEURL ?>/Siswa/tambah" class="btn btn-success mb-2">Tambah Siswa</a>
      <div class="card card-default">
      <div class="card-header">Daftar Siswa</div>
        <div class="card-body">
          <ul class="list list-group">
            <?php foreach ($data['siswa'] as $siswa): ?>
              <li class="list-group-item mr-5"><?= $siswa['nama'] ?>
                <a href="<?= BASEURL ?>/Siswa/detail/<?= $siswa['id'] ?>" class="btn btn-primary btn-sm float-right ml-2">detail</a>
                <a href="<?= BASEURL ?>/Siswa/edit/<?= $siswa['id'] ?>" style="color: white" class="btn btn-warning btn-sm float-right ml-2">Ubah</a>
                <button onclick="delDataSiswa(<?= $siswa['id'] ?>)" class="btn btn-danger btn-sm float-right delSiswa">Hapus</button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>