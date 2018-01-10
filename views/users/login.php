<div class="col-md-4 col-md-offset-4">
	<?php Messages::display(); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title text-center">Login User</h2>
		</div>
		<div class="panel-body">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Enter your email ..." >
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter password ..." >
				</div>
				<input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Login">
			</form>
		</div>
		<div class="panel-footer">
			Don't have an account? <a href="<?php echo ROOT_PATH ?>users/register">register</a>
		</div>
	</div>
</div>