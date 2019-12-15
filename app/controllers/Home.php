<?php

class Home extends Controller
{
  public function index()
  {
  	$data['active'] = 'Home';
    $data['title'] = 'Home Page';
    $this->view('template/header' , $data);
    $this->view('Home/index');
    $this->view('template/footer');
  }
}