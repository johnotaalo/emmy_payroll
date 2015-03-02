<div class = "input-group">
	<span class = "input-group-addon">Branch Name</span>
	<input type = "text" class = "form-control" placeholder = "Branch Name" name = "branch_name" id = "branch_name">
</div>

<div class = "input-group">
	<span class = "input-group-addon">Branch Location</span>
	<textarea name = "branch_location" class = "form-control" id = "branch_location"></textarea>
</div>

<input type = 'hidden' name = "action" value = '<?php echo base_url(); ?>branches/ajax_addbranches' id = "form-action"/>