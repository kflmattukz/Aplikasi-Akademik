<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Home Page';
    $this->view('Template/header' , $data);
    $this->view('Home/index');
    $this->view('Template/footer');
  }
}