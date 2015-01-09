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
		<div class="large-5 columns">
			@if($errors->has())


			          		
			          		@if($errors->has('vigencia_viajar_desde'))
			 
			                    <p>{{ $errors->first('vigencia_viajar_desde') }}</p>
			 
			                @endif
			                @if($errors->has('titulo'))
			 
			                    <p>{{ $errors->first('titulo') }}</p>
			 
			                @endif
			                @if($errors->has('subtitulo'))
			 
			                    <p>{{ $errors->first('subtitulo') }}</p>
			 
			                @endif

							@if($errors->has('validez'))
			 
			                    <p>{{ $errors->first('validez') }}</p>
			 
			                @endif


			                <!--si el usuario falla la validación mostramos el error-->
			                @if($errors->has('vigencia_viajar_hasta'))
			 
			                    <p>{{ $errors->first('vigencia_viajar_hasta') }}</p>
			 
			                @endif
			                @if($errors->has('vigencia_comprar_desde'))
			 
			                    <p>{{ $errors->first('vigencia_comprar_desde') }}</p>
			 
			                @endif
			                @if($errors->has('vigencia_comprar_hasta'))
			 
			                    <p>{{ $errors->first('vigencia_comprar_hasta') }}</p>
			 
			                @endif
			                @if($errors->has('dias'))
			 
			                    <p>{{ $errors->first('dias') }}</p>
			 
			                @endif
			 
			                <!--si el password falla la validación mostramos el error-->
			                @if ($errors->has('noches'))
			 
			                    <p>{{ $errors->first('noches') }}</p>
			 
			                @endif
			 
			                <!--si el email falla la validación mostramos el error-->
			                @if ($errors->has('precio'))
			 
			                    <p>{{ $errors->first('precio') }}</p>
			 
			                @endif
			 
			            
			        @endif
	    </div>    
	 </div>



	


	<form class="save-form" id="save-form" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="" target="">


	  <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

	  <!-- Email -->
	  
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-4 columns">
				  <fieldset>
				  	<legend>A&eacute;reo</legend>
			          <ul class="no-bullet">
			          	
				  		<li>{{  Form::checkbox('directo',1,Input::old('directo'))}}<label for="directo">Directo</label></li>
				  		<li>{{  Form::checkbox('escalas',1,Input::old('escalas'))}}<label for="escalas">Escalas</label></li>
				  		<li>{{  Form::checkbox('primera',1,Input::old('primera'))}}<label for="primera">Primera Clase</label></li>
				  		<li>{{  Form::checkbox('economica',1,Input::old('economica'))}}<label for="economica">Clase econ&oacute;mica</label></li>
				  		<li>{{  Form::checkbox('translado',1,Input::old('translado'))}}<label for="trans">Translados en destino</label></li>
				  	  </ul>	
				  	<div class="row">
				  		<div class="large-12">
							<div class="row">
							  <div class="large-3 columns">
							    <label for="right-label" class="right inline">Clase</label>
							  </div>
							  <div class="large-4 large-pull-4 columns">
							  {{  Form::text('clase',Input::old('clase'))}} 
							  </div>
							</div> 
				    	</div>
				    	  		<div class="large-12">
				    				<div class="row">
				    				  <div class="large-3 columns">
				    				    <label for="right-label" class="right inline">Empresa</label>
				    				  </div>
				    				  <div class="large-6 large-pull-2 columns">
				    				  	{{  Form::text('empresa',Input::old('empresa'))}}
				    				  </div>
				    				</div> 
				    	    	</div>		
				    </div>	
				      	<div class="row">
				      		<div class="large-12 columns">	    			
				    			    <label for="obs">Observaci&oacute;nes</label>
				    			  	{{  Form::textarea('obsaer',Input::old('obsaer'), array('rows' => '2'))}}	    			
				    			</div> 
				        	</div>	
				  </fieldset>
				</div>

				<div class="large-4 columns">
				  <fieldset>
				  	<legend>Alojamiento</legend>
					  <ul class="no-bullet">	
				  		<li>{{  Form::checkbox('desayuno',1,Input::old('desayuno'))}}<label for="desayuno">Desayuno</label></li>
				  		<li>{{  Form::checkbox('mediap',1,Input::old('mediap'))}}<label for="mediap">1/2 pensi&oacute;n</label></li>
				  		<li>{{  Form::checkbox('pencomp',1,Input::old('pencomp'))}}<label for="pencomp">pensi&oacute;n completa</label></li>
				  		<li>{{  Form::checkbox('allinclus',1,Input::old('allinclus'))}}<label for="allinclus">Todo incluido</label></li>
				  	  </ul>	
				  	<div class="row">
				  		<div class="large-12 columns">
							  <label for="obs">Observaci&oacute;nes</label>
									{{  Form::textarea('obsaloja',Input::old('obsaloja'), array('rows' => '2'))}}	  
							</div> 
				    	</div>	
				    	</fieldset>
				    </div>	
				  


					<div class="large-4 columns">
	 				 <fieldset>
	  						<legend>Documentaci&oacute;n</legend>
						  <ul class="no-bullet">	
	 				 		<li>{{  Form::checkbox('pasaporte',1,Input::old('pasaporte'))}}<label for="pasaporte">Pasaporte</label></li>
	 				 		<li>{{  Form::checkbox('visa',1,Input::old('visa'))}}<label for="visa">Visa</label></li>
					  		<li>{{  Form::checkbox('dni',1,Input::old('dni'))}}<label for="dni">Dni</label></li>
					  		<li>{{  Form::checkbox('vacunas',1,Input::old('vacunas'))}}<label for="vacunas">Vacunas</label></li>
					  	  </ul>	
	 				 	<div class="row">
	 				 		<div class="large-12 columns">	
								    <label for="obs">Observaci&oacute;nes</label>
								  	{{  Form::textarea('obsdoc',Input::old('obsdoc'), array('rows' => '2'))}}	
								</div> 
	 				   	</div>	
	 				   	</fieldset>
	 				</div>	
			</div>	
		</div>
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
			      			{{  Form::text('vigencia_viajar_desde',Input::old('vigencia_viajar_desde'), array('id'=> 'vigencia_viajar_desde'))}}
			      			<label for="vigencia_viajar_hasta">Hasta</label>
			      			{{  Form::text('vigencia_viajar_hasta',Input::old('vigencia_viajar_hasta'), array('id'=> 'vigencia_viajar_hasta'))}}
			    	  	</fieldset>
			    </div>
			    <div class="large-6 columns">  	
			    	  	<fieldset>
			    	  		<legend>Para comprar</legend>	
			    	  	      <label for="vigencia_comprar_desde">Desde</label>
			    	  	      {{  Form::text('vigencia_comprar_desde',Input::old('vigencia_comprar_desde'), array('id'=> 'vigencia_comprar_desde'))}}
			    	  	      <label for="vigencia_comprar_hasta">Hasta</label>
			    	  	      {{  Form::text('vigencia_comprar_hasta',Input::old('vigencia_comprar_hasta'), array('id'=> 'vigencia_comprar_hasta'))}}
			    	  	</fieldset>
			      	
			   </div>	
			   		  	<div class="row">
			   		  		
			   		  		 	 <div class="large-3 large-offset-1 columns">
			   		  		 	   <label for="right-label" class="right inline">Validez de la oferta</label>
			   		  		 	 </div>
			   		  		 	 <div class="large-2 large-pull-6 columns">
			   		  		 	   <input type="number" id="right-label" name="validez" value="{{{ Input::old('validez') }}}">
			   		  		 	 </div> 				    			
			   				
			   		    </div>	
			     	<div class="row">
			     		<div class="large-10 large-offset-1 columns">
			     		 	<label for="obs">Observaci&oacute;nes</label>
			     		 	{{  Form::textarea('obsvig',Input::old('obsvig'), array('rows' => '2'))}}		    				    			
			   			</div> 
			       </div>	
			      </div> 
			      </fieldset> 	  	
			 </div>	 
			<div class="large-4 columns">
				<fieldset>
					<legend>Destino</legend>
						<div class="row">
							<div class="large-8 columns">
								<label>Pa&iacute;s
									<select id="country" name="country">
										<?php
								    		foreach ($select as $pai) {
										?>
								    		<option id="country" name="country" value="<?php echo $pai['id'] ?>"> <?php echo $pai['country'] ?> </option>
										<?php
								    		}
										?>	
									</select>
								</label>
							</div>
							<div class="large-4 columns plus">
								<a href="#" data-reveal-id="myModal" class="plus"><i class="fi-plus"></i></a>

								<div id="myModal" class="reveal-modal" data-reveal>
								  <h2>Agregar Pa&iacute;s</h2>
								  <form action="">
								  <input type="text" id="pa"  name="pa" required>
								  <div id="oc" style="display:none;">
								  <p id="agregado" class="ag" name="agregado">Agregado correctamente</p>
								  </div>
								  <div id="deb" style="display:none;">
								  <p id="agregado" class="ag" name="agregado">Debe ingresar un pa&iacute;s</p>
								  </div>
								  <button onclick="recargar();">Agregar</button>
								  <a class="button custom-close-reveal-modal">Cerrar</a>
								  <a class="close-reveal-modal">&#215;</a>
								  </form>
								</div>
							</div>
						</div>
						<div class="row margin-top">
							  <div class="large-2 columns ">
							    <label for="right-label" class="right inline" id="dias" name="dias">D&iacute;as</label>
							  </div>
							  <div class="large-3  columns">
								{{  Form::number('dias',Input::old('dias'))}}	
							  </div>
							
							  <div class="large-3 columns">
							    <label for="right-label" class="right inline" id="noches" name="noches">Noches</label>
							  </div>
							  <div class="large-3  columns">
							    {{  Form::number('noches',Input::old('noches'))}}
							  </div>
							
							<div class="large-12 columns">

							{{  Form::checkbox('excursiones',1,Input::old('excursiones'))}}<label for="excursiones">Excursiones</label>
							</div>
						</div> 
					 
				</fieldset>
				
	
	      </div>

	      <div class="large-4 columns">
		      <fieldset>
		      	<legend>Etiquetas</legend>
		      	<div class="row">
					<div class="large-6 columns">
				      	  <ul class="no-bullet">
							  <li>{{  Form::checkbox('aventura',1,Input::old('aventura'))}}<label for="aventura">Aventura</label></li>
							  <li>{{  Form::checkbox('safari',1,Input::old('safari'))}}<label for="safari">Safari</label></li>
							  <li>{{  Form::checkbox('playa',1,Input::old('playa'))}}<label for="playa">Playa</label></li>
							  <li>{{  Form::checkbox('tropical',1,Input::old('tropical'))}}<label for="tropical">Tropical</label></li>
							  <li>{{  Form::checkbox('escapadas',1,Input::old('escapadas'))}}<label for="escapadas">Escapadas</label></li>
						  </ul>
					</div>
					<div class="large-6 columns">
						  <ul class="no-bullet">
							  <li>{{  Form::checkbox('cruceros',1,Input::old('cruceros'))}}<label for="cruceros">Cruceros</label></li>
							  <li>{{  Form::checkbox('cultura',1,Input::old('cultura'))}}<label for="cultura">Cultura</label></li>
							  <li>{{  Form::checkbox('luna',1,Input::old('luna'))}}<label for="luna">Luna de miel</label></li>
							  <li>{{  Form::checkbox('anos',1,Input::old('anos'))}}<label for="anos">15 a&ntilde;os</label></li>		      	
						  </ul>
					</div>	    
				</div>
		      </fieldset>	      	
	      </div>






	 	<div class="row">
			<div class="large-6 large-offset-3 columns">
				<label>Precio final</label>
				{{  Form::text('precio',Input::old('precio'))}}
			</div>
		</div>
		<div class="row">
			<div class="large-6 large-offset-3 columns">
				<label>T&iacute;tulo</label>
				{{ Form::text('titulo', Input::old('titulo')) }}
				
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="large-6 large-offset-3  columns">
					<label>Subt&iacute;tulo</label>
					{{ Form::text('subtitulo', Input::old('subtitulo')) }}
				</div>
			</div>
		</div>
			<div class="row">
				<div class="small-12 small-centered medium-4 medium-centered large-4  large-centered	 columns">
					{{  Form::checkbox('sl',1,Input::old('sl'))}}<label for="slider">Slider</label>


				</div>	
			</div>

		<div class="row">
			<div class="small-12 medium-6 medium-offset-6 large-6 large-offset-3 columns">
				<fieldset>
					<legend>Im&aacute;genes</legend>
					{{ Form::file('photo', Input::old('photo')) }}
					<div id="mas" style="display:block;">
					<a  onclick="masfile();" class="plus"><i class="fi-plus"></i></a>
					</div>

					<div id="masfoto" style="display:none;" >
					{{ Form::file('photo2', Input::old('photo2')) }}
						<div id="mas2" style="display:block;">
							<a  onclick="masfile2();" class="plus"><i class="fi-plus"></i></a>
						</div>
					</div>
					<div id="masfoto3" style="display:none;">
					{{ Form::file('photo3', Input::old('photo3')) }}
					</div>
					</div>

					
				</fieldset>	
			</div>
		</div>
		
		<div class="row">
	      <div class="large-4 large-offset-4 columns">
			
			<a   onclick="submitGuardar()"  class="button" >Guardar</a>
	       
	        
	      </div>
	     </div> 
	     <div class="row">
	      <div class="large-4 large-offset-4 columns">
	        <a  id="pdf" onclick="submitPdf()"   class="button">Imprimir cotizaci&oacute;n</a>
	        
	      </div>
	    </div>
	  

	    
	      
	  
	    
	   </div>
	 
	  </div>
	</form>
		
	
		
	    
	    
	

