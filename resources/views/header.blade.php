<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Vataliya Prajapati Yuvak Mandal, Rajkot</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Hind+Vadodara|Mogra|Rasa|Shrikhand" rel="stylesheet">
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
	<!-- end: Favicon -->
	<!--content="0;url=https://www.google.co.in/"-->
	<noscript>
		<meta http-equiv="refresh" content="0;url=img/gallery/photo2.jpg">

		<style type="text/css">
			.nojs {
				display:none;				
			}
		
		</style>
	</noscript>	
		
		
</head>
<!-- onContextMenu="alert('Right click disabled!');return false;" -->
<body  class="nojs">

		<!-- start: Header -->
	<div class="navbar nojs">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index"><span>Vataliya Prajapati Yuvak Mandal, Rajkot</span></a>				
					<ul class="nav pull-left">	
						<li>
							<input type="text"  class="span4 typeahead" style="height:15px; margin:7px;" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>								
							<!--<input type="button" name="Search">-->
							<button type="search" class="btn" Style="background-color:#000; color:#fff; ">Search</button>						

						</li>
					</ul>
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="container-fluid-full">
		<div class="row-fluid">
				  					
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ url('/add_records') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Add New Record</span></a></li>
						<li><a href="{{ url('/edit_records') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Edit Record</span></a></li>
						<li><a href="{{ url('/add_advertisement') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Advertisement</span></a></li>
						<li><a href="{{ url('/edit_advertisement') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Edit Advertisement</span></a></li>
					</ul>
				</div>
			</div>
			
			
			<!-- end: Main Menu -->
	@yield('content')

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Create and Maintain By MULTITUDE Tech</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{ URL::asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
	
		<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ URL::asset('js/excanvas.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ URL::asset('js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.noty.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/counter.js') }}"></script>
	
		<script src="{{ URL::asset('js/retina.js') }}"></script>

		<script src="{{ URL::asset('js/custom.js') }}"></script>

		<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
