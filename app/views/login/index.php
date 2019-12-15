<div class="container">
  <h3 class="text-center">Silahkan Login</h3>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card card-default">
        <div class="card-header text-center"><strong>Login</strong></div>
        <div class="card-body">
          <form action="<?= BASEURL ?>/Login/Auth" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username"placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label class="form-check-label" for="remember">Ingat Saya</label>
            </div>
            <button type="submit" class="btn btn-success btn-sm mt-2">Masuk</button>
            <button type="submit" class="btn btn-success btn-sm mt-2">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>