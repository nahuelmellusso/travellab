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




<form action="usuario/login" method="post">

@if (Session::has('login_errors'))
<p style="color:#FB1D1D">El nombre de usuario o contrase&ntilde;a no son correctos</p>
@else
<p>Introduzca nombre de usuario y contrase&ntilde;a para continuar</p>
@endif

  <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

  <!-- Email -->
  <div class="row">
      <div class="large-4 colums {{{ $errors->has('username') ? 'error' : '' }}}">
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" value="{{{ Input::old('username') }}}" />
        {{{ $errors->first('username') }}}
      </div>
  <!-- ./ email -->

  <!-- Password -->
      <div class=" large-4 colums {{{ $errors->has('password') ? 'error' : '' }}}">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" />
        {{{ $errors->first('password') }}}
      </div>
  <!-- ./ password -->

  <!-- Login button -->
      <button type="submit" class="button">Login</button>
  <!-- ./ login button -->
  </div>
</form>
@stop




  