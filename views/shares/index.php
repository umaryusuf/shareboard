<div class="col-md-12">
	<?php if(isset($_SESSION["is_logged_in"])): ?>
	<a href="<?php echo ROOT_PATH ?>shares/add" class="btn btn-success btn-share">Share Something</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item): ?>
		<div class="well">
			<h3><?php echo $item["title"]; ?></h3>
			<small><?php echo $item["create_date"]; ?></small>
			<hr>
			<p><?php echo $item["body"]; ?></p>
			<br>
			<?php echo $item["link"]; ?> <a href="<?php echo $item["link"]; ?>" class="btn btn-default text-primary" target="_blank">Go to website</a> 
		</div>
	<?php endforeach; ?>
</div>