</div>

<script type="text/javascript">
function submitPdf(){
    $("#save-form").attr("action","cotizar/makepdf");
    $("#save-form").attr("target","_blank");

    //submit the form
    $("#save-form").submit();
}
</script>
<script type="text/javascript">
function submitGuardar(){
    $("#save-form").attr("action","cotizar/guardar");
   

    //submit the form
    $("#save-form").submit();
}
</script>

<script type="text/javascript">
	$(document).foundation();
	$('a.custom-close-reveal-modal').click(function(){
	  $('#myModal').foundation('reveal', 'close');
	});
</script>

<script type="text/javascript">
function recargar(){    
   var s = document.getElementById('country');
   var pai = document.getElementById("pa").value;
   if(pai){
   var myoption = new Option();
   myoption.text = pai;
   myoption.value = pai;
   myoption.selected = "selected";
   s.options[s.options.length] = myoption;
   var contenedor = document.getElementById("deb");
   contenedor.style.display = "none";
   var contenedor = document.getElementById("oc");
   contenedor.style.display = "block";
   }
   else{
   var contenedor = document.getElementById("deb");
   contenedor.style.display = "block";
   }
           
   
    };         
</script>
<script type="text/javascript">
function masfile(){    
   var s = document.getElementById('masfoto');
   var a = document.getElementById('mas');
   a.style.display = "none";
   s.style.display = "block";  
    };         
</script>
<script type="text/javascript">
function masfile2(){    
   var s = document.getElementById('masfoto3');
   var a = document.getElementById('mas2');
   a.style.display = "none";
   s.style.display = "block";  
    };         
</script>



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
		    $( "#vigencia_comprar_desde" ).datepicker({
		      dateFormat: 'yy-mm-dd',
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#vigencia_comprar_hasta" ).datepicker( "option", "minDate", selectedDate );
		      }
		    });
		    $( "#vigencia_comprar_hasta" ).datepicker({
		      dateFormat: 'yy-mm-dd',
		      changeMonth: true,
		      changeYear: true,
		      numberOfMonths: 1,
		      onClose: function( selectedDate ) {
		        $( "#vigencia_comprar_desde" ).datepicker( "option", "maxDate", selectedDate );
		      }
		    });
		  });
		  </script>	

@stop