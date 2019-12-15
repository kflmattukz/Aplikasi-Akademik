<?php
  if(!isset($_SESSION['userlogin'])) {
    header('Location: ' . BASEURL);
    exit;
  }
?>