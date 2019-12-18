<div class="ui two column grid container">
  <div class="ten wide column">
    <div class="ui segment">
      <h3 class="ui header center aligned">Selamat Datang</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid natus autem fuga mollitia. Asperiores suscipit enim distinctio accusantium hic labore voluptatem molestiae eveniet dolorum esse officiis nobis nulla, rem sed numquam eum quos officia provident iste et, debitis consequuntur ad?</p>
    </div>
  </div>
  <div class="six wide column">
    <div class="ui segment">

      <h3 class="ui header center aligned">Login</h3>
      <form action="<?= BASEURL ?>/Auth/login" class="ui form" method="post">
        <div class="field">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username">
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>Forgot Password</label>
          </div>
        </div>
        <button class="ui primary button" type="submit">Login</button>
      </form>
    </div>

    <div class="ui segment">

      <h3 class="ui header center aligned">Register</h3>
      <form action="<?= BASEURL ?>/Auth/register" class="ui form" method="POST">
       <div class="two fields">
        <div class="field">
          <label for="First Name">First Name</label>
          <input type="text" name="firstName" placeholder="First Name">
        </div>
        <div class="field">
          <label for="Last Name">Last Name</label>
          <input type="text" name="lastName" placeholder="Last Name">
        </div>
       </div>
       <div class="field">
         <label for="username">Username</label>
         <input type="text" name="username" id="username" placeholder="Username">
       </div>
       <div class="field">
         <label for="password">Password</label>
         <input type="text" name="password" id="password" placeholder="Password">
       </div>
       <div class="field">
         <label for="email">Email</label>
         <input type="email" name="email" id="email" placeholder="Email">
       </div>

       <div class="inline fields">
        <label for="fruit">Select your gender:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="male" name="gender" checked="" tabindex="0" class="hidden">
            <label><i class="ui mars icon"></i> Males</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="female" name="gender" tabindex="0" class="hidden">
            <label><i class="ui venus icon"></i> Females</label>
          </div>
        </div>
      </div>
      <div class="field">
        <button class="ui positive button" type="submit">Register</button>
      </div>
      </form>

    </div>
  </div>
</div>