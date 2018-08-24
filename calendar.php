<?php

$calendar_id = '';
if (isset($_GET['calendar'])) {
	$calendar_id = $_GET['calendar'];
}

// do cookie auth here.

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Bridgeport Rod and Gun</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Plugin CSS -->
		<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/brg.css" rel="stylesheet">
	</head>
	<body id='page-top'>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src='img/brg.png' height=32 width=32></img>  Bridgeport Rod and Gun</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#facilities">Facilities</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#events">Events</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#range">Range</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#membership">Membership</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section  id='calendar'>
			<div class='no-gutters p-0 m-0 bg-primary'>
				<div class='container mx-auto'>
					<iframe src="https://calendar.google.com/calendar/embed?title=Range%20Calendar&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=juliansovernigo%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FToronto" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

			</div>
		</section>

		<!-- Bootstrap core JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Custom scripts for this template -->
		<script src="js/creative.min.js"></script>

	</body>
</html>
