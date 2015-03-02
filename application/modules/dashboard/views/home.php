	<script type="text/javascript">
		$(document).ready(function(){
			$('#dashboard').addClass('active');
			$('#dashboard-sidebar').addClass('sidebar-active');
		});
	</script>
	<div class = "notification-bar row">
						<div class="col-sm-3">
							<h2>Welcome, Administrator</h2>
							<small>You have 5 notifications</small>
							<ul class="list-group clear-list m-t">
								<li class="list-group-item fist-item">
									<span class="pull-right">
										09:00 pm
									</span>
									<span class="label label-success">1</span> Please contact me
								</li>
								<li class="list-group-item">
									<span class="pull-right">
										10:16 am
									</span>
									<span class="label label-info">2</span> Sign a contract
								</li>
								<li class="list-group-item">
									<span class="pull-right">
										08:22 pm
									</span>
									<span class="label label-primary">3</span> Open new shop
								</li>
								<li class="list-group-item">
									<span class="pull-right">
										11:06 pm
									</span>
									<span class="label label-default">4</span> Call back to Sylvia
								</li>
									<li class="list-group-item">
									<span class="pull-right">
										12:00 am
									</span>
									<span class="label label-primary">5</span> Write a letter to Sandra
								</li>
							</ul>
							<a class = "label label-success" data-redirect = "<?php echo base_url(); ?>dashboard/notifications">Read All Notifications</a>
						</div>
						<div class="col-sm-6"></div>
						<div class="col-sm-3"></div>
					</div>

				<div class="row">
					<div class = "col-md-3">
						<div class = "widget">
							<div class = "widget-body">
								<div class = "col-md-4">
									<i class = "widget-icon fa fa-sitemap fa-4x"></i>
								</div>
								<div class = "col-md-8 details">
									<h4>Branches</h4>
									<h4 class = "widget-number">5</h4>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "widget">
							<div class = "widget-body">
								<div class = "col-md-4">
									<i class = "widget-icon ion ion-ios-people fa-4x"></i>
								</div>
								<div class = "col-md-8 details">
									<h4>Employees</h4>
									<h4 class = "widget-number">120</h4>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "widget">
							<div class = "widget-body">
								<div class = "col-md-4">
									<i class = "widget-icon ion ion-calendar fa-4x"></i>
								</div>
								<div class = "col-md-8 details">
									<h4>Schedules</h4>
									<h4 class = "widget-number">1</h4>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "widget">
							<div class = "widget-body">
								<div class = "col-md-4">
									<i class = "widget-icon ion ion-ios-bell-outline fa-4x"></i>
								</div>
								<div class = "col-md-8 details">
									<h4>Notifications</h4>
									<h4 class = "widget-number">120</h4>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "widget"></div>
					</div>
				</div>