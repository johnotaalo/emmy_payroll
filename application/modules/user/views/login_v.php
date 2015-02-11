<!DOCTYPE html>
<html>
<head>
	<title>Payroll Authentication</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/cosmo.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/login.css">
</head>
<body>
	<div class = "login-container col-md-3">
		<div class = "login-panel">
			<div class = "outer_border">
				<div class = "login-heading">
					<center><div class = "avatar-holder animated tada" style="background-image: url('<?php echo base_url(); ?>assets/avatars/avatar-male.png')"></div></center>
					<h4>Welcome. Please Login Below to access your module</h4>
				</div>
			</div>
			<div class = "login-body animated fadeInLeft">
				<form method = "POST" name = "login-form" action = "<?php echo base_url();?>user/authenticate" id = "login-form">
					<input type = "text" name = "username" placeholder = "Username" id = "username"/>
					<input type = "password" name = "password" placeholder = "Password" id = "password" required/>

					<button class = "login-button" id = "sign-in">Sign In</button>
				</form>

				<small>Problem signing in? <a href = "#">Get Help here</a></small>
			</div>
			<div class = "login-footer"></div>
		</div>
	</div>

	<div class = "footer animated tada">
		&copy; Chrizota Systems <?php echo date('Y');?>
	</div>

	<!--scripts -->
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/scripts/jquery.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>assets/scripts/login.js"></script>
</body>
</html>