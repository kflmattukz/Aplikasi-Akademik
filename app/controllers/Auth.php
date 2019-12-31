<?php

class Auth extends Controller
{
  public function login()
  {
    if ($data = $this->model('Users_model')->login($_POST)) {
      
      $_SESSION['login'] = [
        'id' => $data['id'],
        'user' => $data['firstName'],
        'activated' =>$data['active']
      ];

      Flasher::setFlash('Login Success' , 'Welcome ' . $_SESSION['login']['user'] , 'success');
      header('Location: ' . BASEURL . '/Home');
      exit;

    } else {
      Flasher::setFlash('Login Failed' , 'Username/Password Wrong' , 'error');
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function logout($userId)
  {
    if ($this->model('Users_model')->logout($userId)) {
      unset($_SESSION['login']);
      Flasher::setFlash('Logout Success' , 'Good Bye' , 'success');
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      Flasher::setFlash('Logout Failed' , 'Something Wrong' , 'error');
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function register()
  {
    if ($this->model('Users_model')->addUser($_POST)) {
      Flasher::setFlash('Register Success' , '!' , 'success');
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      Flasher::setFlash('Register Failed' , 'Somthing Wrong' , 'success');
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function userlogin()
  {

    $data['title'] = 'Login Page';
    $this->view('template/header' , $data);
    $this->view('Home/login');
    $this->view('template/footer');

  }

  public function userregis()
  {
    
    $data['title'] = 'Register Page';
    $this->view('template/header' , $data);
    $this->view('Home/register');
    $this->view('template/footer');

  }

}