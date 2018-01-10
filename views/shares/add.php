<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Share Something</h3>
		</div>
		<div class="panel-body">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group">
					<label for="title">Share Title</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="share title ..." required>
				</div>
				<div class="form-group">
					<label for="body">Share Body</label>
					<textarea name="body" id="body" class="form-control" rows="6" placeholder="share body ..."></textarea>
				</div>
				<div class="form-group">
					<label for="link">Share Link</label>
					<input type="text" name="link" id="link" class="form-control" placeholder="share link ..." required>
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
				<a href="<?php echo ROOT_PATH;?>" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
</div>