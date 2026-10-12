<?php require_once('inc/config.php'); 

	$data = get_campaign_data();
?>

<!DOCTYPE html>
<html style="background-image: url('<?php echo $config['url']."uploads/".$data['bg']; ?>');">
<head>
	<title></title>
	<title>Coutdown Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config['url'];?>assets/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
	<style type="text/css">
		@font-face {
		    font-family: neue;
		    src: url('<?php echo $config['url'];?>assets/css/helvetica-neue-bold.ttf');
		}
		html{
		    background-size: cover;
		    background-repeat: no-repeat;
		    height: 75%;
		    position: relative;
		    overflow-x: hidden;
		}

		body{
			background: transparent;
			color: #fff;
			text-shadow: 1px -1px #333;
		}

		.clock{
			text-align: left;
			text-transform: uppercase;
			position: absolute;
			bottom: 3%;
			left: 0%;
			width: 100%;
			overflow: hidden;
			text-align: center;
		}

		.clock .num{
			font-size: 86px;
			letter-spacing: 6px;
			
			/*font-family: 'Arimo', sans-serif;*/
			font-family: 'Oswald', sans-serif;
			font-weight: bolder !important;
		}

		.days, .hours, .min{
			background:url('<?php echo $config['url'];?>assets/img/line.png') center right no-repeat;
		}
		.clock .sec .num{
			background: none;
		}

		.clock .lbl{
			font-size: 16px;
			letter-spacing: 1px;
			font-family: 'Oswald', sans-serif;
			margin-top: -18px !important;
			display: block;
			color: #fff;

		}

		.video-container{
			background: transparent;
		}

		.heading{
			margin-top: 155px;
		}

		.heading h1{
			text-align: center;
		    font-size: 60px;
		    letter-spacing: 1px;
		    font-family: 'Oswald', sans-serif;
		}

		.sec{
			position: relative;
		}

		#milli{
			position: absolute;
			right: 0%;
			text-align: right;
		}

		#dot{
			margin-right: 12px;
			display: inline-block;
		}

		#nn{
			max-width: 100px;
			width: 100%;
			display: inline-block;
		}

		/* jQuery Countdown styles 2.0.0. */
/*.is-countdown {
	text-align: center;
	width: 100%;
}*/
.countdown-rtl {
	direction: rtl;
}
.countdown-holding span {
	color: #888;
}
.countdown-row {
	clear: both;
	width: 100%;
	text-align: center;
}
.countdown-show1 .countdown-section {
	width: 100%;
}
.countdown-show2 .countdown-section {
	width: 48%;
}
.countdown-show3 .countdown-section {
	width: 32.5%;
}
.countdown-show4 .countdown-section {
	width: 24.5%;
	background:url('<?php echo $config['url'];?>assets/img/line.png') center right no-repeat;
}
.countdown-show4 .countdown-section:last-of-type {
	background: none;
}
.countdown-show5 .countdown-section {
	width: 19.5%;
}
.countdown-show6 .countdown-section {
	width: 16.25%;
}
.countdown-show7 .countdown-section {
	width: 14%;
}
.countdown-section {
	display: block;
	float: left;
	text-align: center;
	font-size: 16px;
	letter-spacing: 1px;
	font-family: 'Oswald', sans-serif;
	margin-top: -18px !important;
	color: #fff;
}
.countdown-amount {
    font-size: 86px;
	letter-spacing: 6px;
	/*font-family: 'Arimo', sans-serif;*/
	font-family: 'Oswald', sans-serif;
	font-weight: bolder !important;
}
.countdown-period {
    display: block;
}
.countdown-descr {
	display: block;
	width: 100%;
}

	</style>
	<script type="text/javascript">
		CountStepper = 1;
	</script>
</head>
<body>

	<div class="container-fluid video-container">
		<div class="row heading">
			<h1><?php echo $data['heading']; ?></h1>
		</div>
		<div id="clock" class="clock"></div>
	</div>
	

	<!-- SCRIPTS -->
	<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/bootstrap-filestyle.min.js"></script>
	<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/script.js"></script>
	
	<?php if($data['option'] == 'down'){ ?>

		<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/jquery.countdown.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){

				$('#clock').countdown('<?php echo $data['date']; ?>', function(event) {

				  var $this = $(this).html(event.strftime(''
				    + '<div class="col-xs-3 days"><div class="row num">%D</div><div class="row lbl">Days</div></div>'
				    + '<div class="col-xs-3 hours"><div class="row num">%H</div><div class="row lbl">Hours</div></div>'
				    + '<div class="col-xs-3 min"><div class="row num">%M</div><div class="row lbl">Minutes</div></div>'
				    + '<div class="col-xs-3 sec"><div class="row num"><span id="nn">%S</span></div><div class="row lbl">Seconds</div></div>'));
				});

				/*var sec = 0;
				setInterval( function() {
					if(sec == 9){
				    	sec = 0;
				    }
				    $("#milli").html(sec);
				    sec++;
				}, 100);*/
			});
		</script>
	<?php } else { ?>
		<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/jquery.plugin.js"></script>
		<script type="text/javascript" src="<?php echo $config['url'];?>assets/js/jquery.countdown.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				var dd = new Date('<?php echo $data['date']; ?>');
				$('#clock').countdown({since: dd, 
    format: 'DHMS'});
			});
		</script>
	<?php } ?>
</body>
</html>