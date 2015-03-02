<div class = "widget">
	<div class = "widget-heading">
		<div class = "row">
			<h4 class = "pull-left"><i class = "ion ion-ios-person"></i> Positions <small>Manage positions in this organization</small></h4>
			<a href = "#" id = 'add_position' class = "button pull-right" onclick="buttonclick(this);" data-content = 'positions_positionadd' data-title = 'Add a Position' data-content = "position"><i class = "ion ion-person-add"></i> Add a Position</a>
		</div>
	</div>
	<div class = "widget-body">
		<div class = "row">
			<div class="col-md-8">
				<table class = "table table-hover table-bordered" id = "positions_table">
					<thead>
						<th>#</th>
						<th style = "text-align: left;">Position Name</th>
						<th>View</th>
						<th>Activation</th>
					</thead>
					<tbody>
					<?php echo $position_table; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-4 position-profile">
				<div class="not-selected">
					<center><h4>No Position Selected</h4></center>
				</div>
			</div>
		</div>
	</div>
</div>