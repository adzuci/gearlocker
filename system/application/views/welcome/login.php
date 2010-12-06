<!DOCTYPE html>
<html>
<head>
	<title>Login - Nuhoc Gear Locker</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
</head>
<body>
<div class="container_12">
	<div class="grid_2 prefix_3">
		
		<img src="img/nuhoclogo.png" alt="Nuhoc Logo"/>
		
	</div>
	
	<div class="grid_3">
		<div class="login_form">
			
			<h3>Nuhoc Gear Locker</h3>
		
			<?php echo form_open("auth/login"); ?>
			<!-- <form method="POST" action="index.php/user/login"> -->
				<div class="field">
					<label for="email">Email Address</label><br/>
					<input type="text" id="email" name="email" />
				</div>
			
				<div class="field">
					<label for="password">Password</label><br/>
					<input type="password" id="password" name="password" />
				</div>
			
				<?php if ($this->session->flashdata('error')): ?>
					<div class="flash">
						<div class="error">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
					</div>
				<?php endif; ?>
			
				<div class="actions">
					<input type="submit" name="Login" value="Login"/>
				</div>
			</form>
		</div>
	<div>
		
	<div class="clear"></div>
</div>
</body>
</html>