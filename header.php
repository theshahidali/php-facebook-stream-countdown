<?php require_once('inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coutdown Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config['url'];?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $config['url'];?>assets/css/style.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
</head>
<body>
	<header class="container-fluid header">
		<div class="row">
			<nav role="navigation" class="navbar navbar-default">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
					<a href="<?php echo $config['url'];?>" class="navbar-brand">COUNTDOWN</a>
			    </div>
			    <!-- Collection of nav links and other content for toggling -->
			    <div id="navbarCollapse" class="collapse navbar-collapse">
			    	<?php if(session_check()){ ?>
				    	<ul class="nav navbar-nav navbar-left">
				    		<li><a href="<?php echo $config['url'];?>dashboard.php">Dashboard</a></li>
				    		<li><a href="<?php echo $config['url'];?>view.php">View</a></li>
				    	</ul>
				        <ul class="nav navbar-nav navbar-right">
			            	<li><a href="<?php echo $config['url'];?>logout.php">Logout</a></li>
			            </ul>
			        <?php }else { ?>
			        	<ul class="nav navbar-nav navbar-right">
			           		<li><a href="<?php echo $config['url'];?>">Login</a></li>
			           	</ul>
			        <?php } ?>
			        
			    </div>
			</nav>
		</div>
	</header>