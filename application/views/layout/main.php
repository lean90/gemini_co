<!DOCTYPE html>
<html ng-app="Gemini">
<head>
    <meta charset="UTF-8">
    <title>DENTO | <?php echo $view->title;?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="/css/gemini.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body class="skin-blue">
	<header class="header">
		<a href="/__admin" class="logo">GEMINI.CO</a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> 
			     <span class="sr-only">Toggle navigation</span> 
			     <span class="icon-bar"></span> <span class="icon-bar"></span> 
			     <span class="icon-bar"></span>
			</a>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
					   <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
					       <i class="glyphicon glyphicon-user"></i><span><i class="caret"></i></span>
					   </a>
						<ul class="dropdown-menu">
							<li class="user-header bg-light-blue">
							     <img src="" class="img-circle" alt="User Image" />
								 <p>LE THANH AN <small>23/05/1990</small></p>
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="left-side sidebar-offcanvas">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="#" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p>ANLT</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<ul class="sidebar-menu">
					<li class="active">
					   <a href="/lotto_game"> 
					       <i class="fa fa-dashboard"></i><span>Lotto games</span>
					   </a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Right side column. Contains the navbar and content of the page -->
		<aside class="right-side">
                 <?php require_once APPPATH . 'views/' . $view->view . '.php'; ?>
            </aside>
		<!-- /.right-side -->
	</div>
	<!-- ./wrapper -->


	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!-- 	<script src="/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script> -->
<!-- 	<script src="/js/plugins/DataTables-1.10.0/media/js/jquery.dataTables.min.js"></script> -->
<!-- 	<script src="/js/plugins/DataTables-1.10.0/media/js/custom.dataTables.js"></script> -->
<!-- 	<script src="/js/plugins/gritter/js/jquery.gritter.min.js"></script> -->
<!-- 	<script src="/js/plugins/validation/jquery.validate.min.js"></script> -->
<!-- 	<script src="/js/plugins/config-plugins.js"></script> -->
<!-- 	<script src="/js/plugins/validation/additional-methods.min.js"></script> -->
	<script src="/js/AdminLTE/app.js" type="text/javascript"></script>

	<script src="/js/angular/angular.min.js" type="text/javascript"></script>
	<script src="/js/angular/ng-tags-input.min.js" type="text/javascript"></script>
	<script src="/js/angular/angular-route.min.js" type="text/javascript"></script>
	<script src="/js/angular/filters.js" type="text/javascript"></script>
	<script src="/js/controllers/Gemini-app.js" type="text/javascript"></script>
<!-- 	<script src="/js/controllers/GeminiCommon.js" type="text/javascript"></script> -->
        <?php
    		// Thêm các js riêng biệt
    		foreach ( $view->javascript as $jsItem ) {
    			echo '<script src="' . $jsItem . '"></script>';
    		}
		?>
    </body>
</html>
