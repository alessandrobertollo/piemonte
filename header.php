
 <Doctype html>
	<head>
		<meta charset UTF-8>
			<meta http-equiv="X-UA-compatible" contenent "IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Piemonte</title>
				<link href= "css/vendor/bootstrap.min.css" rel="stylesheet">

				<!---Bootstrap--->
			<link href="css/vendor/bootstrap.min.css" rel="stylesheet"><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom -->
    	<link href="css/custom.css" rel="stylesheet">

 </head>
 <body>
 <header>
		<nav class="navbar navbar-default">
			<div class="navbar-header">
			</div>
			<ul class="nav navbar-nav">
			<li<?php if ($title == "Home") { print 'class="active"';}?>><a href="index.php">Piemonte</a></li>
			<li<?php if ($title == "Alpi") { echo ' class="active"';}?>><a href="Alpi.php">Alpi </a> </li>
			<li<?php if ($title == "novara") { echo ' class="active"';}?>> <a href="Novara.php">Novara</a></li>
			<li<?php if ($title == "lago-maggiore") { echo ' class="active"';}?>> <a href="lago-maggiore.php"> lago maggiore</a></li>
			</ul>
		</nav>
</header>
