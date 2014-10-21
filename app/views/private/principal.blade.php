@extends('private.default')

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
	<div class="small-6 small-offert-3 medium-4 medium-offset-4 large-4 large-offset-4 columns">
		<a class="button [radius round] cotizar"  href="{{ URL::route(')}}">Cotizar</a>
	</div>

</div>
@stop