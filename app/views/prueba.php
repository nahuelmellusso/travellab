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

    <link href="assets/css/normalize.css" rel="stylesheet">
    <link href="assets/css/foundation.css" rel="stylesheet">
    <link href="assets/css/estilo-bend.css" rel="stylesheet">
     <link href="assets/css/foundation.min.css" rel="stylesheet">

    
    <script src="assets/js/vendor/modernizr.js"></script>

	
	
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script src="assets/js/foundation/foundation.alert.js"></script>
	
	<link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>













<legend>Para viajar</legend>	
			      			<label for="from">Desde</label>
			      			<Input name="vigencia_viajar_desde" id="vigencia_viajar_desde">	
			      			
			      			<label for="vigencia_viajar_hasta">Hasta</label>
			      			<Input name="vigencia_viajar_hasta" id="vigencia_viajar_hasta">









<script>

		$.datepicker.regional['es'] = {
		 closeText: 'Cerrar',
		 prevText: '<Ant',
		 nextText: 'Sig>',
		 currentText: 'Hoy',
		 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		 weekHeader: 'Sm',
		 dateFormat: 'dd/mm/yy',
		 firstDay: 1,
		 isRTL: false,
		 showMonthAfterYear: false,
		 yearSuffix: ''
		 };
		 $.datepicker.setDefaults($.datepicker.regional['es']);

		  $(document).ready(function() {
		    $( "#vigencia_viajar_desde" ).datepicker({
		     
			  dateFormat: 'yy-mm-dd',		     
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#vigencia_viajar_hasta" ).datepicker( "option", "minDate", selectedDate );
		      }
		    });
		    $( "#vigencia_viajar_hasta" ).datepicker({
		      dateFormat: 'yy-mm-dd',
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#vigencia_viajar_desde" ).datepicker( "option", "maxDate", selectedDate );
		      }
		    });
		   
		  });
		  </script>	





<script>
  $(document).foundation();
</script>
<script>
$(document).foundation('alert','events'); 
</script>

</body>
</html>

