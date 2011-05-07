<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Nuhoc GearLocker - Login</title>

<link rel="stylesheet" media="screen" href="css/reset.css" />
<link rel="stylesheet" media="screen" href="css/grid.css" />
<link rel="stylesheet" media="screen" href="css/style.css" />
<link rel="stylesheet" media="screen" href="css/messages.css" />
<link rel="stylesheet" media="screen" href="css/forms.css" />

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/PIE.js"></script>
<![endif]-->
<!-- jquerytools -->
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.ui.min.js"></script>

<!--[if lte IE 9]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<script type="text/javascript" src="js/ie.js"></script>
<![endif]-->

<script src="js/global.js"></script>


<script> 
$(document).ready(function(){
    $.tools.validator.fn("#username", function(input, value) {
        return value!='Username' ? true : {     
            en: "Please complete this mandatory field"
        };
    });
    
    $.tools.validator.fn("#password", function(input, value) {
        return value!='Password' ? true : {     
            en: "Please complete this mandatory field"
        };
    });

    $("#form").validator({ 
    	position: 'top', 
    	offset: [25, 10],
    	messageClass:'form-error',
    	message: '<div><em/></div>' // em element is the arrow
    }).attr('novalidate', 'novalidate');
});
</script> 


</head>
<body class="login">
    <div class="login-box main-content">
      <header><h2>Nuhoc GearLocker Login</h2></header>
    	<section>
				<p class="ac"><img src="images/nuhoclogo.png" alt="Nuhoc Logo"/></p>
				
				<?php if ($this->session->flashdata('error')): ?>
						<div class="message error">
								<h3>Incorrect Login</h3>
								<p><?php echo $this->session->flashdata('error'); ?></p>
						</div>
				<?php endif; ?>
				
    		<form id="form" action="index.php/login" method="post" class="clearfix">
			<p>
				<input type="text" id="email"  class="full" value="" name="email" required="required" placeholder="Email address" />
			</p>
			<p>
				<input type="password" id="password" class="full" value="" name="password" required="required" placeholder="Password" />
			</p>
			<p class="clearfix">

				<button class="button button-gray fr" type="submit">Login</button>
			</p>
		</form>
    	</section>
    </div>
</body>
</html>