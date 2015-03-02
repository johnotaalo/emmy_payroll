<script type="text/javascript">
	$(document).ready(function(){
		$('#employees').addClass('active');
		$('#employees-sidebar').addClass('sidebar-active');
	});
</script>

<div class = "row">
	<div class = "col-md-2 employee-sidebar" style = "background-color: #2C3E50; height: 100vh;">
		<ul class = "menu-list">
			<li><a href = "#" data-content = "employees_addemployee" class = "get_page" data-heading = "Add Employee"><span class = "menu-list-icon"><i class = "ion ion-person-add"></i></span> Add Employee </a></li>
			<li><a href = "#" data-content = "employees/employee_details/active" class = "filter_page" data-heading = "Active Employees"><span class = "menu-list-icon"><i class = "ion ion-checkmark-round"></i></span> Active Employees</a></li>
			<li><a href = "#" data-content = "employees/employee_details/inactive" class = "filter_page" data-heading = "Inactive Employees"><span class = "menu-list-icon"><i class = "ion ion-close-round"></i></span> Inactive Employees</a></li>
			<li><a href = "#" data-content = "employees/employee_details/all" class = "filter_page" data-heading = "All Employees"><span class = "menu-list-icon"><i class = "ion ion-stats-bars"></i></span> All Employees</a></li>
			<li><a href = "#" data-content = "employees_employeejobs" class = "get_page" data-heading = "Employees Jobs"><span class = "menu-list-icon"><i class = "ion ion-person-stalker"></i></span> Employee Jobs</a></li>
		</ul>
	</div>

	<div class = "col-md-10 content-container" id = "details-container">
		<div class = "row role-container">
			<div class = "col-md-3"><a href = "#" data-back-to = "" class = "navigation-button"><i class = "ion ion-ios-arrow-back"></i> Back</a></div>
			<div class = "col-md-9"><h3 id = "content-container-heading"></h3></div>
		</div>
		<div class = "row" id = "display_view">
			
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-list li').click(function(){
			$('.menu-list li.active').removeClass('active');
			$(this).addClass('active');
		});
	});

	$('.get_page').click(function(){
		data_content = $(this).attr('data-content');
		heading = $(this).attr('data-heading');
		process_ajax('employees/loadview/' + data_content, function(data){
			$('#content-container-heading').html(heading);
			$('#display_view').html(data);
			console.log(data);
		});
	});

	$('.filter_page').click(function(){
		data_content = $(this).attr('data-content');
		heading = $(this).attr('data-heading');
		process_ajax(data_content, function(data){
			$('#content-container-heading').html(heading);
			$('#display_view').html(data);
			console.log(data);
		});
	});
</script>