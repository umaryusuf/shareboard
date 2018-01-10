<div class="col-md-4 col-md-offset-4">
	<?php Messages::display(); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title text-center">Register User</h2>
		</div>
		<div class="panel-body">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Enter your name ..." required>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Enter your email ..." required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter password ..." required>
				</div>
				<input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Register">
			</form>
		</div>
		<div class="panel-footer">
			Already have an account? <a href="<?php echo ROOT_PATH ?>users/login">login</a>
		</div>
	</div>
</div>