<?php
include_once __DIR__ . '/../config/app.php';
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title><?= $config['siteTitle'];?></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

	</head>
	<body>
		<!-- NAV ***********************************************************************-->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><?= $config['siteTitle'];?></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#"><?= $config['menu1'];?></a>
						</li>
						<li>
							<a href="#"><?= $config['menu2'];?></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $config['menu3'];?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- NAV ***********************************************************************-->
		<div class="container">
			<p>
				Create a responsive table with alternating cell background color:
			</p>

			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?= $config['tableTitle1'];?></th>
							<th><?= $config['tableTitle2'];?></th>
							<th><?= $config['tableTitle3'];?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Anna Awesome</td>
							<td>Broome Street</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Debbie Dallas</td>
							<td>Houston Street</td>
						</tr>
						<tr>
							<td>3</td>
							<td>John Doe</td>
							<td>Madison Street</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<!-- SLIDE SHOW ************************************************************************* -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		</div>
		<!-- SLIDE SHOW ************************************************************************* -->
		<!-- Modal EXEMPLE ***********************************************************************-->
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display:<?php echo ($config['enableModal']) ? 'block' : 'none'; ?>">
			Launch demo modal
		</button>
		<!-- Modal EXEMPLE -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
						AAAAAAAAAAAAAA MODAL MESSAGE
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal EXEMPLE ***********************************************************************-->
	</body>
</html>