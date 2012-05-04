<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<!--<link href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet">-->
		<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div class="topbar">
			<div class="fill">
				<div class="container">
					<a class="brand" href="#">ITSA - Calificaciones Online</a>
					
					<ul class="nav-collapse collapse">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
					<ul class="nav">
						<li><span class="label">Default</span></li>
						<li><span class="label label-info">Info</span></li>
					</ul>

					<!--<form action="calificaciones/login" class="pull-right" method="post">
						<input class="input-small" name="username" type="text" placeholder="Username">
						<input class="input-small" name="password" type="password" placeholder="Password">
						<button class="btn" type="submit">Sign in</button>
					</form>-->

					<!--<a class="pull-right" href="#">Cerrar sesión</a>-->
				</div>
			</div>
		</div>

		<div class="container">
			<div class="content">
				<div class="page-header">
					<h1>ZanPHP <small>PHP5 Framework</small></h1>
				</div>

				<div class="alert alert-info">
        					<button class="close" data-dismiss="alert">×</button>
        					<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      					</div>
				
				<div class="row">
<?php } ?>