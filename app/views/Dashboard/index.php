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
  <div class="ui grid">
    <div class="four wide column">
      <div class="ui container small segment">
        <h3 class="ui header center aligned">Admin</h3>
      </div>
      
      <div class="ui fluid vertical menu">
        <a href="<?= BASEURL ?>/Admin/daftarAdmin" class="active blue item">
          Daftar Admin
        </a>
        <a href="<?= BASEURL ?>" class="item ">
          Home
        </a>
        <a class="item">
          Updates
        </a>
      </div>

    </div>
    <div class="twelve wide column">
      <div class="ui container">
        
        <div class="ui small menu">
          <a class="item center aligned">Daftar Users</a>
          <div class="right menu">
            <a href="" class="item"><i class="user circle icon"></i> <?= $_SESSION['login']['user'] ?></a>
            <div class="item">
              <a href="<?= BASEURL ?>/Auth/logout/<?= $_SESSION['login']['id'] ?>" class="ui primary button"><i class="sign-in icon"></i> Logout</a> 
            </div>
          </div>
        </div>
          
        <table class="ui small celled table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Active</th>
              <th>Last Login</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['adminList'] as $admins): ?>
              <tr>
                <td data-label="Name"><?= $admins['firstName'] ?> <?= $admins['lastName'] ?></td>
                <td data-label="Username"><?= $admins['username'] ?></td>
                <td data-label="Email"><?= $admins['email'] ?></td>
                <td data-label="Gender"><?= $admins['gender'] ?></td>
                <td data-label="Active"><?php echo ($admins['activated'] === '1') ? 'Actived' : 'Not Activated'; ?></td>
                <td data-label="Last Login"><?= $admins['updated_at'] ?></td>
                <td data-label="Action">
                  <a href="<?= BASEURL ?>/Admin/edit/<?= $admins['id'] ?>" class="ui primary mini button" title="edit action"><i class="ui edit icon"></i>Edit</a>
                  <a href="<?= BASEURL ?>/Admin/delete/<?= $admins['id'] ?>" class="ui red mini button" title="edit action"><i class="ui trash icon"></i> Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>


      </div>

    </div>

  </div>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= BASEURL ?>/js/main.js"></script>    
</body>
</html>