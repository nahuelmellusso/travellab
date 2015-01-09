@if (count($errors->all()) > 0)
<div data-alert class="alert-box large-12 columns">
	
	<h4>Error</h4>
	Por favor, consulte el siguiente listado para corregir los  errores
  <a href="#" class="close">&times;</a>
</div>
@endif

@if ($message = Session::get('success'))
<div data-alert class="alert-box">
  {{{ $message }}}
  <a href="#" class="close">&times;</a>
</div>
@endif

@if ($message = Session::get('error'))
<div data-alert class="alert-box">
  {{{ $message }}}
  <a href="#" class="close">&times;</a>
</div>
@endif

@if ($message = Session::get('warning'))
<div data-alert class="alert-box ">
  {{{ $message }}}
  <a href="#" class="close">&times;</a>
</div>
@endif

@if ($message = Session::get('info'))
<div data-alert class="alert-box">
  {{{ $message }}}
  <a href="#" class="close">&times;</a>
</div>
@endif



