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
	
	
		
		<div class="large-4 columns">
			<label>Paises
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
		</div>

		
	    
	    
	

</div>
@stop