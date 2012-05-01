<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta charset="utf-8">
    	<title><?php print $this->getTitle(); ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">		

		<!-- Le styles -->
		<link href="<?php print path("vendors/css/frameworks/newbootstrap/css/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
        		padding-bottom: 40px;
        	}
        </style>
        <link href="<?php print path("vendors/css/frameworks/newbootstrap/css/bootstrap-responsive.min.css", "zan"); ?>" rel="stylesheet">
        <?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php print get("webURL") . _sh . 'calificaciones/'; ?>">ITSA - Calificaciones Online</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="<?php print get("webURL") . _sh . 'calificaciones/home/'; ?>">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<form class="navbar-search pull-left" action="calificaciones/login" method="post">
							<input type="text" class="search-query span2" placeholder="Search">
							<!--<input class="input-small" name="username" type="text" placeholder="Username">
							<input class="input-small" name="password" type="password" placeholder="Password">-->
							<!--<button class="btn" type="submit">Sign in</button>-->
						</form>
						</form>
						<ul class="nav pull-right">
							<?php $this->load(isset($view['login']) ? $view['login'] : NULL, TRUE); ?>
							<!--<li><a href="<?php print get("webURL") . _sh . 'calificaciones/login/'; ?>">Iniciar sessión</a></li>-->
							<!-- <li class="divider-vertical"></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li> -->
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div>
		<div class="container">

	      	<!-- Main hero unit for a primary marketing message or call to action -->
	      	<div class="hero-unit">
	        	<h1>Calificaciones online</h1>
	        	<!--<p class="pull-right">Un sitio donde podrás consultar tus calificaciones de manera rápida y sencilla</p>
	        	<!--<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>-->
	      	</div>