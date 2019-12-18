<?php

class Admin extends Controller
{
  public function dashboard()
  {
    $data['title'] = 'Admin Dashboard';
    $this->view('Dashboard/index');
  }
}