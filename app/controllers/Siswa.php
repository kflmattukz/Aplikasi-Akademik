<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['active'] = 'Siswa';
    $data['title'] = 'Daftar Siswa';
    $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('template/header' , $data);
    $this->view('template/auth');
    $this->view('Siswa/index' , $data);
    $this->view('template/footer');
  }

  public function detail($siswaId)
  {
    $data['title'] = 'Detail Siswa';
    $data['siswa'] = $this->model('Siswa_model')->getSiswaById($siswaId);
    $this->view('template/header' , $data);
    $this->view('template/auth');
    $this->view('Siswa/detail' ,$data);
    $this->view('template/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Siswa';
    $this->view('template/header' , $data);
    $this->view('template/auth');
    $this->view('Siswa/tambah');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Siswa_model')->addSiswa($_POST)){
    	Flasher::setFlash('Data siswa Berhasil' , 'Ditambah' , 'success');
    	header('Location: ' . BASEURL . '/Siswa' );
    	exit;
    } else {
    	Flasher::setFlash('Data siswa Gagal' , 'Ditambah' , 'danger');
    	header('Location: ' . BASEURL . '/Siswa' );
    	exit;
    }
  }

  public function edit($siswaId)
  {
  	$data['title'] = 'Edit Data Siswa';
  	$data['siswa'] = $this->model('Siswa_model')->getSiswaById($siswaId);
    $this->view('template/header' , $data);
    $this->view('template/auth');
  	$this->view('Siswa/edit' , $data);
  	$this->view('template/footer');
  }

  public function update()
  {
  	if ($this->model('Siswa_model')->updateSiswa($_POST)){
    	Flasher::setFlash('Data siswa Berhasil' , 'Diubah' , 'success');
    	header('Location: ' . BASEURL . '/Siswa' );
    	exit;
    } else {
    	Flasher::setFlash('Data siswa Gagal' , 'Diubah' , 'danger');
    	header('Location: ' . BASEURL . '/Siswa' );
    	exit;
    }	
  }

  public function delete($siswaId)
  {
  	if($this->model('Siswa_model')->delSiswaById($siswaId)){
  		Flasher::setFlash('Data siswa Berhasil' , 'Dihapus' , 'success');
  		header('Location: ' . BASEURL . '/Siswa');
  		exit;
  	} else {
  		Flasher::setFlash('Data siswa Gagal' , 'Dihapus' , 'danger');
  		header('Location: ' . BASEURL . '/Siswa');
  		exit;
  	}
  }

}