<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $data['title'] ?></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/main.css">
</head>
<body>

<!-- NAV Start -->
<div class="ui blue inverted menu">
<div class="header item">
  App Akademik

<?php if(!isset($_SESSION['login'])): ?>
  
  </div>
    <a class="item"><i class="home icon"></i> Home</a>
    <a class="item"><i class="laptop icon"></i> Dashboard</a>
    <a class="item"><i class="user icon"></i> Profile</a>
    <div class="right menu">
      <a href="" class="item"><i class="user circle icon"></i> Register</a>
      <a href="<?= BASEURL ?>/Auth/userlogin" class="item"><i class="sign-in icon"></i> Login</a>
    </div>
  </div>

<?php elseif(isset($_SESSION['login']) AND $_SESSION['login']['activated'] === '1'): ?>

  </div>
    <a class="item"><i class="home icon"></i> Home</a>
    <a href="<?= BASEURL ?>/Admin/dashboard" class="item"><i class="laptop icon"></i> Dashboard</a>
    <a class="item"><i class="user icon"></i> Profile</a>
    <div class="right menu">
      <a href="" class="item"><i class="user circle icon"></i> <?= $_SESSION['login']['user'] ?></a>
      <a href="<?= BASEURL ?>/Auth/logout/<?= $_SESSION['login']['id'] ?>" class="item"><i class="sign-in icon"></i> Logout</a>
    </div>
  </div>

<?php else: ?>

  </div>
    <a class="item"><i class="home icon"></i> Home</a>
    <a class="item"><i class="laptop icon"></i> Dashboard</a>
    <a class="item"><i class="user icon"></i> Profile</a>
    <div class="right menu">
      <a href="" class="item">Your user not Active &ThinSpace;<i class="user circle icon"></i> <?= $_SESSION['login']['user'] ?></a>
      <a href="<?= BASEURL ?>/Auth/logout/<?= $_SESSION['login']['id'] ?>" class="item"><i class="sign-in icon"></i> Logout</a>
    </div>
  </div>

<?php endif; ?>
<!-- NAV End -->