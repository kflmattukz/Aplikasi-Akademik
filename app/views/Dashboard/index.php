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
                <td data-label="Active"><?php echo ($admins['active'] === '1') ? 'Actived' : 'Not Activated'; ?></td>
                <td data-label="Last Login"><?= $admins['updated_at'] ?></td>
                <td data-label="Action">
                  <a href="<?= BASEURL ?>/Admin/edit/<?= $admins['id'] ?>" class="ui primary mini button" title="edit action"><i class="ui edit icon"></i>Edit</a>
                  <a href="<?= BASEURL ?>/Admin/delete/<?= $admins['id'] ?>" class="ui red mini button" title="edit action"><i class="ui trash icon"></i> Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <button class="ui green button formAdd"><span><i class="ui add icon"></i></span> Add Admin</button>
      </div>   
    </div>

  </div>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>


<script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            firstName: {
              identifier :'firstName',
              rules : [
                {
                  type    : 'empty',
                  prompt  : 'Please enter your first name'
                }
              ]
            },
            lastName: {
              identifier :'lastName',
              rules : [
                {
                  type    : 'empty',
                  prompt  : 'Please enter your last name'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your email'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid email'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }

        })
      ;
    })
  ;
  </script>

<div class="ui tiny modal">
  <i class="icon close"></i>
  <div class="header">Add Admin</div>
  <div class="content">
  <form action="<?= BASEURL ?>/Auth/register" class="ui large form" method="post">
      <div class="ui stacked">
        <div class="two fields">
          <div class="field">
            <div class="ui left icon input">
              <i class="pencil icon"></i>
              <input type="text" name="firstName" placeholder="First Name">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="pencil icon"></i>
              <input type="text" name="lastName" placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="envelope icon"></i>
            <input type="email" name="email" placeholder="Email">
          </div>
        </div>

        <div class="inline fields">
        <label for="gender">Select your gender:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="L" name="gender" checked="" tabindex="0" class="hidden">
            <label><i class="ui mars icon"></i> Males</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="P" name="gender" tabindex="0" class="hidden">
            <label><i class="ui venus icon"></i> Females</label>
          </div>
        </div>
      </div>
        <button type="submit" class="ui primary submit button">Register</button>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>

<div class="ui mini modal">
  <i class="icon close"></i>
</div>

<?php 
  Flasher::flash();
?>

</body>
</html>