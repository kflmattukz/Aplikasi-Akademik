<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="jumbotron">
				<h2 class="text-center">Selamat Datang</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus voluptate beatae aliquam, accusamus voluptatibus quae? Deserunt sed quam cupiditate.
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card card-default">
				<div class="card-header text-center"><strong>Login</strong></div>
				<div class="card-body">
					<form action="<?= BASEURL ?>/Login/Auth" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username"></input>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" class="form-control" id="password" name="password" placeholder="Password"></input>
						</div>
						<button type="submit" class="btn btn-success btn-sm float-right ml-2">Masuk</button>
						<a href="<?= BASEURL ?>/Daftar" class="btn btn-info btn-sm float-right">Daftar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>