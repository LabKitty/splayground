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
            min-height: 100%;
            padding-top: 70px;
            padding-bottom: 70px;
		}
        .footer{
            clear:both;
            padding: 15px 0 25px 0;
            background: #101010;
            text-align:center;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
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
<nav class="navbar navbar-inverse navbar-fixed-top  " role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=PROJECT_NAME?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li role="presentation"<?= $controller=="homepage"?'class="active"':"" ?>><a href="homepage">Home</a></li>
                <li role="presentation"<?= $controller=="heros"?'class="active"':"" ?>><a href="heros">Hero</a></li>
                <li role="presentation"<?= $controller=="reviews"?'class="active"':"" ?>><a href="reviews">Reviews</a></li>
                <li role="presentation"<?= $controller=="videos"?'class="active"':"" ?>><a href="videos">Videos</a></li>
                <li role="presentation"<?= $controller=="forum"?'class="active"':"" ?>><a href="forum">Forum</a></li>
                <?php if($auth->logged_in):?>
                    <li role="presentation"<?= $controller=="admin"?'class="active"':"" ?>><a href="admin">Admin</a></li>
                <?php endif ?>
            </ul>
           <!---<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= BASE_URL ?><?= $auth->logged_in == true? 'logout' : 'login' ?>"><?=$auth->logged_in == true? 'logout' : 'login' ?></a> </li>
                <li role="presentation"<?= $controller=="registration"?'class="active"':"" ?>><a href="registration">Register</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<div class="container">
	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <?  @require "views/$controller/{$controller}_$action.php"; ?>




</div> <!-- /container -->


<div class="footer">
Copyright © 2014 - 2015  Splayground.
</div> <!-- /footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="assets/components/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>


