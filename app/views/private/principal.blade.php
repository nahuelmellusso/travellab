@extends('private.default')
@if(Auth::check())
{{-- Web site Title --}}
@section('title')
@parent
Principal
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
</div>

<div class="row">
	<div class="large-12 columns">
		<a href="usuario/logout">cerrar sesion</a>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<p>Usario: {{ Auth::user()->username }}</p>
	</div>
</div>

<div class="row">
	<div class="small-6 small-offert-3 medium-4 medium-offset-4 large-4 large-offset-4 columns">
		<a href="cotizar">cotizar</a>
	</div>

</div>
@endif
@stop