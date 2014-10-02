@extends('private.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
  <h1>Iniciar sesion</h1>
</div>
<form method="post" action="usuario/login" class="form-horizontal">
  <!-- CSRF Token -->
  <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

  <!-- Email -->
  
</form>
@stop