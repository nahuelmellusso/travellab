<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
    <title>
    	@section('title')
    	Travel-Lab
    	@show
    </title>

    <link href="{{{ asset('assets/css/normalize.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/foundation.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/estilo-bend.css') }}}" rel="stylesheet">
    
    <script src="{{{ asset('assets/js/vendor/modernizr.js') }}}"></script>


	
	<link rel="stylesheet" href="{{{ asset('assets/css/jquery-ui.css') }}}">
	<script src="{{{ asset('assets/js/jquery.js') }}}"></script>
	<script src="{{{ asset('assets/js/jquery-ui.js') }}}"></script>
	<link rel="stylesheet" href="{{{ asset('assets/css/style.css') }}}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	


	<div class="row">
		<div class="small-12 medium-12 large-12 columns cab">
			<a class="logo"  href="{{{ URL::to('') }}}"></a>
		</div>
	</div>
		
	

		
		
	
	
	
	<div class="row">
		<div class="large-12">
	    @include('private.notifications')
	
	    @yield('content')
		</div>
	</div>
		
		

<!-- Javascripts -->


<script src="{{{ asset('assets/js/foundation.min.js') }}}"></script>
<!--

<script src="js/foundation/foundation.js"></script>

<script src="js/foundation/foundation.dropdown.js"></script>

<script src="js/foundation/foundation.alerts.js"></script>

<script src="js/foundation/foundation.clearing.js"></script>

<script src="js/foundation/foundation.placeholder.js"></script>

<script src="js/foundation/foundation.forms.js"></script>

<script src="js/foundation/foundation.cookie.js"></script>

<script src="js/foundation/foundation.joyride.js"></script>

<script src="js/foundation/foundation.magellan.js"></script>

<script src="js/foundation/foundation.orbit.js"></script>

<script src="js/foundation/foundation.reveal.js"></script>

<script src="js/foundation/foundation.section.js"></script>

<script src="js/foundation/foundation.tooltips.js"></script>

<script src="js/foundation/foundation.topbar.js"></script>

-->

<script>
  $(document).foundation();
</script>
</body>
</html>
