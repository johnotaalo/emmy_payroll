<div class = "widget">
	<div class = "widget-heading">
		<div class = "row">
			<h4 class = "pull-left"><i class = "fa fa-sitemap"></i> Branches <small>Manage branches in this organization</small></h4>
			<a href = "#" id = 'add_branch' class = "button pull-right" onclick="buttonclick(this);" data-content = 'branches_branchesadd' data-title = 'Add a Branch' data-content = "branch"><i class = "ion ion-plus"></i> Add a Branch</a>
		</div>
	</div>
	<div class = "widget-body">
		<?php echo $branches_table;die; ?>
	</div>
</div>