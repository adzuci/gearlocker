<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title><?php echo $title; ?></title>

<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/reset.css\""?> />
<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/grid.css\""?> />
<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/style.css\""?> />
<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/messages.css\""?> />
<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/forms.css\""?> />
<link rel="stylesheet" media="screen" <?php echo "href=\"" . base_url() . "css/tables.css\""?> />

<!--
<link rel="stylesheet" media="screen" href="../css/grid.css" />
<link rel="stylesheet" media="screen" href="../css/style.css" />
<link rel="stylesheet" media="screen" href="../css/messages.css" />
<link rel="stylesheet" media="screen" href="../css/forms.css" />
<link rel="stylesheet" media="screen" href="../css/tables.css" />
-->

<!--[if lt IE 8]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<![endif]-->

<!-- jquerytools -->
<script src="js/jquery.tools.min.js"></script>

<script type="text/javascript" src="js/global.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/PIE.js"></script>
<script type="text/javascript" src="js/IE9.js"></script>
<script type="text/javascript" src="js/ie.js"></script>
<![endif]-->

</head>
<body>
    <div id="wrapper">
        <header>
            <div class="container_8 clearfix">
                <h1 class="grid_1"><a href="dashboard.html">GearLocker</a></h1>
                <nav class="grid_7">
                    <ul class="clearfix">
                        <li class="action">
                            <a href=<?php echo '"' . site_url('rentals/new') . '"'; ?> class="button button-green">
								<span class="add"></span>New Rental</a>
                        </li>
                        <li class="action">
                            <a href=<?php echo '"' . site_url('members/new') . '"'; ?> class="button button-green">
								<span class="add"></span>New Member</a>
                        </li>
                        <li class="fr"><a href=<?php echo '"' . site_url('logout') . '"'; ?>>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section>
            <div class="container_8 clearfix">

                <!-- Sidebar -->
                <aside class="grid_1">

                    <nav class="global">
			
                        <ul class="clearfix">
                            <li <?php if ($active == "dashboard") echo 'class="active"' ?>>
								<a class="nav-icon icon-house" href=<?php echo '"' . site_url('dashboard') . '"'; ?>>Dashboard</a></li>
							<li <?php if ($active == "members") echo 'class="active"' ?>>
		                        <a class="nav-icon" href=<?php echo '"' . site_url('members') . '"'; ?>>Members</a></li>
                            <li <?php if ($active == "gear") echo 'class="active"' ?>>
	                            <a class="nav-icon" href=<?php echo '"' . site_url('gear') . '"'; ?>>Gear</a></li>
                            <li <?php if ($active == "rentals") echo 'class="active"' ?>>
	                            <a class="nav-icon" href=<?php echo '"' . site_url('rentals') . '"'; ?>>Rentals</a></li>
                        </ul>
                    </nav>

                </aside>
                <!-- Sidebar End -->
                

                <!-- Main Section -->
                <section class="main-section grid_7">
	
                    <div class="main-content">
                        <header>
                            <h2><?php echo $header_text; ?></h2>
                        </header>
