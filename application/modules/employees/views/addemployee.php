<style type="text/css">
.image_preview
{
	background-color: #ecf0f1;
	width: 150px;
	height: 150px;
	padding: 4px;
}

#myfile
{
	width: 150px;
	font-size: 60%;
}

.admininput-group
{
	position: relative;
	display: table;
	border-collapse: separate;
	padding: 2px;
	font-size: 90%;
	margin-bottom: 5px;
}

.admininput-group .admininput, .admininput-group span
{
	display: table-cell;
}

.admininput-group span
{
	width: 25%;
	text-align: right;
	vertical-align: middle;
	padding-right: 10px;
}
.admininput-group .admininput
{
	position: relative;
	z-index: 2;
	float: left;
	width: 100%;
	margin-bottom: 0;
}
.admininput-group textarea.admininput
{
	height: 70px;
}
</style>

<div class = "content-row">
	<form role = "form" method = "POST" action = "<?php echo base_url(); ?>employees/registration" enctype='multipart/form-data'>
		<div class = "row">
			<div class = 'uploader col-md-4'>
				<div class = "image_preview"></div>
				<input type="file" id="myfile" name="upload"/>
			</div>
		</div>
		<div class = "row">
			<center><h4>Basic Information</h4></center>
		</div>
		<div class = "row">
			<div class = "admininput-group col-md-6">
				<span>First Name</span>
				<input type = "text" name = "employee_first_name" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Last Name</span>
				<input type = "text" name = "employee_last_name" class="admininput">
			</div>
			<div class = "admininput-group col-md-12">
				<span style = "width: 12.5%;">Other Names</span>
				<input type = "text" name = "employee_other_names" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>ID No</span>
				<input type = "text" name = "national_id_no" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Passport (optional)</span>
				<input type = "text" name = "passport_no" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Birth Certificate No (optional)</span>
				<input type = "text" name = "birth_certificate_no" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Birth Date</span>
				<input type = "date" name = "birthday" class="admininput">
			</div>
		</div>
		<div class = "row">
			<center><h4>Contact Information</h4></center>
		</div>
		<div class = "row">
			<div class = "admininput-group col-md-6">
				<span>Phone Number:</span>
				<input type = "text" name = "phone_number" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Another Number:(optional)</span>
				<input type = "text" name = "alternate_phone_number" class="admininput">
			</div>
			<div class = "admininput-group col-md-12">
				<span style = "width: 12.5%;">Email:(optional)</span>
				<input type = "email" name = "email_address" class="admininput">
			</div>
			<div class = "admininput-group col-md-6">
				<span>Home Address:</span>
				<textarea  name = "home_address" class="admininput"></textarea>
			</div>
			<div class = "admininput-group col-md-6">
				<span>Land Mark (Optional):</span>
				<textarea  name = "landmark" class="admininput"></textarea>
			</div>
		</div>
		<div class = "row">
			<center><h4>Payment Information</h4></center>
		</div>
		<div class = "row">
			<div class = "admininput-group col-md-4">
				<span>KRA PIN:</span>
				<input type = "text" name = "kra_pin" class="admininput">
			</div>
			<div class = "admininput-group col-md-4">
				<span>NHIF No:</span>
				<input type = "text" name = "nhif_no" class="admininput">
			</div>
			<div class = "admininput-group col-md-4">
				<span>NSSF No:</span>
				<input type = "text" name = "nssf_no" class="admininput">
			</div>
		</div>

		<div class = "row" style = "margin-top: 20px;">
			<div class = "pull-right">
				<button type = "submit" class = "admin-button admin-button-success"><i class = "ion ion-android-archive"></i> <span>Save Details</span></button>
				<button type = "reset" class = "admin-button admin-button-danger"><i class = "ion ion-close-round"></i> <span>Clear Details</span></button>
			</div>
		</div>
	</form>
</div>