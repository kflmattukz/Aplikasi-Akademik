<?php

class Admin extends Controller
{
  public function dashboard()
  {
    $data['title'] = 'Admin Dashboard';
    $data['adminList'] = $this->model('Users_model')->getAllUsers();
    $this->view('Dashboard/index' , $data);
  }


  public function daftarAdmin()
  {
  	$data['title'] = 'Daftar Admin';

  	$this->view('Dashbiard/daftarAdmin' , $data);
  }

  public function delete($adminId)
  {
    if ($this->model('Users_model')->delAdminById($adminId)) {
      Flasher::setFlash('Delete Success' , '!' , 'success');
      header('Location: ' . BASEURL . '/Admin/dashboard');
      exit;
    } else {
      Flasher::setFlash('Delete Failed' , '!' , 'error');
      header('Location: ' . BASEURL . '/Admin/dashboard');
      exit;
    }
  }

}