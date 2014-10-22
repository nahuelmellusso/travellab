@extends('private.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')

<div class="page-header text-center">
  <h1>Iniciar sesion</h1>
</div>




<form action="usuario/login" method="post">

@if (Session::has('login_errors'))
<div class="row">
  <div class="large-4 large-offset-4">
    <p style="color:#FB1D1D">El nombre de usuario o contrase&ntilde;a no son correctos</p>
  </div>
</div>

@else
<div class="row">
  <div class="large-4 large-offset-4">
    <p>Introduzca nombre de usuario y contrase&ntilde;a para continuar</p>
  </div>
</div>

@endif

  <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

  <!-- Email -->
  <div class="row">

    
      <div class="large-4 colums large-offset-4 {{{ $errors->has('username') ? 'error' : '' }}}">
        
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" value="{{{ Input::old('username') }}}" />
        {{{ $errors->first('username') }}}
      </div>
  <!-- ./ email -->

  <!-- Password -->
      <div class=" large-4 large-offset-4 colums {{{ $errors->has('password') ? 'error' : '' }}}">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" />
        {{{ $errors->first('password') }}}
      </div>
  <!-- ./ password -->

  <!-- Login button -->
    <div class="row">
      <div class="large-4 large-offset-4 columns">
        <button type="submit" class="button">Entrar</button>
      </div>
    </div>
      
  <!-- ./ login button -->
  </div>
</form>
@stop




  
       