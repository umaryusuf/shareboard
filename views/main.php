<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Shareboard</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
					<li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php if(isset($_SESSION["is_logged_in"])): ?>
					<li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION["user_data"]["name"]; ?></a></li>
					<li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
				<?php else : ?>
					<li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
					<li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
				<?php endif; ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<?php require($view); ?> 
		</div>
	</div>


	<script src="<?php echo ROOT_URL; ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo ROOT_URL; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>