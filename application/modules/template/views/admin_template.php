<!DOCTYPE html>
<html>
<head>
	<title>Payroll | <?php echo $title; ?></title>

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/semantic-ui/dist/semantic.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/cosmo.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/ionicons/css/ionicons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/animate.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/Hover/css/hover.css">

	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/scripts/jquery.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript">
		base_url = '<?php echo base_url(); ?>';
	</script>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/media/css/jquery.dataTables.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/media/css/dataTables.responsive.css">

	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/datatables/media/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/datatables/media/js/dataTables.responsive.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
	<script type="text/javascript">
		var now = moment();
	</script>
</head>
<body>
		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
	<div class = "wrapper row">
		<div class = "heading row" style = "">
			<div class = "system-name col-md-2" style = "">
				<h3 style = "">Payroll v1.0</h3>
			</div>
			<div class = "horizontal-menu col-md-8" style = "">
				<ul>
					<li id = "dashboard"><center><a href = "<?php echo base_url(); ?>dashboard"><span class = 'menu-icon'><i class = "fa fa-th"></i></span><span class = "menu-text">Dashboard</span></a></center></li>
					<li id = "organization"><center><a href = "#"><span class = 'menu-icon'><i class = "fa fa-building"></i></span><span class = "menu-text">Organization</span></a></center></li>
					<li id = "branches"><center><a href = "#"><span class = 'menu-icon'><i class = "fa fa-sitemap"></i></span><span class = "menu-text">Branches</span></a></center></li>
					<li id = "employees"><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-ios-people"></i></span><span class = "menu-text">Employees</span></a></center></li>
					<li id = "reports"><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-stats-bars"></i></span><span class = "menu-text">Reports</span></a></center></li>
					<li id = "notifications"><center><a href = "#"><span class = 'menu-icon'><i class = "ion ion-ios-bell-outline"></i></span><span class = "menu-text">Notifications</span></a></center></li>
					<li id = "tools"><center><a href = ""><span class = 'menu-icon'><i class = "ion ion-settings"></i></span><span class = "menu-text">Tools</span></a></center></li>
					<li id = "settings"><center><a href = "<?php echo base_url(); ?>settings/systemsettings"><span class = 'menu-icon'><i class = "fa fa-cogs"></i></span><span class = "menu-text">Settings</span></a></center></li>
				</ul>
			</div>
			<div class = "user col-md-2">
				<div class = "user-container">
					<div class = "user-image" style="background-image: url('<?php echo base_url(); ?>uploads/images/employee/employee.jpg')"></div>
					<div class = "user-details"><p>John Chrispine</p><span class = "user-time"><i class = "ion ion-ios-stopwatch-outline"></i> <span id = "displayDate"></span></span></div>
				</div>
			</div>
		</div>

		<div class = "admin-bread-crump row">
			<div class = "left-crump col-md-2">Location</div>
			<div class = "right-crump col-md-10">
				<div class = "crump-details">You are looking at: <span id = "location">Dashboard</span></div>
			</div>
		</div>

		<div class ="content-wrapper row">
			<div class = "sidebar col-md-2">
				<ul>
					<div class = "list-group">Company</div>
						<li><a href = "#"><span class = "menu icon"><i class = "fa fa-th"></i></span>Dashboard</a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-calendar"></i></span>Birthdays</a></li>
					<div class = "list-group">Links</div>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-ios-people"></i></span>Employees<span class = "menu-badge">0</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "fa fa-sitemap"></i></span>Branches<span class = "menu-badge">0</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-calendar"></i></span>Schedules<span class = "menu-badge">0</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-person"></i></span>Positions<span class = "menu-badge">0</span></a></li>
						<li><a href = "#"><span class = "menu icon"><i class = "ion ion-log-out"></i></span>Sign Out</a></li>
				</ul>
			</div>
			<div class = "content-area col-md-10 animated slideInRight">
				<?php $this->load->view($content_view); ?>
			</div>
		</div>
	</div>

	<?php $this->load->view('modal/modals');?>
	<!-- scripts -->
	<!--<script type="text/javascript" src = "<?php echo base_url(); ?>assets/semantic-ui/dist/semantic.min.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#loader-wrapper').hide();
		});
		function renderTime()
		{
			var currentTime = new Date();
			var diem = 'AM';
			var h = currentTime.getHours();
			var m = currentTime.getMinutes();
			var s = currentTime.getSeconds();

			if (h == 0){
				h = 12;
			}
			else if (h > 12) 
			{
				h = h - 12;
				diem = 'PM';
			}

			if (h < 10)
			{
				h = '0' + h;
			}

			if (m < 10)
			{
				m = '0' + m;
			}

			if (s < 10)
			{
				s = '0' + s;
			}

			var myclock = document.getElementById('displayDate');
			myclock.textContent = h + ":" + m + ":" + s + " " + diem;
			setTimeout('renderTime()', 1000);

		}

		renderTime();
	</script>
</body>
</html>