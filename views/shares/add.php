<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Share Something</h3>
	</div>
	<div class="panel-body">
		<form>
			<div class="form-group">
				<label>Share Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Share Body</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div>
				<label>Share Link</label>
				<input type="text" name="link" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
		</form>
	</div>
</div>
