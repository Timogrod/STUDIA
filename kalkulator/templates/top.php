<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <title><?php out($page_title); if (empty($page_title)){ ?> Tytuł domyślny ... <?php }?></title>
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/css/main.css">
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/css/font-awsome.min.css">
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body class="home">

<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#"><img width="50px" src="<?php print(_APP_ROOT);?>/images/calculator.png" alt="LOGO"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="<?php print(_APP_ROOT);?>/app/inna_chroniona.php">Kolejna chroniona strona</a></li>
					<li><a class="btn" href="<?php print(_APP_ROOT);?>/app/security/logout.php">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

<header id="head">
	<div class="container">
		<div class="row">
			<h1 class="lead"><?php out($page_title); if (empty($page_title)){ ?> Tytuł domyślny ... <?php }?></h1>
			<p class="tagline"><?php out($page_header); if (empty($page_header)){ ?> Tytuł domyślny ... <?php }?></p>
			<p><?php out($page_description); if (empty($page_description)){ ?> Opis domyślny ... <?php }?></p>
		</div>
	</div>
</header>

<div class="content">