<style type="text/css">
	.modal-icon-holder
	{
		border: 4px solid black;
		width: 70px;
		height: 70px;
		text-align: center;
		border-radius: 100%;
		/*color: red;*/
	}

	.modal-icon-item
	{
		line-height: 60px;
		font-weight: bold;
		font-size: 300%;
		/*color: red;*/
	}

	.dialog-modal-message
	{
		font-size: 150%;
		margin: 15px 0;
	}

	.danger
	{
		border-color: red;
		color: red;
	}
	.success
	{
		border-color: green;
		color: green;
	}
</style>
<!-- form modal -->
<div class = "modal fade" id = "form-modal">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
				<h4 class = "modal-title" id = "dynamic-heading"></h4>
			</div>

			<div class = "modal-body">
				<form id = "modal-form" role = "form" method = "POST" enctype="multipart/form-data">
					<div id = 'modal-form-content'></div>
				</form>
			</div>

			<div class = "modal-footer">
				<div class = "pull-left"><small><i>Please make sure that all fields have been filled</i></small></div>
				<button type = "button" class = "btn btn-primary" data-dismiss = "modal">Close</button>
				<button type = "button" class = "btn btn-success" id = "action-button" data-role = "" disabled="disabled" onclick="update();">Error!</button>
			</div>
		</div>
	</div>
</div>

<!-- dialog modal -->
<div class = "modal fade" id = "dialog-modal">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-body">
				<center>
				<div class = "modal-icon-holder danger">
					<span class = "modal-icon-item">?</span>
				</div>

				<div class = "dialog-modal-message">
					<span id = "dialog-message-content"></span>

					<br />
					<div style = "margin-top: 20px;">
						<a class = "btn btn-success btn-outline" onclick="" id = "confirm">Yes</a>
						<a class = "btn btn-danger btn-outline" onclick="cancel();">No</a>
					</div>
				</div>
				</center>
			</div>
		</div>
	</div>
</div>

<!-- success modal -->
<div class = "modal fade" id = "success-modal">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-body">
				<center>
				<div class = "modal-icon-holder success">
					<span class = "modal-icon-item"><i class = 'fa fa-check'></i></span>
				</div>

				<div class = "dialog-modal-message">
					<span id = "success-message-content"></span>

					<br />
					<div style = "margin-top: 20px;">
						<a class = "btn btn-success btn-outline" onclick="cancel();" >Awesome! Got it</a>
					</div>
				</div>
				</center>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function cancel()
	{
		$('.modal').modal('hide');
	}
</script>