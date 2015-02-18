<div class = "input-group">
	<span class = "input-group-addon">Position Name</span>
	<input type = "text" class = "form-control" placeholder = "Position Name" name = "position_name" id = "pos_name">
</div>

<div class = "input-group">
	<span class = "input-group-addon">Cover Image</span>
	<input type = "file" class = "form-control" placeholder = "Upload a cover image" name = "position_cover" id = "pos_cover">
</div>

<div class = "input-group">
	<span class = "input-group-addon">Description</span>
	<textarea name = "position_description" class = "form-control" id = "pos_description"></textarea>
</div>

<input type = 'hidden' name = "action" value = '<?php echo base_url(); ?>positions/ajax_addposition' id = "form-action"/>