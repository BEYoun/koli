
<!DOCTYPE html>
<html>
<head>
	<title>Cabinet medicale</title>
	<script src='/cabinet/jquery/jquery-1.10.2.js'></script>
	<script src='/cabinet/jquery/jquery-ui.custom.min.js'></script>
	<script src='/cabinet/fullcalendar.js'></script> 
    <?= $this->fetch('script') ?>
<style>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
		background-color: #DDDDDD;
		}
		
	#wrap {
		padding-top: 100px;
		width: 1100px;
		margin: 0 auto;
		}
		
	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		text-align: left;
		}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
		}
		
	.external-event { /* try to mimick the look of a real event */
		margin: 10px 0;
		padding: 2px 4px;
		background: #3366CC;
		color: #fff;
		font-size: .85em;
		cursor: pointer;
		}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
		}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
		}

	#calendar {
		/* 		float: right; */
        margin: 0 auto;
		width: 900px;
		background-color: #FFFFFF;
		  border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
		}

</style>

	<link href='/cabinet/fullcalendar.css' rel='stylesheet' />
	<link href='/cabinet/fullcalendar.print.css' rel='stylesheet' media='print' />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<?= $this->Html->css('animate1') ?>
    <?= $this->Html->css('icomoon1') ?>
    <?= $this->Html->css('bootstrap1') ?>
    <?= $this->Html->css('flexslider1') ?>
    <?= $this->Html->css('style1') ?>
	<!-- Modernizr JS -->
	<script src="/cabinet/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	

</head>
<body>
	<?= $this->fetch('content') ?>
</body>
</html>