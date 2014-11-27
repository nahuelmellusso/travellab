@extends('private.default')

{{-- Web site Title --}}
@section('title')
@parent
Cotizaciones
@stop

{{-- Content --}}
@section('content')



<div class="page-header">
</div>
<div class="row">
	<div class="large-12">
	<form  enctype="multipart/form-data" method="post"  target="_blank">

	

	  <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

	  <!-- Email -->
	  

	<div class="large-4 columns">
	  <fieldset>
	  	<legend>A&eacute;reo</legend>
          <ul class="no-bullet">
	  		<li><input id="directo" name="directo" type="checkbox" value="1"><label for="directo">Directo</label></li>
	  		<li><input id="escalas" name="escalas" type="checkbox" value="1"><label for="escalas">Escalas</label></li>
	  		<li><input id="primera" name="primera" type="checkbox" value="1"><label for="primera">Primera Clase</label></li>
	  		<li><input id="economica" name="economica" type="checkbox" value="1"><label for="economica">Clase econ&oacute;mica</label></li>

	  		<li><input id="trans" name="trans" type="checkbox" value="1"><label for="trans">Translados en destino</label></li>
	  	  </ul>	
	  	<div class="row">
	  		<div class="large-12">
				<div class="row">
				  <div class="large-3 columns">
				    <label for="right-label" class="right inline">Clase</label>
				  </div>
				  <div class="large-4 large-pull-4 columns">
				    <input type="text" id="right-label" name="clase" value="{{{ Input::old('escalas') }}}">
				  </div>
				</div> 
	    	</div>
	    	  		<div class="large-12">
	    				<div class="row">
	    				  <div class="large-3 columns">
	    				    <label for="right-label" class="right inline">Empresa</label>
	    				  </div>
	    				  <div class="large-6 large-pull-2 columns">
	    				    <input type="text" id="right-label" id="empresa" name="empresa" value="{{{ Input::old('empresa') }}}">
	    				  </div>
	    				</div> 
	    	    	</div>		
	    </div>	
	      	<div class="row">
	      		<div class="large-12 columns">
	    			
	    			    <label for="obs">Observaci&oacute;nes</label>
	    			  
	    			  	<textarea id="obs-aer" name="obs-aer" value="{{{ Input::old('obs-aer') }}}"></textarea>
	    			
	    			
	    			</div> 
	        	</div>	
	  </fieldset>
	</div>

	<div class="large-4 columns">
	  <fieldset>
	  	<legend>Alojamiento</legend>
		  <ul class="no-bullet">	
	  		<li><input id="desayuno" type="checkbox" value="{{{ Input::old('desayuno') }}}"><label for="desayuno">Desayuno</label></li>
	  		<li><input id="mediap" type="checkbox" value="{{{ Input::old('mediap') }}}"><label for="mediap">1/2 pensi&oacute;n</label></li>
	  		<li><input id="pencomp" type="checkbox" value="{{{ Input::old('pencomp') }}}"><label for="pencomp">pensi&oacute;n completa</label></li>
	  		<li><input id="allinclus" type="checkbox" value="{{{ Input::old('allinclus') }}}"><label for="allinclus">Todo incluido</label></li>
	  	  </ul>	
	  	<div class="row">
	  		<div class="large-12 columns">
				
				    <label for="obs">Observaci&oacute;nes</label>
				  
				  	<textarea id="obs-aloja" value="{{{ Input::old('obs-aloja') }}}"></textarea>
				
				
				</div> 
	    	</div>	
	    </div>	
	    
	  </fieldset>
	</div>

	<div class="large-4 columns">
	  <fieldset>
	  	<legend>Documentaci&oacute;n</legend>
		  <ul class="no-bullet">	
	  		<li><input id="pasaporte" type="checkbox" name="pasaporte" value="1"><label for="pasaporte">Pasaporte</label></li>
	  		<li><input id="visa" type="checkbox" name="visa" value="1"><label for="visa">Visa</label></li>
	  		<li><input id="dni" type="checkbox" name="dni" value="1"><label for="dni">Dni</label></li>
	  		<li><input id="vacunas" type="checkbox" name="vacunas" value="1"><label for="vacunas">Vacunas</label></li>
	  	  </ul>	
	  	<div class="row">
	  		<div class="large-12 columns">
				
				    <label for="obs">Observaci&oacute;nes</label>
				  
				  	<textarea id="obs-doc" name="obs-doc" value="{{{ Input::old('obs-doc') }}}"></textarea>
				
				
				</div> 
	    	</div>	
	    </div>	
	  </fieldset>
	</div>
	
	<div class="row">	
		<div class="large-8 columns">

		<fieldset>
				<legend>Vigencia</legend>	
			<div class="row">
				<div class="large-6 columns">					
						<fieldset>
							<legend>Para viajar</legend>	
			      			<label for="from">Desde</label>
			      			<input type="text" id="from" name="from">
			      			<label for="to">Hasta</label>
			      			<input type="text" id="to" name="to">
			    	  	</fieldset>
			    </div>
			    <div class="large-6 columns">  	
			    	  	<fieldset>
			    	  		<legend>Para comprar</legend>	
			    	  	      <label for="from2">Desde</label>
			    	  	      <input type="text" id="from2" name="from2">
			    	  	      <label for="to2">Hasta</label>
			    	  	      <input type="text" id="to2" name="to2">
			    	  	</fieldset>
			      	
			   </div>	
			   		  	<div class="row">
			   		  		
			   		  		 	 <div class="large-3 large-offset-1 columns">
			   		  		 	   <label for="right-label" class="right inline">Validez de la oferta</label>
			   		  		 	 </div>
			   		  		 	 <div class="large-2 large-pull-6 columns">
			   		  		 	   <input type="number" id="right-label" name="val" value="{{{ Input::old('val') }}}">
			   		  		 	 </div> 				    			
			   				
			   		    </div>	
			     	<div class="row">
			     		<div class="large-10 large-offset-1 columns">
			     		 	<label for="obs">Observaci&oacute;nes</label>
			   			 	<textarea id="obs-aloja" value="{{{ Input::old('obs-aloja') }}}"></textarea>	    				    			
			   			</div> 
			       </div>	
			      </div> 
			      </fieldset> 	  	
			 </div>	 
			<div class="large-4 columns">
				<fieldset>
					<legend>Destino</legend>
				
						<label>Pa&iacute;s
						<select name="Paises">
							<?php
					    		foreach ($select as $pai) {
							?>
					    		<option value="<?php echo $pai['id'] ?>"> <?php echo $pai['Country'] ?> </option>
							<?php
					    		}
							?>	
						</select>
						</label>

						<div class="row">
						  <div class="large-2 columns">
						    <label for="right-label" class="right inline" id="dias" name="dias">D&iacute;as</label>
						  </div>
						  <div class="large-3  columns">
						    <input type="number" id="right-label" name="dias" value="{{{ Input::old('dias') }}}">
						  </div>
						
						<div class="large-2 columns">
						    <label for="right-label" class="right inline" id="noches" name="noches">Noches</label>
						  </div>
						  <div class="large-3 large-pull-1 columns">
						    <input type="number" id="right-label" name="noches" value="{{{ Input::old('noches') }}}">
						  </div>
						</div> 
						<input id="excursiones" type="checkbox" value="{{{ Input::old('excursiones') }}}"><label for="excursiones">Excursiones</label></li>
					</div> 
				</fieldset>
			</div>

	      </div>
	 	<div class="row">
			<div class="large-6 large-offset-3 columns">
				<label>Precio final</label>
				<input type="text" id="precio" name="precio" value="{{{ Input::old('precio') }}}" >
			</div>
		</div>
		<div class="row">
			<div class="large-6 large-offset-3 columns">
				<label>T&iacute;tulo</label>
				<input type="text" id="titulo" name="titulo" value="{{{ Input::old('titulo') }}}" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="large-6 large-offset-3  columns">
					<label>Subt&iacute;tulo</label>
					<input type="text" id="subtitulo" name="subtitulo">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-6 large-offset-3 columns">
				<fieldset>
					<legend>Im&aacute;genes</legend>
					<input type="file" id="photo" name="photo">
				</fieldset>	
			</div>
		</div>
		

		<div class="row">
	      <div class="large-4 large-offset-4 columns">
	        <button type="submit" onclick = "this.form.action = 'cotizar/guardar'" class="button">Guardar</button>
	        
	      </div>
	     </div> 
	     <div class="row">
	      <div class="large-4 large-offset-4 columns">
	        <button type="submit" onclick = "this.form.action = 'cotizar/makepdf'" class="button">Imprimir cotizaci&oacute;n</button>
	        
	      </div>
	    </div>
	  

	    
	      
	  
	    
	   </div>
	 
	  </div>
	</form>
		
	
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
		    $( "#from" ).datepicker({
		     
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#to" ).datepicker( "option", "minDate", selectedDate );
		      }
		    });
		    $( "#to" ).datepicker({
		   
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
		      }
		    });
		    $( "#from2" ).datepicker({
		     
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#to2" ).datepicker( "option", "minDate", selectedDate );
		      }
		    });
		    $( "#to2" ).datepicker({
		    
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#from2" ).datepicker( "option", "maxDate", selectedDate );
		      }
		    });
		  });
		  </script>	
	    
	    
	

</div>
@stop