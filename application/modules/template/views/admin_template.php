<!DOCTYPE html>
<html>
<head>
	<title><?php $page_itle; ?></title>

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/semantic-ui/dist/semantic.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/ionicons/css/ionicons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/admin.css">
</head>
<body>
	<div class = "wrapper">
		<div class = "heading">
			<div class = "system-name">
				<h3>Payroll v1.0</h3>
			</div>
			<div class = "horizontal-menu">
				<ul>
					<li class = "active"><center><a href = "#"><span class = 'menu-icon'><i class = "fa fa-th"></i></span><span class = "menu-text">Dashboard</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "fa fa-building"></i></span><span class = "menu-text">Organization</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-ios-time-outline"></i></span><span class = "menu-text">Journal</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-ios-people"></i></span><span class = "menu-text">Employees</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-stats-bars"></i></span><span class = "menu-text">Reports</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-ios-bell-outline"></i></span><span class = "menu-text">Notifications</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-settings"></i></span><span class = "menu-text">Tools</span></a></center></li>
					<li><center><a href = "#"><span class = 'menu-icon'><i class = "fa fa-cogs"></i></span><span class = "menu-text">Settings</span></a></center></li>
				</ul>
			</div>
			<div class = "user">
				<div class = "user-container">
					<div class = "user-image" style="background-image: url('<?php echo base_url(); ?>uploads/images/employee/employee.jpg')"></div>
					<div class = "user-details"><p>John Chrispine</p><span class = "user-time"><i class = "ion ion-ios-stopwatch-outline"></i> <?php echo date('h:i:s A'); ?></span></div>
				</div>
			</div>
		</div>

		<div class = "admin-bread-crump">
			<div class = "left-crump">Location</div>
			<div class = "right-crump">
				You are looking at: <span id = "location">Dashboard</span>
			</div>
		</div>

		<div class ="content-wrapper">
			<div class = "sidebar">
				<ul>
					<div class = "list-group">Company</div>
						<li><a href = "#"><span class = "menu icon"><i class = "fa fa-th"></i></span>Dashboard</a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-calendar"></i></span>Birthdays</a></li>
					<div class = "list-group">Links</div>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-ios-people"></i></span>Employees<span class = "menu-badge">120</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "fa fa-th"></i></span>Departments<span class = "menu-badge">5</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-calendar"></i></span>Schedules<span class = "menu-badge">89</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-person"></i></span>Positions<span class = "menu-badge">1</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-log-out"></i></span>Sign Out</a></li>
				</ul>
			</div>
			<div class = "content-area">
				<div class="statistics-row">
					<div class = "widget"></div>
					<div class = "widget"></div>
					<div class = "widget"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/scripts/jquery.js"></script>
	<!--<script type="text/javascript" src = "<?php echo base_url(); ?>assets/semantic-ui/dist/semantic.min.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function(){
			upper_height = parseInt($('.heading').height()) + parseInt($('.admin-bread-crump').height());
			total_height = $(window).height();
			sidebar_height = total_height - upper_height;
			$('.sidebar').height(sidebar_height);
		});
	</script>
</body>
</html>