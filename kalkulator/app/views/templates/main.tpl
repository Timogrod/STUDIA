<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/font-awsome.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap-theme.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body class="home">

<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#"><img width="50px" src="{$conf->app_url}/images/calculator.png" alt="LOGO"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="{$conf->action_url}logout"  class="btn">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

<header id="head">
	<div class="container">
		<div class="row">
			<h1 class="lead">{$page_title|default:"Tytuł domyślny"}</h1>
			<p class="tagline">{$page_header|default:"Tytuł domyślny"}</p>
			<p>{$page_description|default:"Tytuł domyślny"}</p>
		</div>
	</div>
</header>

<div class="content">

{block name=content} Domyślna treść zawartości .... {/block}

</div> 
<footer id="footer" class="top-space">

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">Home</a> |
                            <a href="{$conf->app_url}/app/inna_chroniona.php">Kolejna chroniona strona</a> |
                            <b><a href="{$conf->app_url}/app/security/logout.php">Wyloguj</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2021, Damian Szyda
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>
</body>
</html>