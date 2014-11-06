<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_URL?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?=PROJECT_NAME?></title>

	<!-- Bootstrap core CSS -->
	<link href="assets/components/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<style>
		body {
			min-height: 2000px !important;
			padding-top: 70px;
		}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->


</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?=PROJECT_NAME?></a>
		</div>


		<ul class="nav nav-pills" role="tablist">
             <li role="presentation" <?= $controller=="homepage"?'class="active"':"" ?>><a href="homepage">Home</a></li>
             <li role="presentation" <?= $controller=="news"?'class="active"':"" ?>><a href="news">News</a></li>
             <li role="presentation"<?= $controller=="reviews"?'class="active"':"" ?>><a href="reviews">Reviews</a></li>
            <li role="presentation"<?= $controller=="videos"?'class="active"':"" ?>><a href="videos">Videos</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= BASE_URL ?><?= $auth->logged_in == true? 'Logout' : 'Login' ?>"><?=$auth->logged_in == true? 'Logout' : 'Login' ?></a></li>
                </ul>

        </ul>
		</div><!--/.nav nav-pills -->
	</div>
</div>

<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <?  @require "views/$controller/{$controller}_$action.php"; ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="assets/components/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
