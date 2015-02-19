<style type="text/css">
	.fa-stack
	{
		color: #333;
	}
</style>
<div class = "row" style = 'padding: 10px; background-color: #f3f3f3;'>
	<center>
		<div>
			<div class = "image-holder">
				<div>
					<img  id = "image"/>
				</div>
			</div>
		</div>
	</center>

	<div class = "col-md-12">
		<div class = "row">
			<center>
				<div class = "icon-circle icon-success"><i class = "fa fa-pencil fa-1x"></i></div>
				<div class = "icon-circle icon-danger"><i class = "fa fa-trash fa-1x"></i></div>
			</center>
		</div>
	</div>
	<div class = "col-md-12">
		<div class="row">
			<div class = "col-md-5">Position Name: </div>
			<div class = "col-md-7" id = "position_name"></div>
		</div>

		<div class="row">
			<div class = "col-md-5">Position Description: </div>
			<div class = "col-md-7" id = "position_description"></div>
		</div>

		<div class="row">
			<div class = "col-md-5">Added on: </div>
			<div class = "col-md-7" id = "position_date"></div>
		</div>

		<div class = "row">
			<a href = "#" id = "activation" class = "btn-block" onclick="activation(this);"></a>
		</div>
	</div>
</div>