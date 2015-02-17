<script type="text/javascript">
	$(document).ready(function(){
		$('#settings').addClass('active');
	});
</script> 

<div class = "row">
	<div class = "col-md-12 buttons">
		<div class = "col-md-3">
			<div class = "button-clone" data-content = "settings_position">
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
			content = $(this).attr('data-content');
			$.get(base_url + 'settings/loadview/' + content, function(data){
				$('.settings-content').html(data);
				$('.button-clone').removeClass('button-clone-active');
				$('.button-clone[data-content='+content+']').addClass('button-clone-active');
				$('table').dataTable();
			});
		});
	});
</script>