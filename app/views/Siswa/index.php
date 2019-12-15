<div class="container">
 
  <div class="row">
    <!-- MENU -->
    <div class="col-md-3">
      <div class="card card-default">
        <div class="card-header"><strong>Menu</strong></div>
        <div class="card-body">
          <a href="#" title="">profile</a>
        </div>
      </div>
    </div>
    <!-- View the Menu -->
    <div class="col-md-9">
      <div class="card card-default">
      <div class="card-header"><strong>Daftar Siswa</strong></div>
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
      <a href="<?= BASEURL ?>/Siswa/tambah" class="btn btn-success float-right mt-2">Tambah Siswa</a>
    </div>
  </div>

</div>