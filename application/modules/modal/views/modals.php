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