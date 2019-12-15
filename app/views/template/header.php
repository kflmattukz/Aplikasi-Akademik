<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title><?= $data['title'] ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= BASEURL ?>">App Academic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php if (isset($_SESSION['userlogin'])): ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($data['active'] === 'Home') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= BASEURL ?>/Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo ($data['active'] === 'Siswa') ? 'active' : '' ; ?>">
        <a class="nav-link" href="<?= BASEURL ?>/Siswa">Siswa <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <i>Selamat Datang</i>
      <a href="<?= $_SESSION['user'] ?>" class="ml-2"><strong><?= $_SESSION['user'] ?></strong></a>
      <a href="<?= BASEURL?>/Login/AuthLogout/<?= $_SESSION['id'] ?>" class="btn btn-outline-success btn-sm my-2 my-sm-0 ml-2" type="submit">Logout</a>
    </form>
  <?php else: ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($data['active'] === 'Home') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-info btn-sm my-2 my-sm-0 mr-2" type="submit">Daftar</button>
      <a href="<?= BASEURL?>/Login/User_login" class="btn btn-outline-success btn-sm my-2 my-sm-0 " type="submit">Masuk</a>
    </form>

  <?php endif; ?>
  </div>
</nav>
<div class="container mt-3">