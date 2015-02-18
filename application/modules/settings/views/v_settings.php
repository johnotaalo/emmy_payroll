<script type="text/javascript">
	$(document).ready(function(){
		$('#settings').addClass('active');
	});
</script> 

<div class = "row">
	<div class = "col-md-12 buttons">
		<div class = "col-md-3">
			<div class = "button-clone" data-content = "positions_position" data-type = "position_table">
				<div class = "row">
					<div class = "col-md-5 clone-icon">
						<i class = "ion ion-person fa-5x"></i>
					</div>
					<div class = "col-md-7 button-text">
						<h3>Positions</h3>
					</div>
				</div>
			</div>
		</div>
		<div class = "col-md-3">
			<div class = "button-clone" data-content = "settings_paymentparameters">
				<div class = "row">
					<div class = "col-md-5 clone-icon">
						<i class = "ion ion-card fa-5x"></i>
					</div>
					<div class = "col-md-7 button-text">
						<h4>Payment Parameters</h4>
					</div>
				</div>
			</div>
		</div>
		<div class = "col-md-3">
			<div class = "button-clone" data-content = "settings_branches">
				<div class = "row">
					<div class = "col-xs-5 clone-icon">
						<i class = "fa fa-sitemap fa-5x"></i>
					</div>
					<div class = "col-xs-7 button-text">
						<h3>Branches</h3>
					</div>
				</div>
			</div>
		</div>
		<div class = "col-md-3">
			<div class = "button-clone" data-content = "user_usermanagement">
				<div class = "row">
					<div class = "col-md-5 clone-icon">
						<i class = "ion ion-ios-people fa-5x"></i>
					</div>
					<div class = "col-md-7 button-text">
						<h4>User Management</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class = "col-md-12 settings-content">
		<center><h3 class = "settings-content-instruction">Click on either menus to access a content</h3></center>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.button-clone').click(function(){
			loadpage(this);
		});

		$('#action-button').click(function(){
			
		});
	});

	function buttonclick(that)
	{
		$('#dynamic-heading').text($(that).attr('data-title'));
		$.get(base_url + 'settings/loadview/positions_positionadd', function(data){
			$('#modal-form-content').html(data);
			$('#action-button').removeAttr('disabled');
			$('#action-button').text($(that).attr('data-title'));
		});
		$('#form-modal').modal('show');
	}

	function update()
	{
		form_action = $('#form-action').val();
		var formData = new FormData($('#modal-form')[0]);
		$.ajax({
			url : form_action,
			type: "POST",
			data : formData,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend:function()
			{
				$('#action-button').attr('disabled', 'disabled');
				$('#action-button').text('Please Wait...');
			},
			success:function(data, textStatus, jqXHR) 
			{
				obj = jQuery.parseJSON(data);
				if (obj.type == 'success'){
					$('#action-button').removeAttr('disabled');
					$('#action-button').text('Success');
					$('#modal-form')[0].reset();
					$('#form-modal').modal('hide');
					var active_button = $('.button-clone-active');
					loadpage(active_button);
				};
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
			//if fails      
			}
		});
	}

	function loadpage(that)
	{
		content = $(that).attr('data-content');
		type = $(that).attr('data-type');
		$.get(base_url + 'settings/loadview/' + content + '/' + type, function(data){
			$('.settings-content').html(data);
			$('.button-clone').removeClass('button-clone-active');
			$('.button-clone[data-content='+content+']').addClass('button-clone-active');
			$('table').dataTable();
		});
	}

	function getpositiondetails(that)
	{
		position_id = $(that).attr('data-id');
		data_url = base_url + 'positions/get_position_by_id/ajax/' + position_id;
		$.ajax({
			url: data_url,
			beforeSend: function( xhr ) {
				$('#loader-wrapper').show();
			}
		})
		.done(function( data ) {
			obj = jQuery.parseJSON(data);
			$.get(base_url + 'settings/loadview/positions_positionview', function(data){
				$('.position-profile').html(data);
				$('#image').attr('src', obj.position_cover);
				$('#position_name').text(obj.position_name);
				$('#position_description').text(obj.position_description);
				var date = new Date(obj.date_created);
				alert(date);
			});
			$('#loader-wrapper').hide();
		});
	}
</script>