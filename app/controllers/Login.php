<?php

class Login extends Controller
{
  public function User_login()
  {
    $data['title'] = "Login Page";
    $this->view('template/header' , $data);
    $this->view('login/index');
    $this->view('template/footer');
  }

  public function Auth(){

    $data = $this->model('User_model')->login($_POST);
    if (!empty($data) ){
      $_SESSION['userlogin'] = $data['roles'];
      $_SESSION['id'] = $data['id'];
      $_SESSION['user'] = $data['username'];
      Flasher::setFlash('Behasil' , 'Login' , 'success');
      header('Location: ' . BASEURL . '/Home');
    } else {
      Flasher::setFlash('Gagal Password/Username' , 'Salah' , 'error');
      header('Location: ' . BASEURL . '/Home');
    }
  }

  public function AuthLogout($siswaId){
    if ($this->model('User_model')->logout($siswaId)) {
      unset($_SESSION['userlogin']);
      unset($_SESSION['id']);{
      unset($_SESSION['user']);
      Flasher::setFlash('Behasil' , 'Logout' , 'success');
      header('Location: ' . BASEURL . '/Home');}
    } else {
      Flasher::setFlash('Gagal' , 'Logout' , 'error');
    }
  }

}