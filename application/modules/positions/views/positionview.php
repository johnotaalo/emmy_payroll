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
		<center><div class="row">
			<span class="fa-stack fa-lg icon-wrapper" id = "action-edit" onclick = "">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-pencil fa-stack-1x fa-inverse icon-action"></i>
			</span>

			<span class="fa-stack fa-lg icon-wrapper" id = "action-delete" onclick = "deleteposition(this);">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-trash fa-stack-1x fa-inverse icon-action"></i>
			</span>
		</div></center>
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